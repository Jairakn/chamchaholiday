<div class="car-rent">
	<div class="container">
		<?php $get_carrent = $this->useful_model->get('tb_carrental','priority asc')->result_array(); 
		foreach ($get_carrent as $key => $value) {?>
		<div class="car-all">
		<div class="row">
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" >
				<div class="car">
					<div class="car-1">
						<img src="<?php echo base_url('assets/uploads/carrent/'.$value['img']); ?>">
					</div>
				</div>
			</div>
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" >
				<div class="detail-car">
				<div class="line-boder">
					<div class="detail-car-1">						
						<div class="topic-car">
							<?php echo $value['title_'.$lang];
							//if($value['with_driver']=="Yes"){echo " (With Driver)";} ?> 
						</div>
						<div class="type-car">
							<div class="model-car">
								<i class="fa fa-bus" aria-hidden="true" style="color: #84ba3b"></i>
								Model : <?php echo $value['model_'.$lang]?>
							</div>
							<div class="model-car">
								<i class="fa fa-users" aria-hidden="true" style="color: #84ba3b"></i>
								Passengers Max : <?php echo $value['passengers_max']?>
							</div>
							<div class="include">
								<div class="col1-in">
									<div class="include-top">
										INCLUDE
									</div>
								<div class="detail-in">
									<?php echo $value['include_'.$lang]?>
								</div>
								</div>
								
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" >
			<div class="rent-car">
				<div class="detail-car">
					<div class="topic-car">
						Piece(s)
					</div>	
					<div class="price-car">
						<?php echo number_format($value['price'],0)?> Thai baht
					</div>
					<a href="<?php echo base_url($lang.'/car-booking') ?>">
					<div class="book-car">
						<div class="btn-book">
							BOOK NOW
						</div>
					</div>
					</a>
				</div>
			</div>
			</div>
		</div>
		</div>
		<?php } ?>
	</div>
</div>