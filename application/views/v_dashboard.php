<div id="content">
  <div class="col-md-12" style="padding:20px;">
     <div class="col-md-12 padding-0">
        <div class="col-md-8 padding-0">
             <div class="col-md-12 padding-0">
                <div class="col-md-6">
                    <div class="panel box-v1">
                      <div class="panel-heading bg-white border-none">
                         <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                            <h4 class="text-left">Pegawai</h4>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <h4>
                              <span class="icon-user icons icon text-right"></span>
                            </h4>
                          </div>
                        </div>
                        <div class="panel-body text-center">
                           <?php if($this->session->userdata('level')=='admin'){?>
									         <a href="<?=base_url('index.php/Kasir')?>" style="color: black">
										       <?php }?>                          
                            <span class="icon"><i class="fa-user fa"></i></span> 
                            <h1><p><span class="number"><?= $user?></span></p></h1>	
                            <hr/>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="panel box-v1">
                        <div class="panel-heading bg-white border-none">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                            <h4 class="text-left">Penjualan</h4>
                          </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                           <h4><span class="icon-basket-loaded icons icon text-right"></span></h4>
                        </div>
                      </div>
                      <div class="panel-body text-center">
                        <a href="<?=base_url('index.php/Histori')?>" style="color: black">
                          <div class="metric">
										        <span class="icon"><i class="fa-shopping-cart fa"></i></span>
										        <p><h1><span class="number"><?= $transaksi ?></span></h1>	</p>
									    </div>
									      </a>
                           <hr/>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-md-12">
                      <div class="panel box-v1">
                        <div class="panel-heading bg-white border-none">
                          <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                            <h4 class="text-left">Kamera</h4>
                          </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                           <h4><span class="icon-camera icons icon text-right"></span></h4>
                        </div>
                      </div>
                      <div class="panel-body text-center">
                        <a href="<?=base_url('index.php/Kamera')?>" style="color: black">
                          <div class="metric">
										        <span class="icon"><i class="fa-camera fa"></i></span>
										        <p><h1><span class="number"><?= $kamera ?></span></h1>	</p>
									    </div>
									      </a>
                           <hr/>
                      </div>
                  </div>
              </div>
            </div>
                        <div class="col-md-4">
                            <div class="col-md-12 padding-0">
                              <div class="panel box-v2">
                                  <div class="panel-heading padding-0">
                                    <img src="<?= base_url()?>/asset/img/bg2.jpg" class="box-v2-cover img-responsive"/>
                                    <div class="box-v2-detail">
                                      <img src="<?= base_url()?>/asset/img/avatar.jpg" class="img-responsive"/>
                                      <h4><?=$this->session->userdata('nama_user')?></h4>
                                    </div>
                                  </div>
                                  <div class="panel-body">
                                    <div class="col-md-12 padding-0 text-center">
                                      <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
                                          <h3>2.000</h3>
                                          <p>Post</p>
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-6 padding-0">
                                          <h3>2.232</h3>
                                          <p>share</p>
                                      </div>
                                      <div class="col-md-4 col-sm-4 col-xs-12 padding-0">
                                          <h3>4.320</h3>
                                          <p>photos</p>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>

                            
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
      		  </div>

<!-- <div class="col-md-12" style="padding:110px;padding-left:260px;">
                    <div class="col-md-12 padding-260">
                        <div class="col-md-8 padding-0">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Pegawai</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
									  <?php if($this->session->userdata('level')=='admin'){?>
										<a href="<?=base_url('index.php/Kasir')?>" style="color: black">
										<?php }?>
										<div class="metric">
										<span class="icon"><i class="fa-user fa"></i></span> 
										<h1><p>
										<span class="number"><?= $user?></span>
										</p>
										</h1>										
									</div>
								<?php if($this->session->userdata('level')=='admin'){?>
								</a>
								<?php }?>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Penjualan</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-basket-loaded icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
									  <a href="<?=base_url('index.php/Histori')?>" style="color: black">
									<div class="metric">
										<span class="icon"><i class="fa-shopping-bag fa"></i></span>
										<p>
											<h1><span class="number"><?= $transaksi ?></span></h1>		
										</p>
									</div>
									</a>
								<?php if($this->session->userdata('level')=='admin'){?>
								</a>
								<?php }?>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                
								<div class="col-md-12">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Kamera</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="fa-camera fa"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
									  <a href="<?=base_url('index.php/Kamera')?>" style="color: black">
									<div class="metric">
										<span class="icon"><i class="fa-camera fa"></i></span>
										<p>
											<h1><span class="number"><?= $kamera ?></span> </h1>
											<span class="title"></span>
										</p>
									</div>
									</a>
                    <hr/>
                 </div>
                                    </div>
</div>

</div>


<div class="content">
<h3 >Selamat Datang <?=$this->session->userdata('nama_user')?></h3>
		
	<div class="boss" style="width">




	</div>
	 -->