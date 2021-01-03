<?php

namespace App\Repositories;

use App\Repositories\ComponentRepository;
use App\Models\{ Contract };

class ContractRepository extends ComponentRepository
{
    public function getModel()
    {
        return new Contract();
    }

    public function created($data)
    {
        $contractNew = $this->created($data);
    }

}
