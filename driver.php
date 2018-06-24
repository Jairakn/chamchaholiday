	<div class="bg-driver">
		<div class="container">	
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding-left:0; padding-right: 0">
				<div class="detail-h">
					Driver
					<div class="detail-h-1">
						<?php echo $page['short_detail_'.$lang]?> 
					</div>
				</div>	
				<div class="sub-detail"></div>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<div class="detail-right">
					<div class="detail-right1">
						<?php echo $page['detail_'.$lang]?>
					</div>	
				</div>
			</div>
		</div>
	</div>
<div class="gallery-driver">
	<div class="container">
		<div class="row">
		<div class="galleryd">
			<?php
			$driver = $this->useful_model->get('tb_driver','id asc')->result_array();

			foreach ($driver as $key => $driver) {
			?>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 galleryhover">
					<div class="galleryd-1">
						<img src="<?php echo base_url('assets/uploads/driver/'.$driver['picture']) ?>">
					</div>
					<div class="footer-driver">
						<div class="driver-text">
							<?php echo $driver['title_'.$lang]?>
						</div>
						<div class="driver-text1">
							Work experience
						</div>
						<div class="driver-text2">
							<?php echo $driver['short_detail_'.$lang]?>
						<a href="<?php echo base_url($lang.'/driver/detail/'.$driver["id"]) ?>">
						<div class="viewdriver">
							<div class="btn-driver">
								VIEW DETAIL
							</div>
						</div>
						</a>
					</div>
				</div>
			<?php } ?>
		</div>
		</div>
	</div>
</div>