<?php 

namespace App\Models;

use App\Models\TransactionModel;

use CodeIgniter\Model;

class TransactionModel extends Model{

  protected $table = 'customers';
  protected $primaryKey = 'user_id ';
  protected $allowedFields = [ 'user_id ','firstname', 'lastname', 'email', 'home_address', 'contact_no','age','course','school_year','user_type', 'date_registered'];



    public function getID()
    {
    

      $builder = $this->db->table('customers');
      $builder->select('user_id');
      $users = $builder->get()->getResult();


      return $users;
       
    }

    public function getUserDetails($postData=array())
    {
      $response = array();

      if(isset($postData['user_id']) ){
 
        // Select record
        $builder->select('*');
        $builder->where('user_id', $postData['user_id']);
        $records = $builder->get(('customers'));
        $users= $records->getResult();
        
   
      }
   
      return $response;
    }

    


    // public function getAlldetails()
    // {
    

    //   $builder = $this->db->table('customers');
    //   $builder->select('*');
    //   $builder->join('inventory',  'inventory.book_id = customers.user_id');
    //   $users = $builder->get()->getResult();

    //   return $users;
       
    // }

    

    

    

  }