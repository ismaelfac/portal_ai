<?php

namespace App\Repositories;

use App\Repositories\ContractRepository;
use App\Models\{ Contract, ComponentTemplate, Template };
use Illuminate\Support\Facades\DB;

class TemplateRepository extends ContractRepository
{
    public function getModel()
    {
        return new Template();
    }

    public function createdTemplate($template)
    {
        $template = $this->created($template);
        $contracts = Contract::getContractWithComponentsAttribute($template->id);
        dd($contracts);
        //$contracts = Contract::with('components')->where('id',$template->contract_id)->get();
        foreach (($contracts[0]->components) as $component) {
            $parameters = $this->cadena($component->content);
            $component_template = ComponentTemplate::create([
                "template_id" => $template->id,
                "component_id" => $component->id,
                "title_component" => $component->title,
                "parameters" => $parameters,
                "content" => $component->content
            ]);
        }
    }

    static function cadena($cadena)
    {
        $list = [];
        $long = explode("||", $cadena);
        for ($i=1, $size = count($long); $i < $size; ++$i) {
            array_push($list, $long[$i]);
            $i++;
        }
        return json_encode($list);
    }


}
