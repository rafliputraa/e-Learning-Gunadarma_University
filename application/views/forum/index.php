
<section class="well well4">
        <div class="container">
        <h2>
                Forum
              </h2>

        
                <div>
              
                    <aside >
                    <section class="list-topic-baru">
                    <div class="section__title">
                        <h3>Topics</h3>
                    </div>
                        <div>
                            <ul>
                                
                            <?php
                                if(!empty($forumDisplay)){
                                    foreach($forumDisplay as $row){ ?>
                                        
                                        <li><a href="<?php echo base_url();?>index.php/forum/mforum/<?php echo $row->id ?>"><?php echo $row->nama_topic ?></a></li>
                                        
                                    <?php
                                    }
                                }
                            ?>
                            
                        </ul>
                        </div>
                        </section>
                        </aside>

                </div>

                <div class="list-content-baru">
                    <ul>
                        
                        <?php
                            if(!empty($semuaForum)){
                            foreach($semuaForum as $judulTrit){ ?>
                        <li>    
                            <h4><a href="<?php echo base_url();?>index.php/forum/detailThread/<?php echo $judulTrit->id ?>"><?php echo $judulTrit->judul ?></a></h4>
                            <?php echo $judulTrit->tanggal; ?> | Posted by : <?php echo $judulTrit->nama; ?> | Topic : <?php echo $judulTrit->nama_topic; ?>
                        </li>

                        <?php
                        }
                    }
                ?>
                    </ul>
                </div>

        <div class="container"><?php echo $halaman; ?></div>
</div>
</section>

