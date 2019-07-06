<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Storage</h2>
                    </div>
                </div>
                    <p>
                        <a href="<?php echo base_url('index.php/storage/insert') ?>" class="btn btn-primary">
                        <i class="fa fa-plus"></i> New File</a>
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
                                List Files
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Download</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status - Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($storage as $storage) { ?>
                    <tr class="odd gradeX">
                        <td><?php echo $i ?></td>
                        <td>
                        <a href="<?php echo base_url('index.php/storage/download/'.$storage->id_storage) ?>" target="_blank" title="Unduh File <?php echo $storage->file ?>">
                        <i class="fa fa-download"></i> Unduh</a>
                        </td>
                        <td><?php echo $storage->judul ?></td>
                        <td><?php echo $storage->nama_kategori_storage ?></td>
                        <td><?php echo $storage->status_storage ?> - <?php echo $storage->jenis_storage ?></td>
                        <td>
                        <a href="<?php echo base_url('index.php/storage/edit/'.$storage->id_storage) ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        
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
