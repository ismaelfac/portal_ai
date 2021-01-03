<?php

namespace App\Repositories;

use App\Repositories\ComponentsTypeRepository;
use App\Models\{ Component };

class ComponentRepository extends ComponentsTypeRepository
{
    public function getModel()
    {
        return new Component();
    }

    public function getComponentWithComponentsType()
    {
        $components =  Component::getComponentsWithComponentsType();
        $countComponentsType = $components->component_types->count();
        dd($countComponentsType);
        $componentsType = $components->each(function ($item, $key) {
            dd($item->component_types->title);
        });

        //Encabezado - Paragrafo - Pie de Pagina
    }
}
