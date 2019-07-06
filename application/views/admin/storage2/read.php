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
                <p class="text-right"><a href="<?php echo base_url('index.php/storage2') ?>" class="btn btn-primary">
                <i class="fa fa-backward"></i>Back to Document List</a></p>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="table table-bordered table-hover"> 
                    <tr>
                        <td width="34%">Document Title</td>
                        <td width="66%">: <?php echo $storage->judul ?></td> 
                    </tr>
                    <tr>
                        <td>Document Category</td>
                        <td>: <?php echo $storage->nama_kategori_storage ?> </td> 
                    </tr>
                    <tr>
                        <td>Document Status</td>
                        <td>: <?php echo $storage->status_storage ?></td> 
                    </tr>
                    <tr>
                        <td>Document Type</td>
                        <td>: <?php echo $storage->jenis_storage ?></td> 
                    </tr>
                    <tr>
                        <td>File Name</td>
                        <td>: <a href="<?php echo base_url('index.php/storage2/download/'.$storage->id_storage) ?>" target="_blank" title="Download file: <?php echo $storage->file?>"><i class="fa fa-download"></i> <?php echo $storage->file ?></a></td> 
                    </tr>
                    <tr>
                        <td>Last Updated</td>
                        <td>: <?php echo date('d M Y',strtotime($storage->tanggal)) ?> </td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td colspan="2"> <?php echo $storage->isi ?></td>
                    </tr>
                </table>    
            </div>  
        </div>  
</div>

</section>