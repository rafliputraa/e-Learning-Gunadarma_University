<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon">
    <title>HOME</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/tombol.css" rel="stylesheet">

    <!-- Links -->

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/camera.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/search.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/kontenblog.css">
   
    <!-- JS NEW -->
    <script src="<?php echo base_url()?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url()?>js/jquery-ui-1.10.3.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">   
    $( document ).ready ( function () {
      
      $('#nickname').keyup(function() {
        var nickname = $(this).val();
        
        if(nickname == ''){
          $('#msg_block').hide();
        }else{
          $('#msg_block').show();
        }
      });
      
      // initial nickname check
      $('#nickname').trigger('keyup');
    });
    
    
  </script>

    <!--JS-->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="<?php echo base_url();?>assets/images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
    <![endif]-->
    <script src='<?php echo base_url();?>assets/js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header>  
      <div class="container top-sect">
        <div class="navbar-header">
          <h1 class="navbar-brand">
            <a data-type='rd-navbar-brand'  href="<?php echo base_url();?>">4IA11<small>Private Cloud</small></a>
          </h1>
          <a class="search-form_toggle" href="#"></a>
        </div>
      </div>
      <div class="border1">
        <div class="border2 foto">     
        <img src='<?php echo base_url();?>assets/images/admin2.png'>
        </div>
        <div class = "border3">
          <p>Hello, <?php echo $this->session->userdata('nama');
                ?></p>
        </div>  
        <div class="border4 tomboldashboard">
          <a href="<?php echo base_url();?>index.php/admin/dashboard">DASHBOARD</a>
        </div>
        <div class="border5 tombolout">
          <a href="<?php echo base_url('index.php/logout')?>">Sign Out</a>
        </div>
      </div>

      <div id="stuck_container" class="stuck_container">
        <div class="container">   
        <nav class="navbar navbar-default navbar-static-top pull-left">            

            <div class="">  
              <ul class="nav navbar-nav sf-menu" data-type="navbar">
                <li class="active">
                  <a href="<?php echo base_url();?>">HOME</a>
                </li>
                <li>
                  <a href="<?php echo base_url();?>index.php/admin/about">ABOUT</a>
                </li>
                <li class="dropdown">
                  <a href="<?php echo base_url();?>index.php/admin/service">SERVICES<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="<?php echo base_url();?>index.php/dokumen2">Shared Files</a>
                    </li>
                    <li>
                      <a href="#">Mail Server</a>                      
                    </li>
                    <li>
                      <a href="<?php echo base_url();?>index.php/admin/chatroom">Chat Room</a>                      
                    </li>
                    <li>
                      <a href="<?php echo base_url();?>index.php/forum">Forum</a>                      
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="<?php echo base_url();?>index.php/admin/project">PROJECTS<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="#">Web Development</a>
                        <ul class="dropdown-menu">
                            <li>
                              <a href="#">HTML</a>
                            </li>
                            <li>
                              <a href="#">CSS</a>
                            </li>     
                            <li>
                              <a href="#">Javascript</a>
                            </li>             
                          </ul>
                    </li>
                    <li>
                      <a href="#">Programming Language</a>
                        <ul class="dropdown-menu">
                          <li>
                            <a href="#">Python</a>
                          </li>
                          <li>
                            <a href="#">Java</a>
                          </li>                  
                        </ul>
                    </li>
                  </ul>
                </li>                  
                <li>
                  <a href="<?php echo base_url();?>index.php/admin/contact">CONTACTS</a>
                </li>
              </ul>                           
            </div>
        </nav>   
        <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
          <label class="search-form_label">
            <input class="search-form_input" type="text" name="s" autocomplete="off" placeholder=""/>
            <span class="search-form_liveout"></span>
          </label>
          <button class="search-form_submit fa-search" type="submit"></button>
        </form>
             
        </div>

      </div>  
    </header>

  <!--========================================================
                            SIDEBAR
  =========================================================-->
  
  <!--========================================================
                            CONTENT
  =========================================================-->
<?php echo $contents; ?>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer class="top-border">

    <section class="well1">
      <div class="container"> 
            <p class="rights">
              Business Company  &#169; <span id="copyright-year"></span>
              <a href="index-5.html">Privacy Policy</a>
              More <a rel="nofollow" href="http://www.templatemonster.com/category/business-web-templates/" target="_blank">Business Website Templates at TemplateMonster.com</a>
            </p>          
      </div> 
    </section>    
  </footer>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/tm-scripts.js"></script>    
  <!-- </script> -->


  </body>
</html>
