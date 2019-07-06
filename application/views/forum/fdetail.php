<section class="well well4">
        <div class="container">
          <div class="row">
              <h2>
                Forum
              </h2>
        <div id="nav">
    </div>
    <div id="body">
		<div id="content">
			<table class="tableforumFill">
            <?php
				if(!empty($forumDisplayFill)){
					foreach($forumDisplayFill as $data){ ?>
                    <tr>
					 	<td> 
                           <label class="judul"><a href="<?php echo base_url() ?>home\detailThread\<?php echo $data->id?>"><?php echo $data->judul?></a></label><br>
                           <label class="user"> Oleh <?php echo $data->nama ?></label> |   <label class="tanggal">  Di Post Tanggal <?php echo $data->tanggal?> </label>  <br> <br> 
                           <label class="isi"><?php echo $data->isi?></label>
                        </td>
                        </tr>
					<?php
                    }
				} else { ?>
						<tr>
                        	<td colspan="2"><center> No Spesific Thread</center></td>
                        </tr>
				<?php }		
			?>
            </table>
            <div id="nav" style="width:99.8%">
             <ul><li><a href="#">Comments</a></li></ul>
            </div>
            <br>
            <table class="tableforumFill">
            <?php
				if(!empty($forumDisplayFillComment)){
					foreach($forumDisplayFillComment as $data2){ ?>
                    <tr>
                    	<td style="width:100px;border-right:1px solid #CCC"><img  style="height:150px;width:100px" src="<?php echo base_url() ?>images/avatar.png"></td>
					 	<td><label class="judul"> <?php echo $data2->nama ?></label> |   <label class="tanggal">  Di Post Tanggal <?php echo $data2->tanggal?> </label>  <br> <br> 
                           <label class="isi"><?php echo $data2->isi?></label>
                        </td>
                        </tr>
					<?php
                    }
				} else { ?>
						<tr>
                        	<td colspan="2"><center> Tidak Ada Komentar</center></td>
                        </tr>
				<?php }		
			?>
            </table>
            <a class="buttontread"  href="<?php echo base_url(); ?>index.php/forum/reqComment/<?php echo $id; ?>"> Buat Komentar </a>
            <br>
        </div>
        
         
    	<div class="clear"></div>
    </div>
</div>
</div>
</section>
