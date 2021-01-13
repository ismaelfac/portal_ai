<?php

namespace App\Repositories;
use App\Models\User;

abstract class BaseRepository
{


    abstract protected function getModel();


    public function find($id)
    {
        return $this->getModel()->find($id);
    }

    public function getAll()
    {
        return $this->getModel()->where('isActive',true)->paginate();
    }

    public function created($data)
    {
        return $this->getModel()->create($data);
    }

    public function updated($object, $data)
    {
        $object->fill($data);
        $object->save();
        return $object;
    }

    public function deleted($object)
    {
        $object->delete();
    }
}
