@extends('mms')
@section('contant')


<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
			<?php
			  $contents=Cart::getContent();
			?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="image">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							
						</tr>
					</thead>



					         <!--card takes value show-->



					<tbody>
					<?php foreach($contents as $v_contants) {?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($v_contants->attributes->image)}}" height="80px" width="80px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{($v_contants->name)}}</a></h4>
							
							</td>
							<td class="cart_price">
								<p>{{($v_contants->price)}}</p>
							</td>
							<td class="cart_quantity">
							<div class="cart_quantity_button">
									
									<input class="cart_quantity_input" type="text" name="quantity" value="{{($v_contants->quantity)}}" autocomplete="off" size="2">			
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_contants->price*$v_contants->quantity}}</p>
							</td>
							
						</tr>

					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section>





    <section id="do_action">
	<div class="container">
		
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Payment method</li>
			</ol>
		</div>
		<div class="paymentCont col-sm-8">
					<div class="headingWrap">
							<h3 class="headingTop text-center">Select Your Payment Method</h3>	
							<p class="text-center">Created with bootsrap button and using radio button</p>
					</div>
					<!-- <div class="paymentWrap">
						<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
				            <label class="btn paymentMethod active">
				            	<div class="method visa"></div>
				                <input type="radio" name="options" > 
				            </label>
				            <label class="btn paymentMethod">
				            	<div class="method master-card"></div>
				                <input type="radio" name="options"> 
				            </label>
				            <label class="btn paymentMethod">
			            		<div class="method amex"></div>
				                <input type="radio" name="options">
				            </label>
				         
				        </div>        
					</div>
					<div class="footerNavWrap clearfix">
						<div class="btn btn-success pull-left btn-fyi"><span class="glyphicon glyphicon-chevron-left"></span> Done</div>
					</div> -->
				</div>
	</div>
</section><!--/#do_action-->



@endsection