<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Table File</h2>   
                        <h5>List-list file yang sudah terupload</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Table File
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>User_id</th>
                                            <th>Nama File</th>
                                            <th>Keterangan</th>
                                            <th>File Upload</th>
                                            <th>Tanggal Upload</th>
                                            <th>Hapus File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php $no=1; foreach($record->result_array() as $list){?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $list['user_id'];?></td>
                                            <td><?php echo $list['nama_file'];?></td>
                                            <td><?php echo $list['keterangan_file'];?></td>
                                            <td><?php echo $list['file'];?></td>
                                            <td><?php echo $list['tanggal_upload'];?></td>
                                            <td><a href="<?php echo base_url(); ?>index.php/upload/do_hapus_file/<?php echo $list['id'] ?>" class="btn btn-primary btn-xs" type="button"><i class="fa fa-cut"></i> Delete</a></td>
                                        </tr>
                                          <?php $no++ ; }?>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
        