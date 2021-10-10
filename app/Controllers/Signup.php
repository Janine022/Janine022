<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class Signup extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('signup', $data);
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'name' => 'required|min_length[3]|max_length[20]',
                  
                    'home_address' => 'required',
                    'contact_no' => 'required|max_length[14]',
                    'age' => 'required|max_length[3]',
                    'password'      => 'required|min_length[4]|max_length[50]',
                    'confirmpassword'  => 'matches[password]',
                   
                    
                    'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();

            $data = [
                        'name' => $this->request->getVar('name'),
                        
                        'email' => $this->request->getVar('email'),
                        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                        'user_type' => $this->request->getVar('user_type'),

                        'home_address' => $this->request->getVar('home_address'),
                        'contact_no' => $this->request->getVar('contact_no'),
                        'age' => $this->request->getVar('age'),
                        'course' => $this->request->getVar('course'),
                        'school_year' => $this->request->getVar('school_year'),
              
            ];

            $userModel->save($data);

            return view('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
          
    }
  
}