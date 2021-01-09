<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\ {Component, ComponentType };
use Illuminate\Http\Request;
use App\Repositories\ComponentRepository;

class ComponentController extends Controller
{
    private $ComponentRepository;

    public function __construct(ComponentRepository $componentRepository)
    {
        $this->ComponentRepository = $componentRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $components = $this->ComponentRepository->getAll('');
        return view('modules.component.index', compact('components'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $component_types = ComponentType::all();
        return view('modules.component.create', compact('component_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $component = Component::create([
            "component_type_id" => $request['component_type_id'],
            "title" => $request['title'],
            "slug" => Str::of($request['title'])->slug('-'),
            "content" => $request['content'],
            "isActive" => true
        ]);
        //dd($component);
        return redirect()->route("components.index", $component->id)->with("success", __("Componente Creado"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function show(Component $component)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function edit($component)
    {
        dd($component);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Component $component)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function destroy(Component $component)
    {
        //
    }
}
