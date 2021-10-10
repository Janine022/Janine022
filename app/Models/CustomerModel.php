<?php 

namespace App\Models;

use App\Models\CustomerModel;

use CodeIgniter\Model;

class CustomerModel extends Model{
  protected $table = 'customers';
  protected $primaryKey = 'user_id';
  protected $allowedFields = ['book_title', 'name', 'email', 'home_address', 'contact_no','age','course','school_year','user_type', 'date_registered'];
  




}