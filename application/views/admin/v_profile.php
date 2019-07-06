<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Profile</h2>
                    </div>
                </div>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'basicinformation')" id="defaultOpen">BASIC INFORMATION</button>
  <button class="tablinks" onclick="openCity(event, 'updateinformation')">UPDATE INFORMATION</button>
  <button class="tablinks" onclick="openCity(event, 'password')">PASSWORD</button>
</div>

<div id="basicinformation" class="tabcontent">
<br>
<br>
 
<div class="card-baru">
   <?php foreach($avatar as $ava) {   ?>
  <div>
  <img src="<?php echo base_url('upload/images/profile_picture/'.$ava->avatar) ?>"  style="width:100%">
  </div>
  <?php  }  ?>
  <?php foreach($basic_info as $basin) {   ?>
  <div class="container-baru">
    <h1><?php echo $basin->nama ?></h1>
    <p class="title-baru"><?php echo $basin->npm ?></p>
    <p><?php echo $basin->kelas ?></p>
    <p><?php echo $basin->telp ?></p>
    <div class="tes-baru">
    <p><?php echo $basin->alamat ?></p>
    </div>
   <!--<div class="tes-baru">
   <p><button>Contact</button></p>
   </div>-->
  </div>
  <?php  }  ?>
</div>

</div>

<div id="updateinformation" class="tabcontent">
  <div class="row">
               <br>
               <br>
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Isikan data-data pengguna dengan benar! </strong>  
                            </div>
                            <div class="panel-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                <?php if(validation_errors()): ?>
                                  <div class="col s12">
                                    <div class="card-panel red">
                                      <span class="white-text"><?php echo validation_errors('<p>', '</p>'); ?></span>
                                    </div>
                                  </div>
                                <?php endif; ?>
                                <?php if($message = $this->session->flashdata('message_profile')): ?>
                                  <div class="col s12">
                                    <div class="card-panel <?php echo ($message['status']) ? 'green' : 'red'; ?>">
                                      <span class="white-text"><?php echo $message['message']; ?></span>
                                    </div>
                                  </div>
                                <?php endif; ?>
                                        <br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $this->session->userdata('nama'); ?>" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"  ></i></span>
                                            <input id="alamat" type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $this->session->userdata('alamat'); ?>" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="text" type="number" id="telp" class="form-control" name="telp" placeholder="No. Telepon" value="<?php echo $this->session->userdata('telp'); ?>"/>
                                        </div>
                                        <div class="form-group input-group">  
                                              <input type="file" name="avatar" class="form-control">
                                        </div>
                                    
                                      <button type="submit" name="submit-information" value="true" class="btn btn-success">Save</button>
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
</div>

<div id="password" class="tabcontent">
  <div class="row">
               <br>
               <br>
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Isikan data-data pengguna dengan benar! </strong>  
                            </div>
                            <div class="panel-body">
                                <form action="" method="post" id="password-form" enctype="multipart/form-data">
                                <?php if(validation_errors()): ?>
                                  <div class="col s12">
                                    <div class="card-panel red">
                                      <span class="white-text"><?php echo validation_errors('<p>', '</p>'); ?></span>
                                    </div>
                                  </div>
                                <?php endif; ?>
                                <?php if($message = $this->session->flashdata('message_password')): ?>
                                  <div class="col s12">
                                    <div class="card-panel <?php echo ($message['status']) ? 'green' : 'red'; ?>">
                                      <span class="white-text"><?php echo $message['message']; ?></span>
                                    </div>
                                  </div>
                                <?php endif; ?>
                                <br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input id="password_lama" type="password" class="form-control" name="password_lama" placeholder="Password Lama" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"  ></i></span>
                                            <input id="password_baru" type="password" class="form-control" name="password_baru" placeholder="Password Baru" />
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" id="konfirmasi_password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password" />
                                        </div>
                                      <button type="submit" name="submit-password" value="true" class="btn btn-success">Save</button>
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div> 
</div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


            </div>
</div>