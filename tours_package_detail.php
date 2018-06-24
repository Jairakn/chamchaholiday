<?php 
	$get_id = $this->useful_model->get_where('tb_tours_package','id',$this->uri->segment(4))->row_array();
?>
<script>
	$(document).ready(function() {
    $('.pgwSlideshow').pgwSlideshow();
});
</script>
<div class="detailtours">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="name-tour">
					<?php echo $get_id["title_$lang"]; ?>
				</div>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div class="detail-time">
					<div class="detail-time1">
						<i class="fa fa-credit-card" aria-hidden="true"></i>
							Price / <?php echo number_format($get_id["price"],0)?> ฿
					</div>
					<div class="detail-time1">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						Daily from <?php echo $get_id["time"]; ?>
					</div>
				</div>
				<?php $count = $this->useful_model->count_where('tb_picture','tour_id',$this->uri->segment(4));
				if($count>0){ ?>
				<div class="pic-detail">
					<div class="gal-detail">
						<ul class="pgwSlideshow">
						<?php $get_slide = $this->useful_model->get_where_custom_order('tb_picture','tour_id',$this->uri->segment(4),'priority asc')->result_array();
						foreach ($get_slide as $key => $value) {?>
						    <li><img src="<?php echo base_url('assets/uploads/picture/'.$value['picture_img']); ?>"></li>
						<?php }?>
						</ul>
					</div>
				</div>
				<?php }?>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<form action="<?php echo base_url($lang.'/tour-booking')?>" method="post" class="booktours">
					<div class="head-form">
						book This Tour
					</div>
					<div class="bg-formtour">
						<div class="form-booking">
							<div class="text-form">
								Full Name
							</div>
							<div class="form-group">
								<div class="name-input">
									<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $get_id['id']?>"  placeholder="Name......................">
	  								<input type="text" name="name" class="form-control" id="name" value="<?php echo $get_id['title_'.$lang]?>"  placeholder="Name......................" readonly>
	           					</div>
	           				</div>
						</div>
						<div class="form-booking">
							<div class="text-form">
								Email
							</div>
							<div class="form-group">
								<div class="name-input">
	  								<input type="email" name="email" class="form-control" id="email" value=""  placeholder="sample@gmail.com">
	           					</div>
	           				</div>
						</div>
						<div class="form-booking">
							<div class="text-form">
								Phone Number
							</div>
							<div class="form-group">
								<div class="name-input">
	  								<input type="text" name="tel" class="form-control" id="tel" value=""  placeholder="+66-1234567">
	           					</div>
	           				</div>
						</div>
						<div class="form-booking">
							<div class="text-form">
								Departure date
							</div>
							<div class="form-group">
								<div class="date-tour">
	  								<input type="text" name="date" class="form-control" id="datepicker" value=""  placeholder="DD/MM/YYYY">
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
    	 onClose: function( selectedDate ) {
	        $( "#datepicker" ).datepicker( "option", "dateFormat", "d MM, yy" );
	      }
    });
  } );
  </script>
	           					</div>
	           				</div>		
						</div>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<div class="form-booking-1 book2">
									<div class="text-form">
										Adults
									</div>
									<div class="form-group">
										<div class="input-b">
											<select class="form-control" name="adult">
			    								<?php for ($i=1; $i <= 10; $i++) { ?>
			    								<option value="<?php echo $i;?>"><?php echo $i;?></option>
			    								<?php }?>
			  								</select>
										</div>
			           				</div>
			           			</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-right: 0px">
								<div class="form-booking-1 book2">
									<div class="text-form">
										Children
									</div>
									<div class="form-group">
										<div class="input-b">
											<select class="form-control" name="children">
												<?php for ($i=0; $i <= 10; $i++) { ?>
			    								<option value="<?php echo $i;?>"><?php echo $i;?></option>
			    								<?php }?>
			  								</select>
										</div>
			           				</div>
								</div>
							</div>
						</div>
						<div class="form-booking">
							<div class="text-form">
								With Driver
							</div>
							<div class="form-group">
								<div class="input-b">
									<select class="form-control" name="drive_id">
										<option value="">With Driver</option>
									<?php $get_car = $this->useful_model->get('tb_carrental','priority asc')->result_array();
									foreach ($get_car as $key => $value) {?>
	    								<option value="<?php echo $value['id']?>"><?php echo $value['model_'.$lang]?><br> (<?php echo 'Max : '.$value['passengers_max']?>)</option>
	    							<?php }?>
	  								</select>
								</div>
	           				</div>
						</div>
						<center>
							<input type="submit" class="btn-submit" value="PROCEED BOOKING">
						</center>
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
	<div class="detail-package">
		<div class="container">
			<div class="row">
			<div class="detail-packtour">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<div class="detail-pack">
						<div class="detailt-top">
						Description :
						</div>
						<div class="detail-bottom">
							<?php echo $get_id["description_$lang"]; ?>
						</div>
						<div class="detail-paak">
							<div class="detailt-top">
							Itinerary :
							</div>
							<div class="detail-bottom">
								<?php echo $get_id["itinerary_$lang"]; ?>
							</div>
						</div>
						<div class="detail-paak">
							<div class="detailt-top">
							Tour Includes :
							</div>
							<div class="detail-bottom">
								<?php echo $get_id["tour_includes_$lang"]; ?> 
							</div>
						</div>
						<div class="detail-paak">
							<div class="detailt-top">
							Tour Excludes :
							</div>
							<div class="detail-b">
								<?php echo $get_id["tour_excludes_$lang"]; ?> 
							</div>
						</div>
						<div class="box-detail">
							<div class="textbox">
								<b>Remark: </b> <?php echo $get_id["remark_$lang"]; ?>.<br>
								<b>Note: </b><?php echo $get_id["note_$lang"]; ?>.
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>