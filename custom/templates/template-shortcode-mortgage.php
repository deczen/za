<?php
global $requests;

$home_price=!empty($requests['home_price'])?$requests['home_price']:1000000;
$down_payment_percentage=!empty($requests['down_payment_percentage'])?$requests['down_payment_percentage']:20;
$interest_rate_percentage=!empty($requests['interest_rate_percentage'])?$requests['interest_rate_percentage']:4.5;
$tax_percentage=!empty($requests['tax_percentage'])?$requests['tax_percentage']:1.3;
$loan_type=!empty($requests['loan_type'])?$requests['loan_type']:1;

?>
<div id="zpa-main-container" class="zpa-container " style="display: inline;">

	<div class="zpa-listing-detail">
		<div id="zipperagent-content">
			<article class="listing-detail listing-wrapper js-listing-detail">
				
				<div class="">
					<section class="mt-15 listing-content">
						<div class="mortgage-calculator grid grid--gutters">
						   <div class="cell cell-xs-12 cell-lg-12">
							  <div class="zy-widget zy-panel uk-panel uk-panel-box overflow-show">
								 <h3 class="zy-listing__headline">Monthly Payment Calculator</h3>
								 <div class="zy-widget jsx-mortgage-calc-form">
									<form data-reactroot="">
									   <div class="grid grid--gutters grid-xs--full grid-md--halves">
										  <div class="cell">
											 <div class="grid grid--gutters grid-xs--full">
												<div class="cell">
												   <div>
													  <label for="MobileMortgageCalcForm-listPrice">
														 <!-- react-text: 8 -->Home Price<!-- /react-text --><!-- react-text: 9 -->&nbsp;<!-- /react-text -->
													  </label>
													  <div class="form__icon">
														 <svg viewBox="0 0 24 24" class="sc-bZQynM fLbDvk" width="20">
															<path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"></path>
														 </svg>
														 <input type="text" id="MobileMortgageCalcForm-listPrice" class="at-price-txt fieldchange" value="<?php echo $home_price; ?>" name="price">
													  </div>
												   </div>
												</div>
												<div class="cell cell-xs-8">
												   <div>
													  <label for="MobileMortgageCalcForm-downPayment">
														 <!-- react-text: 17 -->Down Payment<!-- /react-text --><!-- react-text: 18 -->&nbsp;<!-- /react-text -->
													  </label>
													  <div class="form__icon">
														 <svg viewBox="0 0 24 24" class="sc-bZQynM fLbDvk" width="20">
															<path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"></path>
														 </svg>
														 <input type="text" id="MobileMortgageCalcForm-downPayment" class="at-downPayment-txt fieldchange" value="" name="downPayment">
													  </div>
												   </div>
												</div>
												<div class="cell cell-xs-4">
												   <div>
													  <label for="MobileMortgageCalcForm-percentDown">
														 <!-- react-text: 26 -->%<!-- /react-text --><!-- react-text: 27 -->&nbsp;<!-- /react-text -->
													  </label>
													  <div class="form__icon form__icon--flip">
														 <svg viewBox="0 0 24 24" class="sc-bZQynM FEJtT" width="15">
															<path d="M7.17,10.5a4.12,4.12,0,0,0,3.94-4.28A4.14,4.14,0,0,0,7.17,1.94,4.12,4.12,0,0,0,3.23,6.22,4.11,4.11,0,0,0,7.17,10.5Zm0-6.92A2.54,2.54,0,0,1,9.52,6.24,2.52,2.52,0,0,1,7.17,8.91,2.52,2.52,0,0,1,4.82,6.24,2.52,2.52,0,0,1,7.17,3.57Zm9.66,9.93a4.12,4.12,0,0,0-3.94,4.28,4.12,4.12,0,0,0,3.94,4.28,4.12,4.12,0,0,0,3.94-4.28A4.11,4.11,0,0,0,16.83,13.5Zm0,6.92a2.54,2.54,0,0,1-2.35-2.67,2.51,2.51,0,0,1,2.35-2.67,2.52,2.52,0,0,1,2.35,2.67A2.51,2.51,0,0,1,16.83,20.43ZM17.82,2,3.21,22h3L20.79,2Z"></path>
														 </svg>
														 <input type="text" id="MobileMortgageCalcForm-percentDown" class="at-percentDown-txt fieldchange" value="<?php echo $down_payment_percentage; ?>" aria-label="Down Payment Percentage" name="percentDown" maxlength="5">
													  </div>
												   </div>
												</div>
												<div class="cell">
												   <div>
													  <label for="MobileMortgageCalcForm-loanType">
														 <!-- react-text: 35 -->Loan Type<!-- /react-text --><!-- react-text: 36 -->&nbsp;<!-- /react-text -->
													  </label>
													  <select id="MobileMortgageCalcForm-loanType" class="at-loanType-sel loantype" name="loanType">
														 <option <?php selected($loan_type, "1"); ?> value="30">30 Year Fixed</option>
														 <option <?php selected($loan_type, "2"); ?> value="15">15 Year Fixed</option>
														 <option <?php selected($loan_type, "3"); ?> value="5">5/1 ARM</option>
													  </select>
												   </div>
												</div>
												<div class="cell">
												   <div>
													  <label for="MobileMortgageCalcForm-interestRate">
														 <!-- react-text: 44 -->Interest Rate - %<!-- /react-text --><!-- react-text: 45 -->&nbsp;<!-- /react-text -->
													  </label>
													  <div class="form__icon form__icon--flip">
														 <svg viewBox="0 0 24 24" class="sc-bZQynM FEJtT" width="15">
															<path d="M7.17,10.5a4.12,4.12,0,0,0,3.94-4.28A4.14,4.14,0,0,0,7.17,1.94,4.12,4.12,0,0,0,3.23,6.22,4.11,4.11,0,0,0,7.17,10.5Zm0-6.92A2.54,2.54,0,0,1,9.52,6.24,2.52,2.52,0,0,1,7.17,8.91,2.52,2.52,0,0,1,4.82,6.24,2.52,2.52,0,0,1,7.17,3.57Zm9.66,9.93a4.12,4.12,0,0,0-3.94,4.28,4.12,4.12,0,0,0,3.94,4.28,4.12,4.12,0,0,0,3.94-4.28A4.11,4.11,0,0,0,16.83,13.5Zm0,6.92a2.54,2.54,0,0,1-2.35-2.67,2.51,2.51,0,0,1,2.35-2.67,2.52,2.52,0,0,1,2.35,2.67A2.51,2.51,0,0,1,16.83,20.43ZM17.82,2,3.21,22h3L20.79,2Z"></path>
														 </svg>
														 <input type="text" id="MobileMortgageCalcForm-interestRate" class="at-interest-txt fieldchange" value="<?php echo $interest_rate_percentage; ?>" name="interestRate" maxlength="5">
													  </div>
												   </div>
												   <?php /* <a class="uk-text-small">Contact our Lending Specialist</a> */ ?>
												</div>
												<div class="cell">
												   <div class="grid grid--gutters">
													  <div class="cell cell-xs-8">
														 <div>
															<label for="MobileMortgageCalcForm-taxAndInsAmount">
															   <!-- react-text: 56 -->Est. Tax &amp; Insurance/mo.<!-- /react-text --><!-- react-text: 57 -->&nbsp;<!-- /react-text -->
															</label>
															<div class="form__icon">
															   <svg viewBox="0 0 24 24" class="sc-bZQynM fLbDvk" width="20">
																  <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"></path>
															   </svg>
															   <input type="text" id="MobileMortgageCalcForm-taxAndInsAmount" class="at-tax-txt" value="" name="taxAndInsAmount">
															</div>
														 </div>
													  </div>
													  <div class="cell cell-xs-4">
														 <div>
															<label for="MobileMortgageCalcForm-taxAndInsPercent">
															   <!-- react-text: 65 -->%<!-- /react-text --><!-- react-text: 66 -->&nbsp;<!-- /react-text -->
															</label>
															<div class="form__icon form__icon--flip">
															   <svg viewBox="0 0 24 24" class="sc-bZQynM FEJtT" width="15">
																  <path d="M7.17,10.5a4.12,4.12,0,0,0,3.94-4.28A4.14,4.14,0,0,0,7.17,1.94,4.12,4.12,0,0,0,3.23,6.22,4.11,4.11,0,0,0,7.17,10.5Zm0-6.92A2.54,2.54,0,0,1,9.52,6.24,2.52,2.52,0,0,1,7.17,8.91,2.52,2.52,0,0,1,4.82,6.24,2.52,2.52,0,0,1,7.17,3.57Zm9.66,9.93a4.12,4.12,0,0,0-3.94,4.28,4.12,4.12,0,0,0,3.94,4.28,4.12,4.12,0,0,0,3.94-4.28A4.11,4.11,0,0,0,16.83,13.5Zm0,6.92a2.54,2.54,0,0,1-2.35-2.67,2.51,2.51,0,0,1,2.35-2.67,2.52,2.52,0,0,1,2.35,2.67A2.51,2.51,0,0,1,16.83,20.43ZM17.82,2,3.21,22h3L20.79,2Z"></path>
															   </svg>
															   <input type="text" id="MobileMortgageCalcForm-taxAndInsPercent" class="at-tax-percent fieldchange" value="<?php echo $tax_percentage; ?>" name="taxAndInsPercent" maxlength="5">
															</div>
														 </div>
													  </div>
												   </div>
												</div>
											 </div>
										  </div>
										  <div class="cell">
											 <div class="uk-panel uk-panel-box height-1-1">
												<h4>Estimated Monthly Payment</h4>
												<div>
												   <div class="grid mt-15 grid--gutters grid-xs--halves">
													  <div class="cell">Principal &amp; Interest:</div>
													  <div class="cell text-xs--right"><span class="at-interest-val sc-kAzzGY uk-text-semibold iBTdgX">...</span></div>
													  <div class="cell">Taxes &amp; Insurance:</div>
													  <div class="cell text-xs--right"><span class="at-tax-val sc-kAzzGY uk-text-semibold iBTdgX">...</span></div>
												   </div>
												   <hr>
												   <div class="grid grid--center grid-xs--halves">
													  <div class="cell cell-xs-8"><span class="h4 sc-kAzzGY iBTdgX">Est. Monthly Payment</span></div>
													  <div class="cell text-xs--right cell-xs-4"><span class="h2 green at-payment-val sc-kAzzGY iBTdgX">...</span></div>
													  <div class="cell"><span class="sc-kAzzGY uk-text-muted iBTdgX">Loan Amount:</span></div>
													  <div class="cell text-xs--right"><span class="sc-kAzzGY uk-text-muted iBTdgX loan-ammount">...</span></div>
												   </div>
												   <?php /*
												   <div class="mt-15 text-xs--center">
													  <a href="/finance" class="js-pre-approval">
														 <!-- react-text: 94 -->Wondering what the real terms of your loan could be? Click here for a <!-- /react-text --><span class="sc-kAzzGY uk-text-bold iBTdgX">FREE</span><!-- react-text: 96 --> no-obligation rate quote.<!-- /react-text -->
													  </a>
												   </div> */ ?>
												</div>
											 </div>
										  </div>
									   </div>
									</form>
								 </div>
							  </div>
						   </div>
						</div>
						
					</section>
				</div>
			</article>
		</div>
	</div>
</div>