<?php

namespace App\Http\Controllers;

use App\Models\ComponentContract;
use App\Models\Component;
use Illuminate\Http\Request;

class ComponentContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $components = Component::select('id', 'title', 'content')->where('isActive',true)->paginate(10);
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
