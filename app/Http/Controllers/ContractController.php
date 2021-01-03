<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Contract;
use App\Http\Requests\Api\ContractRequest;
use App\Repositories\ContractRepository;

class ContractController extends Controller
{
    private $ContractRepository;

    public function __construct(ContractRepository $contractRepository)
    {
        $this->ContractRepository = $contractRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = $this->ContractRepository->getAll();
        return view('modules.contract.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $components = \App\Models\Component::where('isActive',true)->get();
        return view('modules.contract.create',compact('components'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContractRequest $request)
    {
        $contract = Contract::create([
            "title" => $request['title_contract'],
            "slug" => Str::of($request['title_contract'])->slug('-'),
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
    public function update(ContractRequest $request, Contract $contract)
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

    public function downloadpdf($contract){
        $data = Contract::where('id',$contract)->with('components')->get();

        $pdf = \PDF::loadView('pdf.contract', compact('data'));
        //dd($pdf);
        return $pdf->download($data[0]->title.'.pdf');
    }
}
