<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
            <div class="col-md-12">
                <h2>Register</h2>
                <h5>Form untuk pendaftaran pengguna baru</h5> 
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Isikan data-data pengguna dengan benar! </strong>  
                            </div>
                            <div class="panel-body">
                                <form action="<?php echo base_url(); ?>index.php/regist_user/insert_user" method="post" enctype="multipart/form-data">
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" name="username" placeholder="Username" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"  ></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="Password" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="nama" placeholder="Nama Anda" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="text" class="form-control" name="npm" placeholder="NPM" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="text" class="form-control" name="kelas" placeholder="Kelas" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-key"  ></i></span>
                                            <input type="role" class="form-control" name="role" placeholder="role" />
                                        </div>
                                    
                                      <button type="submit" name="submit" class="btn btn-success">Daftar</button>
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>