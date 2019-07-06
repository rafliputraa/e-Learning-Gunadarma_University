<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Category File</h2>
                    </div>
                </div>
                    <p style="position: relative; top:30px; left:30px;">
                        <?php 
                        //Tambah kategori pop up
                        include('insert.php'); 
                        ?>
                    </p>

                    <?php
                    // Notifikasi
                    if($this->session->flashdata('sukses')) {
                    	echo '<div class="alert alert-success">';
                    	echo $this->session->flashdata('sukses');
                    	echo '</div>';
                    }
                    // Error
                    echo validation_errors('<div class="alert alert-success">','</div>');
                    ?>

                <div class="row">
                    <div class="col-md-12">
                    <!-- Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                List Category
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Information</th>
                                                <th>Order</th>
                                                <th>Slug</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($kategori_storage as $kategori_storage) { ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $kategori_storage->nama_kategori_storage ?></td>
                                                    <td><?php echo $kategori_storage->keterangan ?></td>
                                                    <td><?php echo $kategori_storage->urutan ?></td>
                                                    <td><?php echo $kategori_storage->slug_kategori_storage ?></td>
                                                    <td>
                                                    <a href="<?php echo base_url('index.php/kategori_storage/edit/'.$kategori_storage->id_kategori_storage) ?>"" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i></a>
                                                    
                                                    <?php include('delete.php') ?>
                                                    
                                                    </td>
                                                </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>