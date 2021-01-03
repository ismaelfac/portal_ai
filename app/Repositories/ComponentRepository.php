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

    public function getComponents()
    {
        //** { components : { id: 1, title: 'titleComponent} componentTypes: { id: 1, title:'CategoryTitleType'} }*//
        return Component::getComponentsActivesAndPublishedWithComponentsType();
    }
}
