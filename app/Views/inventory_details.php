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
                <a class="nav-link" href="/book">
                
                    <i class="fas fa-book"></i>
                    <span>Manage Books</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/inventory/inventory">
                <i class="fas fa-boxes"></i>
                    <span>Book Transaction</span>
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

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DETAILS OF BOOKS </h6>
                            <a href="/book" class =  "btn btn-primary float-right"  name ="add_book" >
                            <i class="fas fa-arrow-right"></i> <span>EXIT</span>
                                        </a>
                
                        </div>
                        <div class="card-body">
                                
                                       
                       
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                
                                    
                                        
                                    <thead>
                                    
                                        <tr>
                                            <th>Staff ID &nbsp; &nbsp; &nbsp; <i class="fas fa-sort"></i>  </th>
                                            <th>Book ID &nbsp; &nbsp; &nbsp; <i class="fas fa-sort"></i>  </th>
                                            <th>Book Title &nbsp; &nbsp; &nbsp; <i class="fas fa-sort"></i>  </th>
                                            <th>Category  &nbsp; &nbsp; &nbsp;  <i class="fas fa-sort"></i></th>
                                            <th>Author &nbsp; &nbsp; &nbsp;  <i class="fas fa-sort"></i></th>
                                            <th>Qty &nbsp; &nbsp; &nbsp;  <i class="fas fa-sort"></i></th>
                                            <th>Status &nbsp; &nbsp; &nbsp;  <i class="fas fa-sort"></i></th>
                                            
                                            
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Staff ID</th>
                                            <th>Book ID</th>
                                            <th>Book Title</th>
                                            <th>Category</th>
                                            <th>Author</th>
                                            <th>QTY</th>
                                            <th>STATUS</th>
                                            
                                         
                                            <th>Actions</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php  if($books): ?>
                                        <?php foreach($books as $book ): ?> 
                                         
                                        <tr>
                                        <td><?php echo $book->staff_id; ?></td>  
                                        <td><?php echo $book->book_id; ?></td>
                                        <td><?php echo $book->book_title; ?></td>
                                        <td><?php echo $book->category; ?></td>
                                        <td><?php echo $book->author; ?></td>
                                        <td><?php echo $book->quantity; ?></td>
                                        <td><?php echo $book->status; ?></td>  
                                        
                                       

                                           
                                            
                                            
                                            
                                        <td>  
                                              
                                        <a href="/transactions/transaction/"
                                         class =  "btn btn-info btn-sm"  name ="view" >
                                         <i class="fas fa-arrow-up"></i>
                                    
                                        </a>

                                        <a href="/books/edit/"
                                         class =  "btn btn-secondary btn-sm"  name ="edit" >
                                         <i class="fas fa-arrow-down"></i>
                                         
                                         </a> 

                                        <!-- <a href="/books/delete/<?//=$books['book_id']?>"   onclick="return confirm('Are you sure you want to delete?');"  
                                        class = "btn btn-danger" name ="delete">
                                        <i class="fas fa-trash-alt"></i>
                                        </a> -->

                                        <!-- <a href="/inventory/bookInfo/<?//=$books['book_id']?>"
                                         class =  "btn btn-secondary"  name ="inventory" >
                                         <i class="fas fa-boxes"></i>
                                         
                                        
                                        </a>  -->

                                     




           
                                        
                                </td>
                                        </tr>
                                    
                                    
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                        


                                
                                     

                                      
                                
                                      
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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