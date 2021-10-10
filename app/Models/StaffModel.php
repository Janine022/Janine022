<?php 
namespace App\Models;
use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'employee_id';
    protected $allowedFields = ['name', 'email', 'password', 'user_type', 'date_registered'];


    

  

}