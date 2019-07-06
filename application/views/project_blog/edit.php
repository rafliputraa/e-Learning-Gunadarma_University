<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Kategori Blog</h2>
                    </div>
<?php
// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');

// Form
echo form_open(base_url('index.php/kategori_blog/edit/'.$kategori_blog->id_kategori_blog));
?>

										<div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nama kategori</label>
                                                    <input type="text" name="nama_kategori_blog" placeholder="Nama kategori blog" value="<?php echo $kategori_blog->nama_kategori_blog ?>" required class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Urutan tampil</label>
                                                <input type="number" name="urutan" placeholder="Urutan tampil" value="<?php echo $kategori_blog->urutan ?>" required class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea name="keterangan" class="form-control" placeholder="Keterangan"> <?php echo $kategori_blog->keterangan ?> </textarea>
                                            </div>
                                        
                                            <div class="form-group">
                                                <input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg">
                                                <input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
                                            </div>
                                        </div>


<?php echo form_close() ?>
</div>
</div>
</div>