<?php

namespace App\Controllers;

use App\Models\InventoryModel;
use CodeIgniter\Controller;


class Inventory extends BaseController
{

    public function save($book_id)
	{   

          $data = [];

            helper(['form']);

            // $data['books']= $book_id;
            //    echo "<pre>";
            //     print_r($data);

            // die();
            
            $data['books']= $book_id;

            $session = session();
            echo "Employee ID : ".$session->get('employee_id');
            $staffId=$session->get('employee_id');


            if ($this->request->getMethod() == 'post') {
                
                $rules = [
                    'book_id' => 'required',
                    'barcode' => 'required',
                    'date_purchase' => 'required',
                    
                ];

                if (! $this->validate($rules)) {
                    $data['validation'] = $this->validator;
                }else{
                    $model = new InventoryModel(); 

                  

                    $newData = [
                        'book_id' => $this->request->getVar('book_id'),
                        'staff_id' => $session->get('employee_id'),
                        'barcode' => $this->request->getVar('barcode'),
                        'date_purchase' => $this->request->getVar('date_purchase'),
                        
                          
                    ];
                   
                    $model->save($newData);
                    $session = session();
                    $session->setFlashdata('success', 'Successful Registration');
                    //return view('/staff');

                    // $bookModel = new InventoryModel();

		            // $data['inventory'] = $bookModel->orderBy('book_id', 'DESC')->paginate(10);

                    $InventoryModel = new InventoryModel();
         
                    $data['books'] = $InventoryModel->getdetails();
                    
                   
		            return view('inventory_details', $data);
                    
                    // echo "<pre>";
                    // print_r($data);
                    

                }
            }      
                  
                    echo view('inventory_book', $data);


        	}

           
   


    public function inventory(){

        $data = [];
		helper(['form']);

        $InventoryModel = new InventoryModel();
         
            $data['books'] = $InventoryModel->getdetails();

            return view('inventory_details', $data); 
       
        echo view('inventory_details');
        //echo "<pre>";
        //print_r($data);
    }
	

  
   
}


