<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#isi",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Insert Blog</h2>
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
echo form_open_multipart('blog/insert');
?>
<div class="row">
<div class="col-md-8">
<div class="form-group form-group-lg">
<label>Judul</label>
<input type="text" name="judul" placeholder="Judul" value="<?php echo set_value('judul') ?>" required class="form-control">
</div>
</div>

<div class="col-md-4">
<div class="form-group form-group-lg">
<label>Jenis Post</label>
<select name="jenis_blog" class="form-control">
    <option value="blog">blog</option>
    <option value="Profil">Profil</option>
</select>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Kategori Blog <sup> <a href="<?php echo base_url('index.php/kategori_blog') ?>" class="btn btn-primary btn-xs"> <i class="fa fa-plus"> </i> </a> </label>
<select name="id_kategori_blog" class="form-control">
    <?php foreach($kategori as $kategori) { ?>
    <option value="<?php echo $kategori->id_kategori_blog ?>">
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
    <option value="Draft">Simpan sebagai Draft</option>
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
<label>Isi Post</label>
<textarea name="isi" class="form-control" id="isi" placeholder="Isi Post"> <?php echo set_value('isi') ?> </textarea>
</div>

<div class="form-group">
<input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg">
<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
</div>

</div>
</div>
</div>
</div>
</div>


<?php echo form_close() ?>

 