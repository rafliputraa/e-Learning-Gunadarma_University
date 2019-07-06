  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well4">
        
        <div class="container center991">
        <div class="konten">
          <h2>
            <small>
              <?php echo $blog->judul ?>
            </small>
          </h2>
          <div class="row">
            <div class="col-lg-12">
                  <div class="wrap">
                    <p class="thumb_ins1">
                      <?php
                      //Detail Berita
                      echo $blog->isi; ?>
                    </p>
                   
                  </div>      
            </div>
          </div>
        </div>
        </div>
      </section>
    </main>

    <!--========================================================
                            FOOTER
