<section class="well well4">
    <div class="container">
        <h2>
            Forum
        </h2>
    <div id="nav">
    </div>
    <div id="body">
    <div class="btn-baru text-primary">
                    <a class="btn-baru btn-primary" href="<?php echo base_url(); ?>index.php/forum/createThread/<?php echo $id; ?>" data-type="submit">Buat Thread Baru</a>
                </div>
            <br>

		<div id="content" class="list-fthread-header">
            <?php
				if(!empty($forumDisplayFill)){
					foreach($forumDisplayFill as $data){ ?>
                    <ul>
					 	             <li> 
                           <label class="judul"><h3><a href="<?php echo base_url() ?>index.php/forum/detailThread/<?php echo $data->idforum?>"><?php echo $data->judul?></a></h3></label><br>
                           <label class="isi"><p><?php echo $data->isi?></p></label><br><hr> 
                           <label class="user"> Oleh <?php echo $data->nama ?></label> |   <label class="tanggal">  Di Post Tanggal <?php echo $data->tanggal?> </label> 
                          </li>
                    
					<?php
                    }
				} else { ?>
						            <div class="list-thread-tidak-ada">
                        	<li><center><p> Thread Belum Tersedia</p> </center></li>
                        </div>
				<?php }		
			?>
                    </ul>
      </div>
      <br><br>
      </div>
        
         
    	<div class="clear"></div>
    </div>

</body>
</html>
