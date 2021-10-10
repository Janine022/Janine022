<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  

class Signin extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('signin');
    } 
  
    public function loginAuth()
    {
        $session = session();

        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'employee_id' => $data['employee_id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return view('/homeview');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                //return redirect()->to('/login');
                return view('/login');
            }

        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return view('/login');
        }
    }
}