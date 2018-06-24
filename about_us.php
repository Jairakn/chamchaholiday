<div class="bg-con">
	<div class="container">	
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="detail-ab">
				<?php echo $page['short_detail_'.$lang]?>
				</div>	
				<div class="sub-detail"></div>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<div class="detail-right">
					<?php echo $page['detail_'.$lang]?>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="detail-ab2">
	<div class="container">
		<?php $list = $this->useful_model->get_where_custom_order('tb_page','menu_id',314,'priority asc')->result_array();
		foreach ($list as $key => $value) {?>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="icon-as">
				<div class="detail-ab1-col1">
					<div class="icon-as1">
						<?php echo $value['icon'];?>
					</div>
					<div class="detail-icon">
						<?php echo $value['title_'.$lang]?>
					</div>
					<div class="detail-icon2">
						<?php echo $value['detail_'.$lang]?>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>