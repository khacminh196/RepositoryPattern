<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface {
    public function getAll();
    public function findById($id);
    public function create(Request $request);
}