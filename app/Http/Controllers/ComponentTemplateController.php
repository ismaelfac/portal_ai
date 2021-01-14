<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\{ Contract, Template, ComponentTemplate };
use Illuminate\Http\Request;

class ComponentTemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
    public function getComponentTemplate($slug){
        $template = Template::with('component_templates')->where('slug',$slug)->get();//obtengo el template
        return $this->create($template);
    }

    public function create($template)
    {
        return view('modules.component_template.create', compact('template'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $parameters)
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
