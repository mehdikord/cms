<?php
namespace App\Interfaces\Users;

interface UsersInterface
{

    //Management
    public function managers_index();

    public function managers_store($request);

    public function managers_update($request,$item);

    public function managers_delete($item);



}