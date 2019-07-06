  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well1 well1_ins1">
        <div class="camera_container">
          <div id="camera" class="camera_wrap">
            <div data-src="<?php echo base_url();?>assets/images/page-1_slide1.jpg">
              <div class="camera_caption fadeIn">
                <div class="jumbotron jumbotron1">
                  <em>
                    SUCCESS
                  </em>
                  <div class="wrap">
                    <p>
                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do<span> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span>.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>
            </div>
            <div data-src="<?php echo base_url();?>assets/images/page-1_slide2.jpg">
              <div class="camera_caption fadeIn">
                <div class="jumbotron jumbotron2">
                  <em>
                    quality
                  </em>
                  <div class="wrap">
                    <p>
                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do<span> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span>.
                    </p>
                    <a href="#" class="btn-link hov_prime fa-angle-right"></a>
                  </div>  
                </div>
              </div>
            </div>
            <div data-src="<?php echo base_url();?>assets/images/page-1_slide3.jpg">
              <div class="camera_caption fadeIn">
                <div class="jumbotron">
                  <em>
                    SOLUTIONS
                  </em>
                  <div class="wrap">
                    <p>
                      Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do<span> eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim</span>.
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row">
          <?php foreach ($latest_blog as $latest_blog) { ?>
            <div class="col-lg-4">
                    <p class="img-home-baru"><img src="<?php echo base_url('upload/images/'.$latest_blog->gambar) ?>" class="img img-responsive"></p>
                    <h3><a href="<?php echo base_url('index.php/konten_blog/read/'.$latest_blog->slug_blog) ?>"> <?php echo $latest_blog->judul ?></a></h3>
                    <div class="postby-tanggal-baru">
                    <p>Posted by: <a><?php echo $latest_blog->nama ?></a> | Category: <a><?php echo $latest_blog->nama_kategori_blog ?></a> | Tanggal: <a><?php echo $latest_blog->tanggal ?></a></p>
                    </div>
                    <p>
                      <?php
                      //MEMBATASI KARAKTER YANG TAMPIL SEBANYAK 200
                      echo character_limiter($latest_blog->isi, 200);
                      ?>
                    </p>
                      <p><a href="<?php echo base_url('index.php/konten_blog/read/'.$latest_blog->slug_blog) ?>" class="btn-baru btn-primary">Read more...</a>  
                    </p>
            </div>  
                  <?php } ?>  
                  

            <div class="col-lg-8 col-lg-offset-2 text-center">
            <br>
                    <a href="<?php echo base_url('index.php/project_blog') ?>" class="btn-baru btn-primary">
                      <i class="fa fa-newspaper-o"></i> See more articles...
                    </a>
            </div>
          </div>
        </div>        
      </section>
      
      <section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
        <div class="container">
        <h2 class="txt-pr">
        wELCOME
          <small>
            TO OUR COMPANY!
          </small>
        </h2>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <p>
                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
            <div class="col-md-6 col-sm-12">
              <p>
                Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                <a href="#" class="btn-link l-h1 fa-angle-right"></a>
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="well well2">
        <div class="container">
        <h2>
          our
          <small>
            SERVICES
          </small>
        </h2>
          <div class="row offs1">
            <div class="col-md-6 col-sm-12">
              <ul class="link-list wow fadeInLeft" data-wow-duration='3s'>
                <li>

                  <a href="#">Excepteur sint occaecat cupidatat non</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#">Lorem ipsum dolor sit amet</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#">Conse ctetur adipisicing elit sed do</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
                <li>

                  <a href="#">Eiusmod tempor incididunt</a>

                  <a href="#" class="btn-link l-h1 fa-angle-right"></a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12">
              <img class="width_img" src="<?php echo base_url();?>assets/images/page-1_img6.jpg" alt="">
            </div>
          </div>
        </div>
      </section>

      <section class="well well3 parallax" data-url="<?php echo base_url();?>assets/images/parallax1.jpg" data-mobile="
      true" data-speed="0.9">
        <div class="container">
          <div class="wrap text-center">
            <strong>
              SAVE TIME,<br />
              SAVE MONEY,
              <small>
                GROW & SUCCEED
              </small>
            </strong>
            <p>
              Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
            </p>
            <a href="#" class="btn btn-primary">read more <span class="fa-angle-right"></span></a>
          </div>  
        </div>        
      </section>

      <section class="well well2">
        <div class="container">
          <h2>
            our 
            <small>
              clients
            </small>
          </h2>

          <div class="row offs1">
            <ul class="flex-list">
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>assets/images/page-1_img7.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>assets/images/page-1_img8.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>assets/images/page-1_img9.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>assets/images/page-1_img10.jpg" alt="">
                </a>  
              </li>
            </ul>

            <ul class="flex-list">
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>assets/images/page-1_img11.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>assets/images/page-1_img12.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>assets/images/page-1_img13.jpg" alt="">
                </a>  
              </li>
              <li class="col-lg-3 col-sm-3 col-xs-6">
                <a href="#">
                  <img src="<?php echo base_url();?>assets/images/page-1_img14.jpg" alt="">
                </a>  
              </li>
            </ul>
          </div>  
          
        </div>
      </section>

    </main>