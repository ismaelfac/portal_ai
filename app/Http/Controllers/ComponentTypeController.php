<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\ComponentType;
use Illuminate\Http\Request;

class ComponentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $component_types = ComponentType::paginate(10);
        return view('modules.component_type.index', compact('component_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.component_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $component_types = ComponentType::create([
            "title" => strtoupper($request['title']),
            "slug" => Str::of($request['title'])->slug('-'),
        ]);
        return redirect()->route("component_types.index", $component_types->id)->with("success", __("Tipo de Componente Creado"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComponentType  $componentType
     * @return \Illuminate\Http\Response
     */
    public function show(ComponentType $componentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComponentType  $componentType
     * @return \Illuminate\Http\Response
     */
    public function edit(ComponentType $componentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComponentType  $componentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComponentType $componentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComponentType  $componentType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComponentType $componentType)
    {
        //
    }
}
