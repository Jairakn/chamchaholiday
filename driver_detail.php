<?php 
	$get_id = $this->useful_model->get_where('tb_driver','id',$this->uri->segment(4))->row_array();
?>
<div class="detail-dri">
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-lg-offset-2 col-md-offset-2">
				<div class="driver-detail">
					<div class="pic-driver">
						<img src="<?php echo base_url('assets/uploads/driver/'.$get_id['picture']); ?>">
					</div>
					<div class="driver">
						<div class="name-text">
							<?php echo $get_id['title_'.$lang]?>
						</div>
						<div class="driver-text1">
							Work experience
						</div>
						<div class="dritext-detail2">
							<?php echo $get_id['detail_'.$lang]?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>