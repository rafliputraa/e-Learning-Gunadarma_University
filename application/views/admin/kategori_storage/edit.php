<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Kategori storage</h2>
                    </div>
<?php
// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');

// Form
echo form_open(base_url('index.php/kategori_storage/edit/'.$kategori_storage->id_kategori_storage));
?>

										<div class="col-md-8">
                                            <div class="form-group">
                                                <label>Nama kategori</label>
                                                    <input type="text" name="nama_kategori_storage" placeholder="Nama kategori storage" value="<?php echo $kategori_storage->nama_kategori_storage ?>" required class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Urutan tampil</label>
                                                <input type="number" name="urutan" placeholder="Urutan tampil" value="<?php echo $kategori_storage->urutan ?>" required class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea name="keterangan" class="form-control" placeholder="Keterangan"> <?php echo $kategori_storage->keterangan ?> </textarea>
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