<?php

namespace App\Http\Controllers;

use App\Models\ComponentContract;
use App\Models\Component;
use Illuminate\Http\Request;
use App\Repository\ComponentRepository;

class ComponentContractController extends Controller
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
        $components = $this->ComponentRepository->getAll();
        return view('modules.component_contract.index', compact('components'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\ComponentContract  $componentContract
     * @return \Illuminate\Http\Response
     */
    public function show(ComponentContract $componentContract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComponentContract  $componentContract
     * @return \Illuminate\Http\Response
     */
    public function edit(ComponentContract $componentContract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComponentContract  $componentContract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComponentContract $componentContract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComponentContract  $componentContract
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComponentContract $componentContract)
    {
        //
    }
}
