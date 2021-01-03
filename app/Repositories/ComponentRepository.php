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
        return Component::getComponentsWithComponentsType();
        //Encabezado - Paragrafo - Pie de Pagina
    }
}
