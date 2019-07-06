<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Delete<?php echo $storage->id_storage ?>">
  <i class="fa fa-trash-o"></i>
</button>
<div class="modal fade" id="Delete<?php echo $storage->id_storage ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete File</h4>
            </div>
            <div class="modal-body">

            <p class="alert alert-success">Are You Sure?</p>

            </div>
            <div class="modal-footer">
                
                <a href="<?php echo base_url('index.php/storage/delete/'.$storage->id_storage) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Yes, Delete</a>
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
