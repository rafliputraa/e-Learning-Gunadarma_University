  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well4">
        
        <div class="container center991">
          <h2>
            our
            <small>
              projects
            </small>
          </h2>
          <?php foreach ($project->result() as $key) { ?>
          <div class="row">

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <div class="thumbnail thumb-shadow">
                <img src="<?php echo base_url();?>assets/images/page-4_img2.jpg" alt="">
                <div class="caption bg3 capt_hover1">
                  <h3>
                    <?php echo $key->judul;?>
                  </h3>
                  <div class="wrap">
                    <p class="thumb_ins1">
                      <?php echo $key->isi;?>
                    </p>
                    <a href="#" class="btn-link fa-angle-right"></a>
                  </div>  
                    <hr>
                    <p class="post-meta">Posted by <a href="#"><?php echo $key->penulis;?></a> on <?php echo $key->tanggal;?></p>
                </div>
              </div>
            </div>

          </div>  
          <?php }?> 

      </section>
      
      <section class="well well2 bg1">
        <div class="container">
        <h2>
        special
          <small>
            offer
          </small>
        </h2>
          <div class="row offs1">
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

    </main>

    <!--========================================================
                            FOOTER