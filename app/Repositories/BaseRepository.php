<?php

namespace App\Repositories;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

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
        return $this->getModel()->create([
            $this->getData($data->request),
            (!'slug') ?: 'slug' => Str::slug($data['title'], '-'),
            (!'user_id') ?: 'user_id' => Auth::id(),
            (!'isActive') ?: 'isActive' => 1
        ]);
    }

    public function getData($data)
    {
        foreach ($data as $key) {
            
        }
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
