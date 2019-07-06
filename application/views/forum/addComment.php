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
       <?php if(!empty($flashdata)) {echo '<div class="flashdata">'.$flashdata.'</div>';} ?>
        <form method="POST" action="<?php echo base_url() ?>index.php/forum/saveComment">
        <input type="hidden" name="idthread" id="idthread" value="<?php echo $id ?>">
			 	<table class="tablereqComment">
               		 <tr>
                        	<td style="width:100px;">Thread</td>
                            <td style="width:10px;">:</td>
                            <td><label class="judul"><?php if(!empty($judul)) {echo $judul;} ?></label></td>
                        </tr>
             			<tr>
                        	<td style="width:100px;">Isi Komentar</td>
                            <td style="width:10px;">:</td>
                            <td> <textarea class="textareaku" id="isi" name="isi" ></textarea></td>
                        </tr>
                        <tr>
                        	<td></td>
                            <td></td>
                            <td>
                            <input type="submit" value="Submit" class="submitcomment">
                         
                            <a class="cancelcomment">Cancel</a></td>
                        </tr>
                </table>
              </form>  
        </div>
        
         
    	<div class="clear"></div>
    </div>
</div>
</div>
</section>
