<?php

namespace App\Repository;
use App\Models\User;
use App\IRepository\IUserRepository;
use Illuminate\Support\Facades\Hash;

class UserRepository implements IUserRepository
{
    public function create($data){
        $data['password'] = $this->hashPassword($data->password);
        return User::saveOrFail($data);
    }
    public function show($id){

    }
    public function edit($data, $id){

    }
    public function delete($id){

    }

    public function hashPassword($password){
        return Hash::make($password);
    }

    public function all(){
      
    }
}