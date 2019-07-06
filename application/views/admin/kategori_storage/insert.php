<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                              <i class="fa fa-plus"></i> New Category
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">New Category File</h4>
                                        </div>
                                        <div class="modal-body">
                                        <?php
                                        // Validasi
                                        echo validation_errors('<div class="alert alert-success">','</div>');

                                        // Form
                                        echo form_open('kategori_storage');
                                        ?>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                    <input type="text" name="nama_kategori_storage" placeholder="Nama kategori storage" value="<?php echo set_value('nama_kategori_storage') ?>" required class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Order Number</label>
                                                <input type="number" name="urutan" placeholder="Urutan tampil" value="<?php echo set_value('urutan') ?>" required class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Information</label>
                                                <textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo set_value('keterangan') ?></textarea>
                                            </div>
                                        
                                            <div class="form-group">
                                                <input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg">
                                                <input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
                                            </div>
                                        </div>

                                        <?php echo form_close() ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>