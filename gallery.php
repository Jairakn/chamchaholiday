<div class="gallery-tour">
	<div class="container">
		<div class="row">
			<div class="gallery">
			<?php $get_gallery = $this->useful_model->get('tb_gallery','priority asc')->result_array();
			foreach ($get_gallery as $key => $value) {?>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 galleryhover" data-fancybox="gallery<?php echo $value['gallery_id']?>" href="<?php echo base_url('assets/uploads/gallery/'.$value['img']); ?>">
					<div class="gallery-1">
						<img src="<?php echo base_url('assets/uploads/gallery/'.$value['img']); ?>">
						<div class="gallery-info">
							<span class="glyphicons glyphicons-fit-image-to-frame"></span><br>
							<p>View Full Screen</p>
						</div>
					</div>
					<div class="footer-pic">
						<div class="gallery-text">
							<?php echo $value['title_'.$lang]?> <br>
							<div class="gallery-text1">
								<?php echo $value['short_detail_'.$lang]?>
							</div>
						</div>
					</div>
					<div style="display:none;">
						<?php $get_gallery_img = $this->useful_model->get_where('tb_picture','gallery_id',$value['gallery_id'])->result_array();
						foreach ($get_gallery_img as $key => $get_gallery_img) {?>
							<img data-fancybox="gallery<?php echo $value['gallery_id']?>" href="<?php echo base_url('assets/uploads/picture/'.$get_gallery_img['picture_img']); ?>"  src="<?php echo base_url('assets/uploads/picture/'.$get_gallery_img['picture_img']); ?>" />
						<?php }?>
					</div>				
				</div>	
			<?php } ?>
			</div>
		</div>
	</div>
</div>
