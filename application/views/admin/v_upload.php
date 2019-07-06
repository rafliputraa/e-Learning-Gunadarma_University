<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Upload</h2> 
                <br>  
            </div>
                <form role="form" action="<?php echo base_url(); ?>index.php/upload/insert_file" method="POST" enctype="multipart/form-data">
                    <span class="form-group col-xs-6" style="margin-left: 40px;">
                    <div>
                        <label>NAMA FILE</label>
                        <input class="form-control" type="text" name="nama_file" value="">
                    </div>
                    </span>
                    <span class="form-group col-xs-6" style="margin-left: 40px;">
                    <div>
                        <label>KETERANGAN</label>
                        <textarea class="form-control" rows="5" name="keterangan_file" required> </textarea>
                    </div>
                    </span>
                    <span class="btn btn-success fileinput-button" style="position:absolute; top:425px; left:340px">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="file" value="">
                    </span>
                    <button type="submit" name="submit" class="btn btn-primary start" style="position:absolute; top:470px; left:340px">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start upload</span>
                    </button>
                    <button type="reset" class="btn btn-warning cancel" style="position:absolute; top:470px; left:480px">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Cancel upload</span>
                    </button>
                </form>
    <br>
                <span class="col-xs-10" style="position:relative; top: 100px; left: 40px;">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Notes</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>The maximum file size for uploads in this demo is <strong>999 KB</strong> (default file size is unlimited).</li>
                            <li>Only image files (<strong>JPG, GIF, PNG</strong>) are allowed in this demo (by default there is no file type restriction).</li>
                            <li>Uploaded files will be deleted automatically after <strong>5 minutes or less</strong> (demo files are stored in memory).</li>
                            <li>You can <strong>drag &amp; drop</strong> files from your desktop on this webpage (see <a href="https://github.com/blueimp/jQuery-File-Upload/wiki/Browser-support">Browser support</a>).</li>
                            <li>Please refer to the <a href="https://github.com/blueimp/jQuery-File-Upload">project website</a> and <a href="https://github.com/blueimp/jQuery-File-Upload/wiki">documentation</a> for more information.</li>
                            <li>Built with the <a href="http://getbootstrap.com/">Bootstrap</a> CSS framework and Icons from <a href="http://glyphicons.com/">Glyphicons</a>.</li>
                        </ul>
                    </div>
                </div>
                </span>
                
        </div>
    </div>
</div>
