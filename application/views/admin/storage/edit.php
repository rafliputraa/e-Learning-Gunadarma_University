<!-- TinyMCE -->
<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Edit File</h2>
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
echo form_open_multipart('storage/edit/'.$storage->id_storage);
?>
<div class="row">
<div class="col-md-8">
<div class="form-group form-group-lg">
<label>Title</label>
<input type="text" name="judul" placeholder="Judul" value="<?php echo $storage->judul ?>" required class="form-control">
</div>
</div>

<div class="col-md-4">
<div class="form-group form-group-lg">
<label>Type</label>
<select name="jenis_storage" class="form-control">
    <option value="internal">Internal</option>
    <option value="external" <?php if($storage->jenis_storage=="external") { echo "selected"; } ?>>External</option>
</select>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Category <sup> <a href="<?php echo base_url('index.php/kategori_storage') ?>" class="btn btn-primary btn-xs"> <i class="fa fa-plus"> </i> </a></label>
<select name="id_kategori_storage" class="form-control">
    <?php foreach($kategori as $kategori) { ?>
    <option value="<?php echo $kategori->id_kategori_storage ?>" 
    <?php if($storage->id_kategori_storage == $kategori->id_kategori_storage) { echo "selected"; } ?>
    >
    <?php echo $kategori->nama_kategori_storage ?></option>
    <?php } ?>
</select>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Status</label>
<select name="status_storage" class="form-control">
    <option value="Publish">Publikasikan</option>
    <option value="Draft" <?php if($storage->status_storage=="Draft") { echo "selected"; } ?>>Simpan sebagai Draft</option>
</select>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Upload File</label>
<input type="file" name="file" class="form-control">
</div>
</div>

<div class="col-md-12">

<div class="form-group">
<label>Information</label>
<textarea name="isi" class="form-control ckeditor" id="ckeditor" placeholder="Isi Post"><?php echo $storage->isi ?></textarea>
</div>

<div class="form-group">
<input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg">
<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
</div>

</div>
</div>
</div>


<?php echo form_close() ?>

 