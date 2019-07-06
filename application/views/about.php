  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well4">
        <div class="container">
          <div class="row">
              <h2>
                about
                <small>
                  us
                </small>
              </h2>
              <?php foreach ($about->result() as $key): ?>
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <img class="" src="<?php echo base_url ('upload/images/thumbs/'.$key->gambar) ?>" alt="">
              <p>
                
                <?php echo $key->isi;?>
                <?php endforeach ?> 
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="well well4 bg1 wow fadeIn" data-wow-duration='3s'>
        <div class="container">
        <h2>
          meet our
          <small>
            team
          </small>
        </h2>
          <div class="row offs3 center767">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="thumbnail1">
                <img class="" src="<?php echo base_url();?>assets/images/page-2_img2.jpg" alt="">
                <div class="caption">
                  <h4>
                    <a href="#">
                      Inga North
                    </a>
                  </h4>
                  <p>
                    Quisque in metus nibh. In hac habit asse platea dictumst. Curabitur eu lor em ac lacus laoreet auctor. 
                  </p>
                </div>  
             </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="thumbnail1">
                <img class="" src="<?php echo base_url();?>assets/images/page-2_img3.jpg" alt="">
                <div class="caption">
                  <h4>
                    <a href="#">
                      Tom Nelson
                    </a>
                  </h4>
                  <p>
                    Curabitur eu lor em ac lacus laoreet auctor. Fusce vitae orci nec velit orna re rhoncus ut tempus est
                  </p>
                </div>  
             </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="thumbnail1">
                <img class="" src="<?php echo base_url();?>assets/images/page-2_img4.jpg" alt="">
                <div class="caption">
                  <h4>
                    <a href="#">
                      Ivana Wong
                    </a>
                  </h4>
                  <p>
                    Eu lor em ac lacus laoreet auctor. 
                    Fusce vitae orci nec velit ornare rho
                    ncus ut tempus est. Mauris 
                  </p>
                </div>  
             </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="thumbnail1">
                <img src="<?php echo base_url();?>assets/images/page-2_img5.jpg" alt="">
                <div class="caption">
                  <h4>
                    <a href="#">
                      Richard Cox
                    </a>
                  </h4>
                  <p>
                    Fusce vitae orci nec velit ornare rho
                    ncus ut tempus est. Mauris eu augue lorem. Suspendisse sit ame
                  </p>
                </div>  
             </div>
            </div>
          </div>
        </div>
      </section>    

    </main>
