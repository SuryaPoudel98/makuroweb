<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Panel</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/loader.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset('assets/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

  <div id="app">

       <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

             <a class="navbar-brand mr-1" href="index.html">Makuro Web</a>

             <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
               <i class="fas fa-bars"></i>
             </button>

             <!-- Navbar Search -->
             <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
               <div class="input-group">
                 <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                 <div class="input-group-append">
                   <button class="btn btn-primary" type="button">
                     <i class="fas fa-search"></i>
                   </button>
                 </div>
               </div>
             </form> -->

             <!-- Navbar -->
             <!-- <ul class="navbar-nav ml-auto ml-md-0">
               <li class="nav-item dropdown no-arrow mx-1">
                 <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fas fa-bell fa-fw"></i>
                   <span class="badge badge-danger">9+</span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">Something else here</a>
                 </div>
               </li>
               <li class="nav-item dropdown no-arrow mx-1">
                 <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fas fa-envelope fa-fw"></i>
                   <span class="badge badge-danger">7</span>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                   <a class="dropdown-item" href="#">Action</a>
                   <a class="dropdown-item" href="#">Another action</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">Something else here</a>
                 </div>
               </li>
               <li class="nav-item dropdown no-arrow">
                 <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fas fa-user-circle fa-fw"></i>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                   <a class="dropdown-item" href="#">Settings</a>
                   <a class="dropdown-item" href="#">Activity Log</a>
                   <div class="dropdown-divider"></div>

                   
                
                 </div>
               </li>
             </ul> -->

           </nav>

           <div id="wrapper">

             <!-- Sidebar -->
             <ul class="sidebar navbar-nav">
               <li class="nav-item">
                 <router-link class="nav-link" to="/dashboard">
                   <i class="fas fa-fw fa-tachometer-alt"></i>
                   <span>Dashboard</span>
                 </router-link>
               </li>


               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fas fa-pencil-alt"></i>
                   <span>Posts</span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                   <h6 class="dropdown-header">Posts Screens:</h6>
                   <router-link class="dropdown-item" to="/posts">All Posts</router-link>
                   <router-link class="dropdown-item" to="/post">Add New</router-link>
                   <div class="dropdown-divider"></div>
                   <h6 class="dropdown-header">Categories Screens:</h6>
                   <router-link class="dropdown-item" to="/categories">All Categories</router-link>
                   <router-link class="dropdown-item" to="/addcategory">Add New</router-link>
                 </div>
               </li>

               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-folder-plus"></i>
                   <span>Pages</span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                   <router-link class="dropdown-item" to="/allpages">All Pages</router-link>
                   <router-link class="dropdown-item" to="/addnewpage">Add New</router-link>

                 </div>
               </li>
               <li class="nav-item">
                 <router-link class="nav-link" to="/popup">
                 <i class="fas fa-exclamation-circle"></i>
                   <span>Notice</span></router-link>
               </li>
<!-- 
               <li class="nav-item">
                 <router-link class="nav-link" to="/banner">
                 <i class="fa fa-sticky-note"></i>
                   <span>Banner</span></router-link>
               </li> -->

               <li class="nav-item">
                 <router-link class="nav-link" to="/sliders">
                 <i class="fas fa-sliders-h"></i>
                   <span>Slider</span></router-link>
               </li>

               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-images"></i>
                   <span>Gallery</span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                   <router-link class="dropdown-item" to="/gallery">All Photos</router-link>
                   <router-link class="dropdown-item" to="/addgallery">Add New</router-link>

                 </div>
               </li>



               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fas fa-cogs"></i>
                   <span>Settings</span>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                   <h6 class="dropdown-header">General:</h6>
                   <router-link class="dropdown-item" to="/header">Header</router-link>
                   <router-link class="dropdown-item" to="/topfooter">Top Footer</router-link>
                   <router-link class="dropdown-item" to="/footer">Bottom Footer</router-link>
                   <div class="dropdown-divider"></div>
                   <h6 class="dropdown-header">Extra:</h6>
                    
                    <router-link class="dropdown-item" to="/elements">Elements</router-link>
             
                  </div>
               </li>




               <li class="nav-item">
                 <router-link class="nav-link" to="/users">
                   <i class="fas fa-users"></i>
                   <span>Users</span></router-link>
               </li>



                              <li class="nav-item">
                                <router-link class="nav-link" to="/layout">
                            <i class="fas fa-tasks"></i>
                                  <span>Layout Management</span></router-link>
                              </li>
                              <li class="nav-item">
                           
                              <a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal">   <i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
                              </li>
</ul>

             <div id="content-wrapper">

               <div class="container-fluid">

                 <!-- Breadcrumbs-->
                 <!-- <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                     <router-link to="/dashboard">Dashboard</a>
                   </li>
                   <li class="breadcrumb-item active">Blank Page</li>
                 </ol> -->

 <!--Route start -->
 <transition name="fade">
 <router-view></router-view>
 </transition>

  <!-- Route End -->



                 </div>
                   <!-- /.container-fluid -->

                   <!-- Sticky Footer -->
                   <footer class="sticky-footer">
                     <div class="container my-auto">
                       <div class="copyright text-center my-auto">
                         <span>Copyright Â© Your Website 2018</span>
                       </div>
                     </div>
                   </footer>

                 </div>
                 <!-- /.content-wrapper -->

                 </div>
                 <!-- /#wrapper -->

                 <!-- Scroll to Top Button-->
                 <a class="scroll-to-top rounded" href="#page-top">
                 <i class="fas fa-angle-up"></i>
                 </a>

                 <!-- Logout Modal-->
                 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                       <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                     <div class="modal-footer">
                       <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                       <a class="btn btn-primary" href="/logout">Logout</a>
                     </div>
                   </div>
                 </div>
                 </div>


  </div>



<script src="{{ asset('js/app.js') }}"></script>
<!-- Bootstrap core JavaScript-->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{asset('assets/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('assets/js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <!-- <script src="{{asset('assets/js/dedatatables-demo.js')}}"></script> -->


 </body>

</html>