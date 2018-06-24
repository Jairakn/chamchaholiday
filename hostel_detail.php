<?php 
	$get_id = $this->useful_model->get_where('tb_hotel_room','room_id',$this->uri->segment(4))->row_array();
?>

<script>
	$(document).ready(function() {
    $('.pgwSlideshow').pgwSlideshow();
});
</script>
<div class="detail-room">
	<div class="container">
		<div class="row">
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<div class="row">
					<div class="detail-rm">
						<div class="type-rooms">
							<?php echo $get_id["title_$lang"]; ?>
						</div>
						<div class="detail-type-text">
							<?php echo $get_id["detail_$lang"]; ?>
						</div>
						<div class="rm-pic" style="margin-right: 15px">
							<ul class="pgwSlideshow">
							<?php $get_slide = $this->useful_model->get_where_custom_order('tb_picture','hotel_id',$this->uri->segment(4),'priority asc')->result_array();
							foreach ($get_slide as $key => $value) {?>
								<li><img src="<?php echo base_url('assets/uploads/picture/'.$value['picture_img']); ?>"></li>
							<?php }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
				<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="padding-top: 50px;">
					<div class="row">
						<div class="bg-green" style="margin-left: 15px;">
							<div class="text-q">
								<div class="topic-q">
									Get a Question?
								</div>
								<div class="line-q"></div>
								<div class="detail-q">
									Do not hesitage to give us a call. We are an expert team and we are happy to talk to you.
								</div>
								<div class="contact-q">
									Tel : 082 181 8359, 088 251 2867<br>
									Office : 052 011 727
								</div>
								<div class="email-q">
									E-Mail : infomaptoyou@gmail.com
								</div>
							</div>
						</div>
						<div class="topic-op" style="margin-left: 15px">
							Facilities of Cham Cha Hostel
						</div>
						<div class="detail-op">
							<div class="service">
								
								<?php
							        if($get_id['facility_id']!=''){
								     	$loc2 = explode(",", $get_id['facility_id']);
								     	$num =  count($loc2);
							     	for($j=0 ; $j < $num ; $j++){
							      		$exterior = $this->useful_model->get_where_custom('tb_hotel_room_facility','facility_id',$loc2[$j])->result_array();
							      	foreach ($exterior as $key => $exterior) {
							       ?>
							        <li>
								       	<i class="fa fa-check-circle-o" aria-hidden="true"></i>
								      	<?php echo $exterior['title_'.$lang]; ?>
							      	</li>
							       <?php
							      }
							     }
							    }
							    ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>