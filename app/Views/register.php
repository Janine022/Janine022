<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Libarary Management System- Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url();?>/library/public/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>/library/public/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>

                            </div>

                            <?php if(isset($validation)):?>
                            <div class="alert alert-warning">
                            <?= $validation->listErrors() ?>
                            </div>
                            <?php endif;?>

                            <form action="/Signup/store" method="post">
                            
                            <div class="">
                                <div class="form-group">
                                   
                                        <input type="text" class="form-control form-control-user" name="name" id="name"
                                            placeholder="Full Name" value="">
                                    </div>
                                   
                                 </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="email"
                                        placeholder="Email Address" value ="">
                                </div>
                                <div class="form-group">
                                    <input type="address" class="form-control form-control-user" name="home_address" id="home_address"
                                        placeholder="Home Address" value ="">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="contact_no"
                                            id="contact-no" placeholder="Contact Number">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="age"
                                            id="age" placeholder="Age">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password"
                                                id="password" placeholder="Password">
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="confirmpassword"
                                                id="confrimpassword" placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                <select name ="user_type" class="form-control" id="user_type">
                             
                                <option value ="">User Type</option>
                                <option value ="Admin">Admin</option>
                                <option value ="Librarian">Librarian</option>
                                <option value ="Library Staff">Library Staff</option>
                        
                                

                                </select> <br />
                            </div> 
                                
                        

                              
                                <button type="submit" class="btn btn-primary">Register Account</button>
                                <a href="/customer" class =  "btn btn-danger float-right"  name ="add_user" >
                                <span>Cancel</span>
                                        </a>
    
                                    
                             
                            </form>
                            <hr> 
                            <div class="text-center">
                                <a class="small" href="/forgotpassword">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url();?>/library/public/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>/library/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url();?>/library/public/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url();?>/library/public/assets/js/sb-admin-2.min.js"></script>

</body>

</html>