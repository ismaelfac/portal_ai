<?php

namespace App\Repositories;

abstract class BaseRepository
{
    abstract public function getModel();


    public function find($id)
    {
        return $this->getModel()->find($id);
    }

    public function getAll(string $relations = NULL)
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
