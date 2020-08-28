<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface {
    
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->get();
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function create(Request $request)
    {
        return $this->model->create($request->all());
    }
}