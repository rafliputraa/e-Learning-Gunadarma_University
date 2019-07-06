<!-- TinyMCE -->
<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js"></script>

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
echo form_open_multipart('blog/edit/'.$blog->id_blog);
?>
<div class="row">
<div class="col-md-8">
<div class="form-group form-group-lg">
<label>Judul</label>
<input type="text" name="judul" placeholder="Judul" value="<?php echo $blog->judul ?>" required class="form-control">
</div>
</div>

<div class="col-md-4">
<div class="form-group form-group-lg">
<label>Jenis Post</label>
<select name="jenis_blog" class="form-control">
    <option value="Blog">Blog</option>
    <option value="Profil" <?php if($blog->jenis_blog=="Profil") { echo "selected"; } ?>>Profil</option>
</select>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Kategori Blog <sup> <a href="<?php echo base_url('index.php/kategori_blog') ?>" class="btn btn-primary btn-xs"> <i class="fa fa-plus"> </i> </a></label>
<select name="id_kategori_blog" class="form-control">
    <?php foreach($kategori as $kategori) { ?>
    <option value="<?php echo $kategori->id_kategori_blog ?>" 
    <?php if($blog->id_kategori_blog == $kategori->id_kategori_blog) { echo "selected"; } ?>
    >
    <?php echo $kategori->nama_kategori_blog ?></option>
    <?php } ?>
</select>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Status Blog</label>
<select name="status_blog" class="form-control">
    <option value="Publish">Publikasikan</option>
    <option value="Draft" <?php if($blog->status_blog=="Draft") { echo "selected"; } ?>>Simpan sebagai Draft</option>
</select>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Upload Gambar</label>
<input type="file" name="gambar" class="form-control">
</div>
</div>

<div class="col-md-12">

<div class="form-group">
<label>isi Post</label>
<textarea name="isi" class="form-control ckeditor" id="ckeditor" placeholder="Isi Post"><?php echo $blog->isi ?></textarea>
</div>

<div class="form-group">
<input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg">
<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
</div>

</div>
</div>
</div>


<?php echo form_close() ?>

 