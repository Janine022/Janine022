<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;


class Users extends BaseController
{
	

	public function index()
	{
		$data = [];
		helper(['form']);


		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				//'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
				'password' => 'required|validateUser[email,password]',
		
			];

			$errors= [
				'password' =>[
					'validateUser' => 'Email or Password don\'t match'

				]
			];

			if (! $this->validate($rules, $errors)) {

				$model = new UserModel(); 

				$users  = $model->where('email',$this->request->getVar('email'))
								->first();
				

				$this->setUserSession($users);
				//$session->setFlashdata('success', 'Successful Registration');

				return view('\homeview');
				
			
			}else{
				$data['validation'] = $this->validator;

			}
		}



		echo view('login', $data);
	}




	private function setUserSession($users){
		$data = [
			'employee_id' => $users['employee_id'],
			'name' => $users['firstname'],
			
			'email' => $users['email'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	public function register()
	{
		// return view('welcome_message');
		$data = [];

		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'name' => 'required|min_length[3]|max_length[20]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
				'password' => 'required|min_length[8]|max_length[255]',
				'repeatpassword' => 'matches[password]',
				 'user_type'=> 'required'
				  
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel(); 

				$newData = [
					'name' => $this->request->getVar('name'),
					'email' => $this->request->getVar('email'),
					'password' => $this->request->getVar('password'),
					'user_type' => $this->request->getVar('user_type'),
					 //'date-registered' => $this->request->getVar('date-registered')
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return view('/login');
				

			}
		}



		echo view('register', $data);
	}

	public function staff()

	{
		$userModel = new UserModel();
        $data['users'] = $userModel->orderBy('employee_id', 'DESC')->findAll();
        return view('staff', $data);

		echo view('staff');
	}

	public function create()

	{   $data = [];

		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'name' => 'required|min_length[3]|max_length[20]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
				'password' => 'required|min_length[8]|max_length[255]',
				// 'repeatpassword' => 'matches[password]',
				// 'user_type'=> 'required'


				
				  
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel(); 

				$newData = [
					'name' => $this->request->getVar('name'),
					'email' => $this->request->getVar('email'),
					'password' => $this->request->getVar('password'),
					'user_type' => $this->request->getVar('user_type'),
					// 'date-registered' => $this->request->getVar('date-registered')
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				//return view('/staff');

				$userModel = new UserModel();
				$data['users'] = $userModel->orderBy('employee_id', 'DESC')->findAll();
				return view('staff', $data);

				echo view('staff');
				

			}
		}
		echo view('create', $data);
	}

	public function edit($employee_id)
	{  

		helper(['form']);

		$user= new UserModel();
		$data['users'] = $user->find($employee_id);
		
		return view('edit',$data);
	}

	public function update($employee_id)
	{  

		$data = [];

		helper(['form']);

		$user= new UserModel();
		$user->find($employee_id);
		$newData = [
			'name' => $this->request->getVar('name'),
			'email' => $this->request->getVar('email'),
			'password' => $this->request->getVar('password'),
			'user_type' => $this->request->getVar('user_type'),
			// 'date-registered' => $this->request->getVar('date-registered')
		];
		
				$user->update($employee_id,$newData);

                // load staff datatables
				$userModel = new UserModel();
				$data['users'] = $userModel->orderBy('employee_id', 'DESC')->findAll();
				return view('staff', $data);
		        // -----   
				echo view('staff');

	}

	
	public function delete($employee_id)
	{   
		$user= new UserModel();
		$user->delete($employee_id);



		 // load staff datatables
		 $userModel = new UserModel();
		 $data['users'] = $userModel->orderBy('employee_id', 'DESC')->findAll();
		 return view('staff', $data);
		 // -----   
		 echo view('staff');
	}


	// public function homeview()
	// {
		
    //     $data = [];
	// 	helper(['form']);

	// 	$userModel = new UserModel();

	// 	$data['users'] = $userModel->orderBy('employee_id', 'DESC')->findAll();

	

	// 	return view('homeview', $data);
	// 	echo view('homeview');
	// }



	
}

  