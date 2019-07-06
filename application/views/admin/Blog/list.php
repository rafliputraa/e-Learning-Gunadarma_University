<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Blog</h2>
                    </div>
                </div>
                    <p>
                        <a href="<?php echo base_url('blog/insert') ?>" class="btn btn-primary">
                        <i class="fa fa-plus"></i> New Post</a>
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
                                List Posts
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Background Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status - Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($blog as $blog) { ?>
                    <tr class="odd gradeX">
                        <td><?php echo $i ?></td>
                        <td>
                        <img src="<?php echo base_url('upload/images/thumbs/'.$blog->gambar) ?>" class="img img-responsive" width="60">
                        </td>
                        <td><?php echo $blog->judul ?></td>
                        <td><?php echo $blog->nama_kategori_blog ?></td>
                        <td><?php echo $blog->status_blog ?> - <?php echo $blog->jenis_blog ?></td>
                        <td>
                        <a href="<?php echo base_url('index.php/blog/edit/'.$blog->id_blog) ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        
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
