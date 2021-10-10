<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Library Management System</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

    
    <link href="<?= base_url();?>/library/public/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>/library/public/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-book-reader"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Library Mgt Sys </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/books">
                
                    <i class="fas fa-book"></i>
                    <span>Manage Books</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/inventory/inventory">
                <i class="fas fa-boxes"></i>
                    <span>Book Inventory</span>
                </a>
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               Modules
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/staff">
                    <i class="fas fa-user"></i>
                    <span>Staff Module</span>
                </a>
               

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/customer">
                    <i class="fas fa-users"></i>
                    <span>Customer Module</span>
                </a>
                
            </li>

            <!-- Divider -->
            <br />
            <hr class="sidebar-divider">
             

            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </a>
                
            </li>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content    -->

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
                                <h1 class="h4 text-gray-900 mb-4">VIEW Costumer Information</h1>
                            </div>
                            <form class="" action ="/customers/update/<?=$user_data['user_id']?>" method="post">
                           

                            
                            
                            <div class="">
                            <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control form-control-user" name="name" id="email"
                                    value ="<?= $user_data['name']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address:</label>
                                    <input type="email" class="form-control form-control-user" name="email" id="email"
                                    value ="<?= $user_data['email']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="home_address">Home Address:</label>
                                    <input type="address" class="form-control form-control-user" name="home_address" id="home_address"
                                    value ="<?= $user_data['home_address']?>" disabled>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="contact-no">Contact Number:</label>
                                        <input type="text" class="form-control form-control-user" name="contact_no"
                                            id="contact-no" value ="<?= $user_data['contact_no']?>" disabled>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="age">Age:</label>
                                        <input type="text" class="form-control form-control-user" name="age"
                                            id="age"  value ="<?= $user_data['age']?>" disabled>
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                <div class="col-sm-6">
                                        <label for="course">Course:</label>
                                        <input type="text" class="form-control form-control-user" name="course"
                                                id="course" value ="<?= $user_data['course']?>" disabled>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                    <label for="school_year">School Year:</label>
                                        <input type="text" class="form-control form-control-user" name="school_year" 
                                                id="school-year"  value ="<?= $user_data['school_year']?>" disabled>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                    <label for="date_register">Date Registered:</label> 
                                    <input type="text" class="form-control form-control-user" name="school_year" 
                                                id="date_registered"  value ="<?= $user_data['date_registered']?>" disabled>

    
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="user_type">User Type:</label>
                                        <input type="text" class="form-control form-control-user" name="user_type"
                                                id="user_type" placeholder="User Type" value ="<?= $user_data['user_type']?>"  disabled>
                                    </div>
                                </div>
                                    
                                </div>    

                                <?php if (isset($validation)): ?>
                                    <div class="col-12"> 
                                    <div class="alert alert-danger" role="alert"> 
                                        <?= $validation->listErrors() ?>
                                    </div>
                                    </div>
                                <?php endif; ?> <br />

                                <a href="/customer" class =  "btn btn-secondary float-right"  name ="add_customer" >
                                <i class="fas fa-arrow-right"></i></i></i> <span>Back</span>
                                        </a>   <br />

                            </div>    

                            
                                
                                
    
                            </form>
                            
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
    <script src="<?= base_url();?>/library/public/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>/library/public/assetsvendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    
    <script src="<?= base_url();?>/library/public/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->

    <script src="<?= base_url();?>/library/public/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url();?>/library/public/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url();?>/library/public/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url();?>/library/public/assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url();?>/library/public/assets/js/demo/datatables-demo.js"></script>
    <script src="<?= base_url();?>/library/public/assets/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url();?>/library/public/assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>