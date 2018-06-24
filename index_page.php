<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
	<head>
		<?php 
		$this->load->view('web/include/meta');
		$this->load->view('web/include/config');
		 ?>
	</head>
	<body>
		<?php 
		$this->load->view('analyticstracking');
		$this->load->view(theme().'include/header');
		$this->load->view(theme().'plugin/slide/slide');
		$this->load->view($content_view);
		$this->load->view(theme().'include/footer');
		?>
	</body>
</html>

<?php $this->load->view(theme().'include/config_footer'); ?>