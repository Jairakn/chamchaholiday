<div class="bg-hostel">
	<div class="container">
		<div class="row">		
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding-left:0; padding-right: 0">
				<div class="detail-h">
					Cham Cha Hostel
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
</div>
<div class="hostel-pic" style="padding-bottom: 50px;">
	<div class="container">
		<div class="row">
		<div class="rom-pic">
		<?php
			$room_get = $this->useful_model->get('tb_hotel_room','room_id asc')->result_array();

			foreach ($room_get as $key => $room_get) {
			?>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="picroom1">
					<img src="<?php echo base_url('assets/uploads/room/'.$room_get["img"])?>">
				</div>
				<div class="pichover">
					<center><div class="btn-typeroom">
						<?php echo $room_get["title_$lang"]; ?>
					</div></center>
					<center><div class="detail-typeroom">
							<?php echo $room_get["short_detail_$lang"]; ?>
					</div></center>
					<a href="<?php echo base_url($lang.'/hostel/detail/'.$room_get["room_id"]) ?>">
					<center><div class="viewdetail">
							VIEW DETAIL
					</div></center>
					</a>
				</div>
			</div>	
			<?php } ?>	
		</div>
		</div>
	</div>
</div>