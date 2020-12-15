<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Models\{ Contract, ComponentTemplate, Template };
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = Template::with('contract')->where('isActive',true)->paginate();
        return view('modules.template.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contracts = Contract::select('id','title')->where('isActive', true)->get();
        return view('modules.template.create', compact('contracts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $template = Template::create([
            "contract_id" => $request['contract_id'],
            "title" => strtoupper($request['title_template']),
            "description" => strtoupper($request['description_template']),
            "isActive" => true
        ]);
        $contracts = Contract::with('components')->where('id',$template->contract_id)->get();
        foreach (($contracts[0]->components) as $component) {
            $component_template = ComponentTemplate::create([
                "template_id" => $template->id,
                "component_id" => $component->id,
                "title" => $component->title,
                "content" => $component->content
            ]);
        }
        //dd($component_template);
        return redirect()->route("templates.index", $template->id)->with("success", __("Contrato Creado"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template $template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        //
    }
}
