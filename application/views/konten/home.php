		<div class="container">
					<div class="fitur_produk"><!--features_items-->
						<h2 class="title text-center">
							<?php
								if (isset($header_kategori)) {
									echo $header_kategori;
								}else echo "Seputar Kegiatan";
							?>
						</h2>
						
						<?php
							if ($list_berita != NULL) {
								$i = 1;
								foreach ($list_berita as $value) {
						?>
						<div class="container">
						 			<div class="col-md-4">
						 				
						 				<div class="product-image-wrapper">
													
											<div class="single-products">
												<div class="productinfo text-center">
													<div class="col-md-12">
														<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/post/<?php echo $value->foto_berita; ?>" alt="" />
													</div>
													<div class="clearfix">
														<br><br><br>

													</div>
												</div>

												
											</div>
											
										</div>
									</div>
									<div class="col-md-8">
										<h2><a href="<?php echo base_url('welcome/berita/'.$value->id_berita); ?>"> <?php echo $value->judul_berita; ?> </a></h2>
										<p><?php echo $value->isi_singkat_berita; ?></p>
										<!-- <a href="<?php echo base_url('welcome/berita/')  ?>" class="btn btn-default"><h3><b><?php echo $value->judul_berita; ?></b></h3></a>
										 -->			
									
									</div>
						</div>
						<hr>
						<?php
									if ($i % 3 == 0) {
										echo "<div class='clearfix'></div>";
									}
									$i++;
								}
							}

						?>
					</div><!--features_items-->
					<div class="clearfix">
						
					</div>
					<div align="center">
						<?php echo $pagination; ?>
					</div>
		</div>