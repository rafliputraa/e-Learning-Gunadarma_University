<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Table User</h2>   
                        <h5>List-list pengguna yang sudah terdaftar</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Table User 4IA11
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>NPM</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Hapus User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach($record as $list){?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $list['id'];?></td>
                                            <td><?php echo $list['nama'];?></td>
                                            <td><?php echo $list['npm'];?></td>
                                            <td><?php echo $list['username'];?></td>
                                            <td><?php echo $list['password'];?></td>
                                            <td><a href="<?php echo base_url(); ?>index.php/regist_user/do_hapus_user/<?php echo $list['id'] ?>" class="btn btn-primary btn-xs" type="button"><i class="fa fa-cut"></i> Delete</a></td>
                                        </tr>
                                        <?php $no++ ; }?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>