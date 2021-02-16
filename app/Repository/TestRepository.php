<?php

namespace App\Repository;
use App\Models\Test;
use App\IRepository\ITestRepository;

class TestRepository implements ITestRepository
{
    public function create($data){
        return Test::saveOrFail($data);
    }
    public function show($id){

    }
    public function edit($data, $id){

    }
    public function delete($id){

    }
    public function all(){
        return Test::all();
    }
}