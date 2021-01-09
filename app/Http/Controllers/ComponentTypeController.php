<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\Api\ComponenTypeRequest;
use App\Repositories\ComponentsTypeRepository;

class ComponentTypeController extends Controller
{

    private $ComponentsTypeRepository;

    public function __construct(ComponentsTypeRepository $componentsTypeRepository)
    {
        $this->ComponentsTypeRepository = $componentsTypeRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $component_types = $this->ComponentsTypeRepository->getAll('');
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
    public function store(ComponenTypeRequest $request)
    {
        $component_types = $contract = $this->ComponentsTypeRepository->created($request);
        return redirect()->route("component_types.index", $component_types->id)->with("success", __("Tipo de Componente Creado"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\  $componentType
     * @return \Illuminate\Http\Response
     */
    public function show($componentType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ $componentType
     * @return \Illuminate\Http\Response
     */
    public function edit($componentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\  $componentType
     * @return \Illuminate\Http\Response
     */
    public function update(ComponenTypeRequest $request, $componentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\  $componentType
     * @return \Illuminate\Http\Response
     */
    public function destroy($componentType)
    {
        //
    }
}
