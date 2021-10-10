<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\Controller;


class Customers extends BaseController
{
	public function customer()
	{
		
        $data = [];
		helper(['form']);
		$customerModel = new CustomerModel();

		$data['user_data'] = $customerModel->orderBy('user_id', 'DESC')->findAll();

	

		return view('customer', $data);
	}



    public function create()

        {   $data = [];

            helper(['form']);

            if ($this->request->getMethod() == 'post') {
                
                $rules = [
                    'name' => 'required|min_length[3]|max_length[20]',
                  
                    'home_address' => 'required',
                    'contact_no' => 'required|max_length[14]',
                    'age' => 'required|max_length[3]',
                    'course' => 'required',
                    'school_year' => 'required|min_length[3]|max_length[20]',
                    'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
    
                ];

                if (! $this->validate($rules)) {
                    $data['validation'] = $this->validator;
                }else{
                    $model = new CustomerModel(); 

                    $newData = [
                        'name' => $this->request->getVar('name'),
                        
                        'email' => $this->request->getVar('email'),
                        'password' => $this->request->getVar('password'),
                        'user_type' => $this->request->getVar('user_type'),

                        'home_address' => $this->request->getVar('home_address'),
                        'contact_no' => $this->request->getVar('contact_no'),
                        'age' => $this->request->getVar('age'),
                        'course' => $this->request->getVar('course'),
                        'school_year' => $this->request->getVar('school_year'),
                        
                    ];
                    $model->save($newData);
                    $session = session();
                    $session->setFlashdata('success', 'Successful Registration');
                    //return view('/staff');

                    $customerModel = new CustomerModel();

		            $data['user_data'] = $customerModel->orderBy('user_id', 'DESC')->paginate(10);

	

		            return view('customer', $data);
                    

                }
            }
                    echo view('create_customer', $data);
        }

        public function edit($user_id)
        {  
    
            helper(['form']);
    
            $user= new CustomerModel();
            $data['user_data'] = $user->find($user_id);
            
            return view('edit_customer',$data);
        }

        public function view($user_id)
        {  
    
            helper(['form']);
    
            $user= new CustomerModel();
            $data['user_data'] = $user->find($user_id);
            
            return view('view_costumer',$data);
        }

        public function update($user_id)
	{  

		$data = [];

		helper(['form']);

		$user= new CustomerModel();
		$user->find($user_id);
		$newData = [
			'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'user_type' => $this->request->getVar('user_type'),

            'home_address' => $this->request->getVar('home_address'),
            'contact_no' => $this->request->getVar('contact_no'),
            'age' => $this->request->getVar('age'),
            'course' => $this->request->getVar('course'),
            'school_year' => $this->request->getVar('school_year'),
		];
		
				$user->update($user_id,$newData);

                // load staff datatables
				$userModel = new CustomerModel();
				$data['user_data'] = $userModel->orderBy('user_id', 'DESC')->findAll();
				return view('customer', $data);
		        // -----   
				echo view('customer');

	}

    public function delete($user_id)
	{   
		$user= new CustomerModel();
		$user->delete($user_id);



		 // load staff datatables
		 $userModel = new CustomerModel();
		 $data['user_data'] = $userModel->orderBy('user_id', 'DESC')->findAll();
		 return view('customer', $data);
		 // -----   
		 echo view('customer');
	}


    







    }