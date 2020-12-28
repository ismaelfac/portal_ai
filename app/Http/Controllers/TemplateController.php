<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Http\Requests\Api\TemplateRequest;
use App\Models\{ Contract, ComponentTemplate, Template };

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

    static function cadena($cadena)
    {
        $list = [];
        $long = explode("||", $cadena);
        for ($i=1, $size = count($long); $i < $size; ++$i) {
            array_push($list, $long[$i]);
            $i++;
        }
        return json_encode($list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TemplateRequest $request)
    {
        $template = Template::create([
            "contract_id" => $request['contract_id'],
            "title" => strtoupper($request['title']),
            "slug" => Str::of($request['title'])->slug('-'),
            "description" => strtoupper($request['description']),
            "isActive" => true
        ]);
        $contracts = Contract::with('components')->where('id',$template->contract_id)->get();
        foreach (($contracts[0]->components) as $component) {
            $parameters = $this->cadena($component->content);
            $component_template = ComponentTemplate::create([
                "template_id" => $template->id,
                "component_id" => $component->id,
                "title_component" => $component->title,
                "parameters" => $parameters,
                "content" => $component->content
            ]);
        }
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
        dd('edit template');
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
