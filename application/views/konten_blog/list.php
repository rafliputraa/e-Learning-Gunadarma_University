<style>
.kotak-atas {
  margin-top: 40px;
}
</style>
<section class="well well4">
        
        <div class="container center991">
          <h2>
            our
            <small>
              projects
            </small>
          </h2>
          <div class="clearfix"></div>
          <div class="row kotak-atas">
            <?php foreach($blog as $blog) {   ?>
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <div class="thumbnail thumb-shadow">
                <img src="<?php echo base_url ('upload/images/thumbs/'.$blog->gambar) ?>" alt="">
                <div class="caption bg3 capt_hover1">
                  <h3>
                    <a href="<?php echo base_url('konten_blog/read/'.$blog->slug_blog) ?>" class="btn-link fa-angle-right"><?php echo $blog->judul ?></a>
                  </h3>
                  <div class="wrap">
                    <p class="thumb_ins1">
                      <?php
                      //Membatasi Jumlah Karakter yang Tampil
                      echo character_limiter($blog->isi, 200); ?>
                    </p>
                    <a href="<?php echo base_url('konten_blog/read/'.$blog->slug_blog) ?>" class="btn-link fa-angle-right"></a>
                  </div>  
            
                    <hr>
                    
                </div>
              </div>
            </div>
            <?php  }  ?>
          </div>  
          

      </section>