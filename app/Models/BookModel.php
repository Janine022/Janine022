<?php 

namespace App\Models;

use App\Models\BookModel;

use CodeIgniter\Model;

class BookModel extends Model{

  protected $table = 'books';
  protected $primaryKey = 'book_id ';
  protected $allowedFields = ['book_id ','book_title','category', 'author', 'description', 'date_publication','isbn'];



  

  public function getdetails()
  {
  

    $builder = $this->db->table('books');
    $builder->select('*, COUNT(inventory.book_id) as quantity');
    $builder->join('inventory',  'inventory.book_id = book.book_id');
    $builder->groupBy('inventory.book_id');
    $books = $builder->get()->getResult();

    return $books;


     
  }
   

}


