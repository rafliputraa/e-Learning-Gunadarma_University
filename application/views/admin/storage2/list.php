<section class="well well4">
        
<div class="container center991">
    <h2>
        Shared
    <small>
        Files
    </small>
    </h2>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <table width="100%" border="0" cellpadding="0" class="table table-bordered table-hover">
                    <tr>
                        <th scope="col"> #</th>
                        <th scope="col"> File</th>
                        <th scope="col"> Document Title</th>
                        <th scope="col"> Category</th>
                        <th scope="col"> Type</th>
                    </tr>
                    <?php $i = 1; foreach($storage as $storage) { ?>
                    <tr>
                        <td>
                            <?php echo $i ?>.
                        </td>
                        <td>
                            <a href="<?php echo base_url('index.php/storage2/download/'.$storage->id_storage) ?>" target="_blank" class="btn btn-primary btn-sm" title="Download file: <?php echo $storage->file?>"><i class="fa fa-download"></i>download</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url('index.php/storage2/read/'.$storage->slug_storage) ?>"> <?php echo $storage->judul ?> <sup><i class="fa fa-link"></i></sup></a>
                        </td>
                        <td><?php echo $storage->nama_kategori_storage ?></td>
                        <td><?php echo $storage->jenis_storage ?></td>
                    </tr>
                    <?php $i++; } ?>
                </table>    
            </div>  
        </div>  
</div>

</section>