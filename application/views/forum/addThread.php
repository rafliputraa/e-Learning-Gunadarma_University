
<section class="well well4">
        <div class="container">
          <div class="row">
              <h2>
                Forum
              </h2>
        <div id="nav">
    <div id="body">
		<div id="content">
        
        	<?php if(!empty($flashdata)) {echo '<div class="flashdata">'.$flashdata.'</div>';} ?>
        
        <form class="addthread-baru" method="POST" action="<?php echo base_url() ?>index.php/forum/saveThread">
        <input type="hidden" name="idthread" id="idthread" value="<?php echo $id ?>">
                <p>Thread:</p>
                    <label class="judul"><?php if(!empty($namaforum)) {echo $namaforum;} ?></label><br>
                <p>Nama Thread:</p> 
                    <input type="text" name="tn" id="tn">
                <p>Isi Thread:</p> 
                    <textarea id="isi" name="isi" ></textarea> <br><br>
                    <input type="submit" value="Submit" class=" btn btn-addthread-baru">
              </form>  
        </div>
        
         
    	<div class="clear"></div>
    </div>
</div>
</div>
</div>
</section>
