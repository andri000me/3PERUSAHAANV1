			<div class="container">
                <div class="row" style="padding-top:15px;"> 
                    <div class="col-md-9">
                        <div class="blog-post single-post">
                            <article class="post blog-single-post">
                                <div>
                                    <h2><?php echo $rows['judul']; ?></h2>
								
									<div class="td-post-content td-pb-padding-side">
                                        <div class="td-post-featured-image" data-plugin-options="{'items':1}">
                                            <div>
                                                
											   <?php if ($rows['gambar'] !=''){ echo "<div class='entry-thumb td-animation-stack-type0-2' style='display:inherit;'><img  class='img-responsive' style='width:20%' src='".base_url()."asset/foto_statis/$rows[gambar]' alt='$rows[judul]' /></a></div>"; } ?>
										   
                                            </div>
                                        </div>
                                    </div>

                                    <?php echo $rows['isi_halaman']; ?>

                                    

                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <aside class="siderbar">
							<h4 class="heading-primary">Latest News</h4>
                            <ul class="nav nav-list mb-xlg">
							<?php
							$pilihan = $this->model_utama->view_join_two('berita','users','kategori','username','id_kategori',array('berita.aktif' => 'Y','status' => 'Y'),'id_berita','DESC',0,8);
							foreach ($pilihan->result_array() as $row) {   
                                    echo "<li><a href='../../berita/detail/$row[judul_seo]'>$row[judul]</a></li>";
                            }
							?>
                            </ul>
                            <hr />
							
                       
                        </aside>
                    </div>
                </div>
            </div>
       

<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b878e417c0d681d"></script>









