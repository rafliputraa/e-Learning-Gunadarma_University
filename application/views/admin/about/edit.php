<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Edit Blog</h2>
                    </div>
                </div>
<?php
// Error
if(isset($error)) {
    echo '<div class="alert alert-warning">';
    echo $error;
    echo '</div>';
}

// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');

// Form
echo form_open_multipart('about/edit/'.$about->id);
?>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label>Upload Gambar</label>
<input type="file" name="gambar" class="form-control">
</div>
</div>

<div class="col-md-12">

<div class="form-group">
<label>Isi About:</label>
<textarea name="isi" class="form-control" placeholder="Isi Post"><?php echo $about->isi ?></textarea>
</div>

<div class="form-group">
<input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg">
<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
</div>

</div>
</div>
</div>
</div>


<?php echo form_close() ?>

 