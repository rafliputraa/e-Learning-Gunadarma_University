<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Informatics Engineering Private Cloud</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/admin/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url();?>assets/admin/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/admin/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <!-- TABLE STYLES-->
    <link href="<?php echo base_url() ?>assets/admin/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/storageadmin/css/jquery.fileupload.css">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/storageadmin/css/jquery.fileupload-ui.css">
   <noscript><link rel="stylesheet" href="<?php echo base_url();?>assets/storageadmin/css/jquery.fileupload-noscript.css"></noscript>
   <noscript><link rel="stylesheet" href="<?php echo base_url();?>assets/storageadmin/css/jquery.fileupload-ui-noscript.css"></noscript>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                <?php echo $this->session->userdata('nama');
                ?>
                </a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="<?php echo base_url('index.php/logout')?>" class="btn btn-danger square-btn-adjust">Sign Out</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                <?php foreach($avatar as $ava) {   ?>
                <div>
                    <img src="<?php echo base_url('upload/images/profile_picture/'.$ava->avatar) ?>" class="user-image img-responsive"/>
                </div>
                <?php  }  ?>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="<?php echo base_url();?>index.php/admin/dashboard"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a   href="<?php echo base_url();?>profile"><i class="fa fa-dashboard fa-3x"></i> Profile</a>
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-newspaper-o fa-3x"></i>Projects</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>index.php/blog">Data Blog</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="#"><i class="fa fa-newspaper-o fa-3x"></i>Storage</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>index.php/storage">Data Storage</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a  href="#""><i class="fa fa-qrcode fa-3x"></i>Category</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>index.php/kategori_blog">Category Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/kategori_storage">Category File</a>  
                            </li>                      
                        </ul>
                    </li>
                     <?php if($this->session->userdata('role') == 1){
                        echo "<li ><a href='" ,  base_url() , "index.php/admin/regist_user'><i class='fa fa-bar-chart-o fa-3x'></i>Register</a>
                    </li>";
                    } 
                    ?>			
                    <?php if($this->session->userdata('role') == 1){
                        echo "<li ><a href='" ,  base_url() , "about'><i class='fa fa-bar-chart-o fa-3x'></i>About</a>
                    </li>";
                    }
                    ?>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url();?>index.php/admin/table_file">Management File</a>
                            </li>
                            <li>
                                <a href="#">Management User<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li >
                                    <a href='<?php echo base_url();?>Table_user'>4IA11</a>
                                    </li>
                                    <li >
                                    <a href='<?php echo base_url();?>Table_4IA12'>4IA12</a>
                                    </li>
                                    <li >
                                    <a href='<?php echo base_url();?>Table_4IA13'>4IA13</a>
                                    </li>
                                    
                                </ul>
                               
                            </li>
                        </ul>
                    </li>
                </ul>
               
            </div>
            
        </nav>  

    <?php echo $contents;?>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/admin/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/admin/js/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/morris/morris.js"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/admin/js/custom.js"></script>
   
</body>
</html>
