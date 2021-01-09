<?php

namespace App\Repositories;

abstract class BaseRepository
{
    abstract protected function getModel();


    public function find($id)
    {
        return $this->getModel()->find($id);
    }

    public function getAll(string $relations = NULL, array $where = NULL)
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
