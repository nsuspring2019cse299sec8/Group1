@extends('mms')
@section('contant')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			
			<div class="register-req">
				<p>Please Fillup This Form *******************</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form action="" method="post">
								@csrf
									<input type="text" name="shipping_email" placeholder="Email*" />
									<input type="text" name="shipping_first_name" placeholder="First Name *" />
									<input type="text" name="shipping_last_name" placeholder="Last Name *" />
									<input type="text" name="shipping_address" placeholder="Address  *" />
									<input type="number" name="shipping_phone_number" placeholder="Phone Number *" />
                  <input type="text" name="shipping_city" placeholder="City *" />
                  <button type="submit" name="submit" class="btn btn-warning">Submit</button>
								</form>
							</div>
						</div>
					</div>
								
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

		
				
			</div>
			
	
	</section> <!--/#cart_items-->




@endsection