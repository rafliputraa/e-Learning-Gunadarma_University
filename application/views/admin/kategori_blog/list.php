<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Kategori Blog</h2>
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
                                Tabel Kategori
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Kategori</th>
                                                <th>Keterangan</th>
                                                <th>Urutan</th>
                                                <th>Slug</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($kategori_blog as $kategori_blog) { ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $kategori_blog->nama_kategori_blog ?></td>
                                                    <td><?php echo $kategori_blog->keterangan ?></td>
                                                    <td><?php echo $kategori_blog->urutan ?></td>
                                                    <td><?php echo $kategori_blog->slug_kategori_blog ?></td>
                                                    <td>
                                                    <a href="<?php echo base_url('index.php/kategori_blog/edit/'.$kategori_blog->id_kategori_blog) ?>"" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i></a>
                                                    
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