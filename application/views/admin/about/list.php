
<div id="page-wrapper" >
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h2>Management About</h2>          
      </div>
    </div>
    
    <hr />

                    <p>
                        <a href="<?php echo base_url('about/insert') ?>" class="btn btn-primary">
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
                        <th>ID</th>
                        <th>Background Image</th>
                        <th>Isi</th>
                        <th>Posted By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; foreach($about as $about) { ?>
                    <tr class="odd gradeX">
                        <td><?php echo $i ?></td>
                        <td>
                        <img src="<?php echo base_url('upload/images/thumbs/'.$about->gambar) ?>" class="img img-responsive" width="60">
                        </td>
                        <td><?php echo $about->isi ?></td>
                        <td><?php echo $about->nama ?></td>
                        <td>
                        <a href="<?php echo base_url('about/edit/'.$about->id) ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        
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