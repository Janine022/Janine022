<?php 

namespace App\Models;

use App\Models\UserModel;

use CodeIgniter\Model;

class UserModel extends Model{
  protected $table = 'users';
  protected $primaryKey = 'employee_id';
  protected $allowedFields = ['employee_id', 'name', 'email', 'password', 'user_type', 'date_registered'];
  

  protected function passwordHash(array $data){
    if(isset($data['data']['password']))
      $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

    return $data;
  }


}