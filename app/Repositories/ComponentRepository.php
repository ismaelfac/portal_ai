<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\{ Component };

class ComponentRepository extends BaseRepository
{
    public function getModel()
    {
        return new Component();
    }

    public function getComponentWithComponentsType()
    {
        return Component::getComponentsWithComponentsType();
    }
}
