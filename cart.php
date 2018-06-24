<script>
function clear_cart() {
var result = confirm("<?php echo lang('shoppingcart_deletecart_confirm');?>");
if(result) {
window.location = "<?php echo base_url().$lang; ?>/cart/remove/all";
}else{
return false;
}
}
function remove_item(link_rm) {
var result = confirm("<?php echo lang('shoppingcart_deleteitem_confirm');?>");
if(result) {
window.location = link_rm;
}else{
return false;
}
}
</script>
<?php
    if(isset($_POST["shipping"])){
        $ship_price=$_POST["shipping"];
    }else{
        $ship_price=0;
    }
?>
<script>
$(document).ready(function(){
    $(".hide-ex,.car-renttext").click(function(){
        $(".hide-form").slideToggle();
    });
});
</script>

<div class="booking">
	<div class="container">
		<div class="bg-form">
			
					<div class="cart-form">
						YOUR CART
					</div>
	<?php if ($cart = $this->cart->contents()){ ?>
		<form action="<?php echo base_url($lang.'/cart/update_cart')?>" method="post" style="margin:0;">
<?php
                //echo form_open($lang.'/cart/update_cart');
                $grand_total = 0; $i = 1; $z = 0;
              $i=0;  foreach ($cart as $item){
                echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
                echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
                echo form_hidden('cart['. $item['id'] .'][name]', $item['name']);
                echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
                echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
                
               $tour=$this->useful_model->get_where_custom('tb_tours_package','id',$item['id'])->row_array();
                
                ?>
				<div class="cart-list form-group">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
							<div class="cart-img">
								<img src="<?php echo base_url('assets/uploads/tour_listing/'.$tour['picture'])?>">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
							<div class="cart-detail">
								<button type="button" class="fa fa-times cart-close" title="Remove" onclick="remove_item('<?php echo base_url('main/page/remove/'.$item['rowid']);?>')" ></button>
								<!-- <button type="submit" class="fa fa-pencil-square-o cart-update"  title="Update"></button>&nbsp;&nbsp;-->
								<div class="cart-title">
									<?php echo $tour['title_'.$lang]?>
								</div>
								<?php echo $tour['title_'.$lang]?> Ticket<br>
								<?php echo $item['date']?>    -  <?php echo $item['starttime']?> AM<br>
								<?php echo $item['adult']?> Adult, <?php echo $item['children']?> Children
								<div class="cart-price"><?php echo number_format($item['price'],0)?> THB</div>
							</div>
						
						</div>
					</div>
				</div>
			
				<?php $i++;}?>
					</form>		
					</div>
					
				<div class="row form-group">
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-8 col-lg-offset-8">
						<div class="cart-total">
							<div class="cart-left">Tour Package</div><div class="cart-right">2,800.00 THB</div>
						</div>
						<div class="cart-total">
							<div class="cart-left">Car Rental</div><div class="cart-right">1,800.00 THB</div>
						</div>
						<div class="cart-total-all">
							<div class="cart-left">Total</div><div class="cart-right">4,600.00 THB</div>
						</div>
						<div class="cart-total">
							<div class="cart-right"><input class="btn-submit" type="submit" value="CHECK OUT"/></div>
						</div>
					</div>
				</div>	
<?php }?>
			</div>
		</div>
	</div>




