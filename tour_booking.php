<?php 
$tour = $this->useful_model->get_where('tb_tours_package','id',$this->input->post('id'))->row_array();
$car = $this->useful_model->get_where('tb_carrental','id',$this->input->post('drive_id'))->row_array(); 
?>
<div class="booking">
	<div class="container">
		<div class="cart-form">
			SELECT DATE
		</div>
		<div class="cart_bg">
			<form action="" method="post" style="margin-top:0;" class="form-group">
				<div class="row form-group">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for="datepicker">Date of tour</label>
						<label class="icon-input" for="datepicker"><i class="fa fa-calendar"></i></label>
						<input type="hidden" name="id" value="<?php echo $this->input->post('id')?>" class="form-control form-with-icon">
						<input type="text" name="date" id="datepicker" value="<?php echo $this->input->post('date')?>" class="form-control form-with-icon">
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
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label for="adult">Number of Guests</label>
						<label class="icon-input" for="datepicker"><i class="fa fa-users"></i></label>
						<select class="form-control form-with-icon" name="adult">
							<?php for ($i=1; $i <= 10 ; $i++) { ?>
							<option <?php if($this->input->post('adult')==$i){echo 'selected';}?> value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<label for="adult">Number of Children</label>
						<label class="icon-input" for="datepicker"><i class="fa fa-users"></i></label>
						<select class="form-control form-with-icon" name="children">
							<?php for ($i=0; $i <= 10 ; $i++) { ?>
							<option <?php if($this->input->post('children')==$i){echo 'selected';}?> value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						</select>
					</div>
				</div>
				
<?php if($this->input->post('drive_id')==""){?>
<script>
$(document).ready(function(){	
	$("#cart-car-detail").hide();
});
</script>
<?php }else{?>
<script>
$(document).ready(function(){	
	$("#cart-car-detail").show();
	$("#cart-head").find('.fa-plus').toggleClass('fa-plus fa-minus');
});
</script>	
<?php }?>							
<script>
$(document).ready(function(){
	
    $("#cart-head").click(function(){
        $("#cart-car-detail").slideToggle(),
        $("#cart-head").find('.fa-plus,.fa-minus').toggleClass('fa-plus fa-minus');
    });
    
});
</script>
						<!--head-->
							<div class="cart-head form-group" id="cart-head">
								<div class="head-left">
									Car Rental (with driver): <?php //echo $this->input->post('drive_id');?>
								</div>
								<div class="head-right">
									<i class="fa fa-plus"></i> Hide Extras
								</div>
							</div>
						<!--detail-->
							<div class="cart-car-detail form-group" id="cart-car-detail">
								<div class="carrent form-group">
										<label class="car-select">
											Select Car 
										</label>
										<select class="form-control" name="drive_id">
											<option value="">Choose</option>
										<?php $get_car = $this->useful_model->get('tb_carrental','priority asc')->result_array();
										foreach ($get_car as $key => $value) {?>
		    								<option <?php if($this->input->post('drive_id')==$value['id']){echo 'selected';} ?> value="<?php echo $value['id']?>"><?php echo $value['model_'.$lang]?><br> (<?php echo 'Max : '.$value['passengers_max']?>)</option>
		    							<?php }?>
		  								</select>
								</div>
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group" >
										<label for="datepicker_pickup" class="book-date">
											Pick-up Date
										</label>

							  					<input type="text" name="pickup_date" class="form-control form-with-icon" id="datepicker_pickup" value="<?php echo $this->input->post('pickup_date');?>" placeholder="Please choose date">
							           			<label class="icon-input" for="datepicker_pickup"><i class="fa fa-calendar"></i></label>
							            		
<script>
  $( function() {
    $( "#datepicker_pickup" ).datepicker({
		 onClose: function( selectedDate ) {
		    $( "#datepicker_pickup" ).datepicker( "option", "dateFormat", "d MM, yy" );
		}
    });
  } );
  </script>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group">
										<label class="location" for="pickup_location">
											Pick-up location
										</label>
										<label class="icon-input" for="datepicker_pickup"><i class="fa fa-car"></i></label>
										<select class="form-control form-with-icon" name="pickup_location" id="pickup_location">
											<option value="">Pick-up location</option>
		    							<?php $loc = $this->useful_model->get('tb_pickup_location','priority asc')->result_array(); 
		    							foreach ($loc as $key => $loc) {?>
		    								<option <?php if($this->input->post('pickup_location')==$loc['title_'.$lang]){echo 'selected';}?> value="<?php echo $loc['title_'.$lang];?>"><?php echo $loc['title_'.$lang];?></option>
										<?php }?>
		  								</select>
			           				</div>
								</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<label for="" class="book-date">
													Flight number
											</label>
											<label class="icon-input" for="flight_no"><i class="fa fa-plane"></i></label>
							  				<input type="text" id="flight_no" name="flight_no" class="form-control form-with-icon" value="<?php echo $this->input->post('flight_no');?>" placeholder="Flight number">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
											<label class="book-date">
													Hotel Name
											</label>
											<label class="icon-input" for="hotel_name"><i class="fa fa-hotel"></i></label>
							  				<input type="text" id="hotel_name" name="hotel_name" class="form-with-icon form-control a" i value="<?php echo $this->input->post('hotel_name');?>" placeholder="Hotel Name">
										</div>
									</div>
							</div>
							<center>
								<span style="color:#000;">Please press "Update" when you make any changes.</span><br>
								<input type="submit" value="Update" class="btn-formsubmit" />
							</center>
			</form>
			
			<div class="tour_pk_bg">
				<div class="tour_pk_detail">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="tour_pk_title"><?php echo $tour['title_'.$lang]?></div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="text-right">
								<span style="color:#1b1a16;">Total Price</span>
								<div class="tour_pk_title">
									<?php 
									$adulttotal = $this->input->post('adult')*$tour['price'];
									$childrentotal = $this->input->post('children')*$tour['price_child'];
									$totalallprice = $adulttotal+$childrentotal+$car['price'];
									echo number_format($totalallprice).' THB';
									?>
									<i class="fa fa-check-circle" style="font-size:30px;color:#84ba3b;"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tour_pk_detail">
					<div class="tour_pk_title">Note *</div>
					<?php echo $tour['note_'.$lang]?>
				</div>
				<form action="<?php echo base_url($lang.'/add-cart')?>" method="post" >
				<div class="row form-group">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<span style="color:#1b1a16;">Select a starting time: </span>
						<select class="start-time" name="starttime">
							<?php
							      if($tour['start_time']!=''){
							     $loc2 = explode(",",$tour['start_time']);
							     $num =  count($loc2);
							     for($j=0 ; $j < $num ; $j++){
							      $exterior = $this->useful_model->get_where_custom('tb_starttime','id',$loc2[$j])->result_array();
							      foreach ($exterior as $key => $exterior) {
							       ?>
							      <option value="<?php echo $exterior['time']?>"><?php echo $exterior['time']?></option>
							       <?php
							      }
							     }
							    }
							    ?>
						</select>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<div class="tour_pk_detail sm">
							<span style="color:#1b1a16;">Total Price :</span>
						</div>
						<div class="tour_pk_detail sm">
							<div class="row" style="margin-bottom: 5px;">
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
									Adult
								</div>
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
									<?php echo $this->input->post('adult');?>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
									<?php echo number_format($adulttotal);?>
								</div>
							</div>
							<div class="row" style="margin-bottom: 5px;">
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
									Children
								</div>
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
									<?php echo $this->input->post('children');?>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
									<?php echo number_format($childrentotal);?>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
									Car Rental
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 col-md-offset-3 text-right">
									<?php echo number_format($car['price']);?>
								</div>
							</div>
						</div>
					</div>
				</div>
					<div class="text-right">
						<input type="hidden" name="id" value="<?php echo $tour['id']?>">
						<input type="hidden" name="children" value="<?php echo $this->input->post('children')?>">
						<input type="hidden" name="adult" value="<?php echo $this->input->post('adult')?>">
						<input type="hidden" name="price" value="<?php echo $totalallprice?>">
						<?php if($this->input->post('drive_id')==""){?>
						<input type="hidden" name="type" value="Tour Only">
						<?php }else{?>
						<input type="hidden" name="type" value="Tour with Car">
						<?php }?>
						<input type="hidden" name="pickup_date" value="<?php echo $this->input->post('pickup_date');?>">
						<input type="hidden" name="pickup_location" value="<?php echo $this->input->post('pickup_location');?>">
						<input type="hidden" name="flight_no" value="<?php echo $this->input->post('flight_no');?>">
						<input type="hidden" name="hotel_name" value="<?php echo $this->input->post('hotel_name');?>">
						<input type="hidden" name="date" value="<?php echo $this->input->post('date')?>">
						<input type="hidden" name="drive_id" value="<?php echo $this->input->post('drive_id')?>">
						<input type="submit" class="btn-submit" value="Add to cart">
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>