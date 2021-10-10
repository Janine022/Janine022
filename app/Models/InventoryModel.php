<?php 

namespace App\Models;

use App\Models\InventoryModel;

use CodeIgniter\Model;

class InventoryModel extends Model{

  protected $table = 'inventory';
  protected $primaryKey = 'id ';
  protected $allowedFields = ['book_id','staff_id','barcode', 'date_purchase'];


    public function getdetails()
    {
    

      $builder = $this->db->table('inventory');
      $builder->select('*, COUNT(books.book_id) as quantity');
      $builder->join('books',  'books.book_id = inventory.book_id');
      $builder->groupBy('books.book_id');
      $books = $builder->get()->getResult();

      return $books;

  
       
    }

  
}
?>

  

