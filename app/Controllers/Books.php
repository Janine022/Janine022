<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Controller;


class Books extends BaseController
{
	public function book()
	{
		
        $data = [];
		helper(['form']);
		$bookModel = new BookModel();

		$data['user_data'] = $bookModel->orderBy('book_id', 'DESC')->findAll();

	

		return view('book', $data);
	}



    public function create()

        {   $data = [];

            helper(['form']);

            if ($this->request->getMethod() == 'post') {
                
                $rules = [
                    'book_title' => 'required',
                   'category' => 'required',
                    'author' => 'required',
                    'description' => 'required',
                    'isbn' => 'required',
                    
                ];

                if (! $this->validate($rules)) {
                    $data['validation'] = $this->validator;
                }else{
                    $model = new BookModel(); 

                    $newData = [
                        'book_title' => $this->request->getVar('book_title'),
                        'category' => $this->request->getVar('category'),
                        'author' => $this->request->getVar('author'),
                        'description' => $this->request->getVar('description'),
                        'isbn' => $this->request->getVar('isbn'),
                        'date_publication' => $this->request->getVar('date_publication'),

                        
                        
                    ];
                    $model->save($newData);
                    $session = session();
                    $session->setFlashdata('success', 'Successful Registration');
                    //return view('/staff');

                    $bookModel = new BookModel();

		            $data['user_data'] = $bookModel->orderBy('book_id', 'DESC')->paginate(10);

	

		            return view('book', $data);
                    

                }
            }
                    echo view('create_book', $data);
        }

        public function edit($book_id)
        {  
    
            helper(['form']);
    
            $user= new BookModel();
            $data['user_data'] = $user->find($book_id);
            
            return view('edit_book',$data);
        }

        public function view($book_id)
        {  
    
            helper(['form']);
    
            $user= new BookModel();
            $data['user_data'] = $user->find($book_id);
            
            return view('view_book',$data);
        }

        public function update($book_id)
	{  

		$data = [];

		helper(['form']);

		$user= new BookModel();
		$user->find($book_id);
		$newData = [
			'book_title' => $this->request->getVar('book_title'),
            'category' => $this->request->getVar('category'),
            'author' => $this->request->getVar('author'),
            'description' => $this->request->getVar('description'),
            'isbn' => $this->request->getVar('isbn'),
            'date_publication' => $this->request->getVar('date_publication'),
		];
		
				$user->update($book_id,$newData);

                // load staff datatables
				$userModel = new BookModel();
				$data['user_data'] = $userModel->orderBy('book_id', 'DESC')->findAll();
				return view('book', $data);
		        // -----   
				echo view('book');

	}

    public function delete($book_id)
	{   
		$user= new BookModel();
		$user->delete($book_id);



		 // load staff datatables
		 $userModel = new BookModel();
		 $data['user_data'] = $userModel->orderBy('book_id', 'DESC')->findAll();
		 return view('book', $data);
		 // -----   
		 echo view('book');
	}


    public function save()
	{   

          $data = [];

            helper(['form']);

            // $data['books']= $book_id;
               //echo "<pre>";
                //print_r($data);

            //die();

            if ($this->request->getMethod() == 'post') {
                
                $rules = [
                    'book_id' => 'required',
                    'staff_id' => 'required',
                    'barcode' => 'required',
                    'date_purchase' => 'required',
                    
                ];

                if (! $this->validate($rules)) {
                    $data['validation'] = $this->validator;
                }else{
                    $model = new BookModel(); 

                    $newData = [
                        'book_id' => $this->request->getVar('book_id'),
                        'staff_id' => $this->request->getVar('staff_id'),
                        'barcode' => $this->request->getVar('barcode'),
                        'date_purchase' => $this->request->getVar('date_purchase'),
                          
                    ];
                    $model->save($newData);
                    $session = session();
                    $session->setFlashdata('success', 'Successful Registration');
                    //return view('/staff');

                    // $bookModel = new InventoryModel();

		            // $data['inventory'] = $bookModel->orderBy('book_id', 'DESC')->paginate(10);

                    $InventoryModel = new BookModel();
         
                    $data['user_data'] = $InventoryModel->getdetails();
                    

		            return view('inventory_book', $data);
                    
                    // echo "<pre>";
                    // print_r($data);
                    

                }
            }
                    echo view('inventory_book', $data);


        	}
   



    
 







    }