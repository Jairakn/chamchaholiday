<div class="map">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="maping">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2245.9466250168066!2d98.98019642961677!3d18.788483329465766!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3a9b6e4a246f%3A0x9656d9e717cd54e9!2sPhra+Singh+Temple!5e0!3m2!1sen!2sth!4v1488508482052" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<?php 
$get_location = $this->useful_model->get_where('tb_page','page_id',622)->row_array();
$get_phone = $this->useful_model->get_where('tb_page','page_id',623)->row_array();
$get_time = $this->useful_model->get_where('tb_page','page_id',624)->row_array();
?>
<div class="contacts">
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="location">
					<div class="icon-l">
						<i class="fa fa-map-marker fa-3x" aria-hidden="true" style="color: #000"></i>
					</div>
					<div class="text-l">
						<?php echo $get_location['title_'.$lang]?>
					</div>
					<div class="address-c">
						<div class="name-add">
						<?php echo $get_location['detail_'.$lang]?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="location">
					<div class="icon-l">
						<i class="fa fa-phone fa-3x" aria-hidden="true" style="color: #000"></i>
					</div>
					<div class="text-l">
						<?php echo $get_phone['title_'.$lang]?>
					</div>
					<div class="address-c">
						<div class="name-add">
						<?php echo $get_phone['detail_'.$lang]?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="location">
					<div class="icon-l">
						<i class="fa fa-clock-o fa-3x" aria-hidden="true" style="color: #000"></i>
					</div>
					<div class="text-l">
						<?php echo $get_time['title_'.$lang]?>
					</div>
					<div class="address-c">
						<div class="name-add">
						<?php echo $get_time['detail_'.$lang]?>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="info">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="textinfo">
					<div class="texttop">
						Leave us your info
					</div>
					<div class="textbottom">
						and we will get back to you.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="info">
	<div class="container">
		<form action="" method="post" class="form-contact">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input class="form-control form-group" type="text" name="name" placeholder="Full Name :">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<input class="form-control form-group" type="email" name="email" placeholder="E-mail :">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<input class="form-control form-group" type="text" name="tel" placeholder="Telephone :">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<input class="form-control form-group" type="text" name="title" placeholder="Subject :">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<textarea class="form-control form-group" name="msg" rows="5" placeholder="Message :"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 form-group">
					<?php echo $captcha['image']?>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<input class="form-control form-group" type="text" name="capt" >
				</div>
			</div>
			<center>
				<input type="submit" class="btn-submit" value="Submit"/>
			</center>
			
		</form>
	</div>
</div>	