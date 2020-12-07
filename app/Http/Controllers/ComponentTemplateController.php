<?php

namespace App\Http\Controllers;

use App\Models\{ Contract, Template, ComponentTemplate };
use Illuminate\Http\Request;

class ComponentTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getComponentTemplate($template_id){
        $template = Template::with('contract')->where('id',$template_id)->get();
        $contract_id = $template[0]->contract->id;
        $components = Contract::with('components')->where('id',$contract_id)->get();
        $componentTemplate = $components[0]->components;
        return $this->create($template, $componentTemplate);
    }
    public function create($template, $componentTemplate)
    {
        $contracts = [];
        //dd($template);
        return view('modules.component_template.create', compact('template', 'componentTemplate', 'contracts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComponentTemplate  $componentTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(ComponentTemplate $componentTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComponentTemplate  $componentTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(ComponentTemplate $componentTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComponentTemplate  $componentTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComponentTemplate $componentTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComponentTemplate  $componentTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComponentTemplate $componentTemplate)
    {
        //
    }
}
