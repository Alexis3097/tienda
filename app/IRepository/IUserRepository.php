<?php

namespace App\IRepository;

use Illuminate\Http\Request;

interface IUserRepository
{
    public function create($data);
    public function show($id);
    public function edit($data, $id);
    public function delete($id);
    public function all();
}