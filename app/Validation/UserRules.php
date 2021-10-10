<?php
namespace App\Validation;
use App\Models\UserModel;

class UserRules
{

  public function validateUser(string $str, string $fields, array $data){
    $model = new UserModel();
    $users = $model->where('email', $data['email'])
                  ->first();

    if(!$users)
      return false;

    return password_verify($data['password'], $users['password']);


    
  }
}
