<?php
	 include 'db.php';
	 session_start();
    $login_query="select * from tbl_games order by id desc limit 8";
	$data_gst = mysqli_query($con1,$login_query) or die(mysqli_error());

	$login_query="select * from tbl_user_challenges where status=1 order by id desc limit 5";
	$data_gst1 = mysqli_query($con1,$login_query) or die(mysqli_error());
 	include "header.php"; 
 ?>

	<section class="challenge_name" style="background-image: url('assets/assets/images/cart.jpg');">
			
	</section>
	<section class="breadcrumb-area raffles">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb-list">
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Cart</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="raffles-section checkout">
		<div class="container">
			<div class="row">
                    <div class="col-lg-8">
                        <div class="head-area top">
                            <h4>Billing Info</h4>
                            <p>Please enter your billing info</p>
                        </div>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone Number</label>
                                    <input type="number" class="form-control" id="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="town">Town / City</label>
                                    <input type="text" class="form-control" id="town" placeholder="Town Or City">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="state">State / Country</label>
                                    <input type="text" class="form-control" id="state" placeholder="Choose a state or Country">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="zip">ZIP/Postal code</label>
                                    <input type="number" class="form-control" id="zip" placeholder="Postal code or ZIP">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group checkbox col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Ship to a different address?</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="payment-container billing">
                            <div class="head-area">
                                <h4>Billing method</h4>
                                <p>Please enter your payment method</p>
                            </div>
                            <div class="billing-method">
                                <div class="single-area">
                                    <div class="form-check">
                                        <div class="radio-area">
                                            <input type="radio" id="one" name="optradio" class="form-check-input" checked="">
                                            <span class="checkmark fedex"></span>
                                        </div>
                                        <label for="one" class="d-flex justify-content-between align-items-center">
                                            <span class="head">FedEx</span>
                                            <span class="mid">
                                                <span class="currency">+32 USD</span>
                                                <span>Additional price</span>
                                            </span>
                                            <img src="assets/images/fedex.png" alt="image">
                                        </label>
                                    </div>
                                </div>
                                <div class="single-area">
                                    <div class="form-check">
                                        <div class="radio-area">
                                            <input type="radio" id="two" name="optradio" class="form-check-input">
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="two" class="d-flex justify-content-between align-items-center">
                                            <span class="head">DHL</span>
                                            <span class="mid">
                                                <span class="currency">+15 USD</span>
                                                <span>Additional price</span>
                                            </span>
                                            <img src="assets/images/dhl.png" alt="image">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="payment-container">
                            <div class="head-area">
                                <h4>Payment method</h4>
                                <p>Please enter your payment method</p>
                            </div>
                            <div class="billing-method method">
                                <div class="single-area credititem">
                                    <div class="form-check">
                                        <div class="radio-area credit">
                                            <input type="radio" id="credit" name="paymentmethod" class="form-check-input" checked="">
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="credit" class="d-flex justify-content-between align-items-center">
                                            <span class="head">Credit Card</span>
                                            <span class="right-item d-flex">
                                                <img src="assets/images/visa.png" alt="image">
                                                <img src="assets/images/mastercard.png" alt="image">
                                            </span>
                                        </label>
                                    </div>
                                    <form class="creditcard">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="cardnumber">Card Number</label>
                                                <input type="number" class="form-control" id="cardnumber" placeholder="Card Number">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="cardholder">Card Holder</label>
                                                <input type="number" class="form-control" id="cardholder" placeholder="Card Holder">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="date">Expiration date</label>
                                                <input type="date" class="form-control" id="date">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="cvc">CVC</label>
                                                <input type="number" class="form-control" id="cvc" placeholder="CVC">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="single-area">
                                    <div class="form-check">
                                        <div class="radio-area">
                                            <input type="radio" id="paypal" name="paymentmethod" class="form-check-input">
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="paypal" class="d-flex justify-content-between align-items-center">
                                            <span class="head">Paypal</span>
                                            <img src="assets/images/paypal.png" alt="image">
                                        </label>
                                    </div>
                                </div>
                                <div class="single-area">
                                    <div class="form-check">
                                        <div class="radio-area">
                                            <input type="radio" id="bitcoin" name="paymentmethod" class="form-check-input">
                                            <span class="checkmark"></span>
                                        </div>
                                        <label for="bitcoin" class="d-flex justify-content-between align-items-center">
                                            <span class="head">Bitcoin</span>
                                            <img src="assets/images/bitcoin.png" alt="image">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group checkbox col-md-10">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="agreewith">
                                        <label class="custom-control-label" for="agreewith">I agree with our terms and conditions and privacy policy.</label>
                                    </div>
                                </div>
                                <a href="#" class="cmn-btn">Complete Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right-sidebar">
                            <div class="top-area">
                                <h5>Order Summary</h5>
                                <p>Price can change depending on shipping
                                    method and taxes of your state.</p>
                            </div>
                            <div class="bottom-side text-center">
                                <ul class="bottom-area">
                                    <li>
                                        <span>Subtotal</span>
                                        <span>€49.90</span>
                                    </li>
                                    <li>
                                        <span class="text-sm">Delivery (Standard)</span>
                                        <span class="text-sm">€1.80</span>
                                    </li>
                                    <li>
                                        <span class="text-sm">Taxes &amp; Fees</span>
                                        <span class="text-sm">€7.30</span>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <span>Total Order</span>
                                        <h4>€59.00</h4>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
		</div>
	</section>
<?php include "footer.php"; ?>	