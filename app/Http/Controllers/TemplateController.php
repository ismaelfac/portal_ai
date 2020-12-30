<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use App\Http\Requests\Api\TemplateRequest;
use App\Repositories\TemplateRepository;

class TemplateController extends Controller
{

    private $TemplateRepository;

    public function __construct(TemplateRepository $templateRepository)
    {
        $this->TemplateRepository = $templateRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = $this->TemplateRepository->getAll('contract');
        return view('modules.template.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contracts = \App\Models\Contract::select('id','title')->where('isActive', true)->get();
        return view('modules.template.create', compact('contracts'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Api  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TemplateRequest $request)
    {
        $this->TemplateRepository->createdTemplate($request->all());
        return redirect()->route("templates.index")->with("success", __("Contrato Creado"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show($template)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit($template)
    {
        dd($template);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(TemplateRequest $request, $template)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy($template)
    {
        //
    }
}
