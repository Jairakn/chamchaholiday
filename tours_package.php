<?php 
	if(isset($_GET['get'])){
		$get_detail=$_GET['get'];
	}else{
		$get_detail=$this->useful_model->get_min('tb_tours_package','id');
	}
?>

<div class="pack-tour">
	<div class="container">
		<div class="row">
		<?php
			$tours_pack = $this->useful_model->get('tb_tours_package','id asc')->result_array();

			foreach ($tours_pack as $key => $tours_pack) {
			?>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="packtour-pic">
					<div class="packpic-1">
						<img src="<?php echo base_url('assets/uploads/tour_listing/'.$tours_pack['picture'])?>">
					</div>
					<div class="footer-pack">
						<div class="packtour-text">
							<?php echo $tours_pack["title_$lang"]; ?>
						</div>
						<div class="packtour-text1">
							 <i class="fa fa-credit-card" aria-hidden="true"></i>
							 Price / Van <?php echo number_format($tours_pack["price"],0)?> B
						</div>
						<div class="packtour-text2">
							 <i class="fa fa-clock-o" aria-hidden="true"></i>
							 Daily from <?php echo $tours_pack["time"]; ?>
						</div>
						<div class="packtour-text3">
							<?php echo $tours_pack["short_detail_$lang"]; ?>
						</div>
						<a href="<?php echo base_url($lang.'/tours-package/detail/'.$tours_pack["id"]) ?>">
						<div class="book-packtour">
							<div class="btn-packtour">
								VIEW DETAIL
							</div>
						</div>
						</a>
					</div>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>

