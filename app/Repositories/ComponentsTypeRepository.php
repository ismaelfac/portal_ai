<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\{ ComponentType };

class ComponentsTypeRepository extends BaseRepository
{
    public function getModel()
    {
        return new Component();
    }

    public function getRulesComponentsType(string $componentType): void
    {
        switch ($componentType) {
            case 1:
                # code...
                break;
            case 2:
                # code...
                break;
            case 3:
                # code...
                break;
            default:
                # code...
                break;
        }
    }
}
