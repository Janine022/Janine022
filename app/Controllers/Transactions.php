<?php

namespace App\Controllers;

use App\Models\TransactionModel;
use CodeIgniter\Controller;


class Transactions extends BaseController
{

    public function transaction()

	{  $data = [];
		helper(['form']);
    
		$transactionModel = new TransactionModel();

		$data['user'] = $transactionModel->getID();
			
       
             //return view('viewajax', $data);  
       
			 echo view('book_transaction');
        // echo "<pre>";
        // print_r($data);
		
		 
	}


    public function userDetails()

	{   
        // POST data
        $postData = $this->input->post();
    
        // get data
        $data = $this->Main_model->getUserDetails($postData);
    
        echo json_encode($data);
      }
	

    


    
 







    }