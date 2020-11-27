<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::with('components')->paginate(10);
        dd($contracts);
        return view('modules.contract.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules.contract.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contract = Contract::create([
            "code" => $request['contract_number'],
            "title" => $request['title_contract'],
            "description" => $request['description_contract'],
            "isActive" => true
        ]);
        return redirect()->route("contracts.index", $contract->id)->with("success", __("Contrato Creado"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contract $contract)
    {
        //
    }

    public function downloadpdf(){
        $data = [
            'titulo' => 'Aliados Inmobiliarios sa',
            'subtitulo' => 'Contrato de Arrendamiento sin Administracion',
            'administrador' => 'ADMINISTRADOR: ALIADOS INMOBILIARIOS S.A. identificado con Nit No. 802.025.198-7 representada legalmente por JOSE EDUARDO FERREIRA DAZA identificado con la cédula de ciudadanía No. 79.270.662 expedida en Bogotá D.C. ',
            'propietario' => 'PROPIETARIO: COMERCIALIZADORA SAYARA S.A.S., identificado con Nit. 900.360.741-8 representada legalmente por YUBRAN ABEL BARAKAT BARRANCO identificado con número de cedula No.84.070.197 expedida en Maicao.'
        ];

        $pdf = \PDF::loadView('pdf.contract', $data);

        return $pdf->download('archivo.pdf');
    }
}
