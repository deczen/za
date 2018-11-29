<?php

$contactIds=get_contact_id();
$searchId = isset($_GET['searchId'])?$_GET['searchId']:'';

if(zp_using_criteria()){	
	$criteriaBase64 = isset($_GET['criteria'])?$_GET['criteria']:'';
}else{
	$criteriaBase64 = $_SESSION['criteriaBase64'];	
}
$saved_crit = !empty($criteriaBase64)?unserialize(base64_decode($criteriaBase64)):array();
?>
<div class="za-container">
	<div id="zpaScheduleShowing" class="modal in" aria-hidden="false" style="display: none;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="modal-title">Request a Showing&nbsp;</div>
					<button type="button" class="close" data-dismiss="modal"> &#215; </button>
				</div>
				<div class="modal-body">
					<div class="zpa-schedule-replace" data-zpa-remote-submit="true" data-zpa-remote-submit-bound="true">
						<?php /*
						<div class="row mt-10 hidden-xs">
							<div class="col-xs-12"> <strong> </strong> </div>
						</div>
						*/ ?>
						<div class="panel panel-default">
							<div class="panel-body">
								<form id="zpa-schedule-showing-request-form" class="form-inline" data-zpa-event="schedule-showing-form-submit" action="" method="GET" data-zpa-event-bound="true">
									<input name="action" value="schedule_show" type="hidden">
									<input name="listingId" value="<?php echo $single_property->id; ?>" type="hidden">
									<input name="contactId" value="<?php echo implode(',',$contactIds) ?>" type="hidden">
									<input name="searchId" value="<?php echo $searchId ?>" type="hidden">
									<div class="row mt-10">
										<?php /* <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> */ ?>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<div class="row">
													<div class="col-xs-12">
														<?php
															$dt =  date('M d');
															$dt1 = date('M d', strtotime(' +1 day'));
															$dt2 = date('l, M d', strtotime(' +2 day'));
															$dt3 = date('l, M d', strtotime(' +3 day'));
															$dt4 = date('l, M d', strtotime(' +4 day'));
															
															$vdt = date('M d, Y');
															$vdt1 = date('M d, Y', strtotime(' +1 day'));
															$vdt2 = date('M d, Y', strtotime(' +2 day'));
															$vdt3 = date('M d, Y', strtotime(' +3 day'));
															$vdt4 = date('M d, Y', strtotime(' +4 day'));
															
														?>
														<select class="sch_date" name="prefDate">
															<option value="<?php echo $vdt; ?>">Today, <?php echo $dt; ?></option>
															<option value="<?php echo $vdt1; ?>">Tomorrow, <?php echo $dt1; ?></option>
															<option value="<?php echo $vdt2; ?>"><?php echo $dt2; ?></option>
															<option value="<?php echo $vdt3; ?>"><?php echo $dt3; ?></option>
															<option value="<?php echo $vdt4; ?>"><?php echo $dt4; ?></option>
														</select>
														<br>
													</div>
													<div class="col-xs-12">
														<div class="input-group">
															<div id="radioBtn" class="btn-group">
																<a class="btn btn-primary btn-sm active" data-toggle="slot" data-title="MRNG">Morning</a>
																<a class="btn btn-primary btn-sm notActive" data-toggle="slot" data-title="AFTR">Afternoon</a>
																<a class="btn btn-primary btn-sm notActive" data-toggle="slot" data-title="EVNG">Evening</a>
															</div>
															<input type="hidden" name="slot" id="slot" value="MRNG">
														</div>
													</div>
													<div class="col-xs-12">
														<a href="javascript:void(0)" onclick="jQuery('#sch_msg').slideDown();jQuery(this).hide();" class="add_sch_msg"> + ADD A MESSAGE </a>
														<textarea id="sch_msg" name="message" style="display: none;" rows="5" placeholder="Add your message."></textarea>
													</div>
												</div>
											</div>
										</div>
										<?php /*
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<label for="zpa_schedshow_pref_date"> Preferred Time and Date* </label>
												<div class="row">
													<div class="col-xs-6">
														<select id="zpa_schedshow_pref_time" name="prefTime" class="form-control" required>
															<option value="8:00 AM">8:00 AM</option>
															<option value="8:30 AM">8:30 AM</option>
															<option value="9:00 AM">9:00 AM</option>
															<option value="9:30 AM">9:30 AM</option>
															<option value="10:00 AM">10:00 AM</option>
															<option value="10:30 AM">10:30 AM</option>
															<option value="11:00 AM">11:00 AM</option>
															<option value="11:30 AM">11:30 AM</option>
															<option value="12:00 PM">12:00 PM</option>
															<option value="12:30 PM">12:30 PM</option>
															<option value="1:00 PM">1:00 PM</option>
															<option value="1:30 PM">1:30 PM</option>
															<option value="2:00 PM">2:00 PM</option>
															<option value="2:30 PM">2:30 PM</option>
															<option value="3:00 PM">3:00 PM</option>
															<option value="3:30 PM">3:30 PM</option>
															<option value="4:00 PM">4:00 PM</option>
															<option value="4:30 PM">4:30 PM</option>
															<option value="5:00 PM">5:00 PM</option>
															<option value="5:30 PM">5:30 PM</option>
															<option value="6:00 PM">6:00 PM</option>
															<option value="6:30 PM">6:30 PM</option>
															<option value="7:00 PM">7:00 PM</option>
															<option value="7:30 PM">7:30 PM</option>
															<option value="8:00 PM">8:00 PM</option>
															<option value="8:30 PM">8:30 PM</option>
														</select>
													</div>
													<div class="col-xs-6">
														<input id="zpa_schedshow_pref_date" name="prefDate" class="date form-control default-cursor datepicker" required="required" placeholder="select date" readonly="readonly" type="text" value="">
													</div>
												</div>
											</div>
										</div>
										*/ ?>
										<?php /*
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="zpa_select_agent"> Select agent* </label>
												<div class="row">
													<div class="col-xs-12">
														<select name="agent" class="form-control" required>
															<option value="">Select</option>
															<?php
															$agents = getAgentList();
															foreach( $agents as $agent ){
																echo "<option value='{$agent->login}'>{$agent->userName}</option>"."/r/n";
															}
															?>
														</select>
													</div>
												</div>
											</div>
										</div> */ ?>
									</div>
									<?php /*
									<div class="row mt-10">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="zpa_inforeq_firstname"> First Name* </label>
												<input id="zpa_inforeq_firstname" name="firstName" class="form-control" required="required" type="text" value="Decz"> </div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="zpa_inforeq_lastName"> Last Name* </label>
												<input id="zpa_inforeq_lastName" name="lastName" class="form-control" required="required" type="text" value="DK"> </div>
										</div>
									</div>
									<div class="row mt-10">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="zpa_inforeq_email"> Email* </label>
												<input id="zpa_inforeq_email" name="newEmail" type="email" class="form-control" required="required" value="deczen@gmail.com"> </div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="zpa_inforeq_phone"> Phone * </label>
												<input id="zpa_inforeq_phone" name="phone" type="tel" class="form-control" value="852481999001" autocomplete="off"> </div>
										</div>
									</div>
									<div class="row mt-10">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="zpa_schedshow_pref_date"> Preferred Time and Date* </label>
												<div class="row">
													<div class="col-xs-6">
														<select id="zpa_schedshow_pref_time" name="prefTime" class="form-control">
															<option value="8:00 AM">8:00 AM</option>
															<option value="8:30 AM">8:30 AM</option>
															<option value="9:00 AM">9:00 AM</option>
															<option value="9:30 AM">9:30 AM</option>
															<option value="10:00 AM">10:00 AM</option>
															<option value="10:30 AM">10:30 AM</option>
															<option value="11:00 AM">11:00 AM</option>
															<option value="11:30 AM">11:30 AM</option>
															<option value="12:00 PM">12:00 PM</option>
															<option value="12:30 PM">12:30 PM</option>
															<option value="1:00 PM">1:00 PM</option>
															<option value="1:30 PM">1:30 PM</option>
															<option value="2:00 PM">2:00 PM</option>
															<option value="2:30 PM">2:30 PM</option>
															<option value="3:00 PM">3:00 PM</option>
															<option value="3:30 PM">3:30 PM</option>
															<option value="4:00 PM">4:00 PM</option>
															<option value="4:30 PM">4:30 PM</option>
															<option value="5:00 PM">5:00 PM</option>
															<option value="5:30 PM">5:30 PM</option>
															<option value="6:00 PM">6:00 PM</option>
															<option value="6:30 PM">6:30 PM</option>
															<option value="7:00 PM">7:00 PM</option>
															<option value="7:30 PM">7:30 PM</option>
															<option value="8:00 PM">8:00 PM</option>
															<option value="8:30 PM">8:30 PM</option>
														</select>
													</div>
													<div class="col-xs-6">
														<input id="zpa_schedshow_pref_date" name="prefDate" class="date form-control default-cursor hasDatepicker" required="required" readonly="readonly" type="text" value=""> </div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group">
												<label for="zpa_schedshow_alt_date"> Alternate Time and Date* </label>
												<div class="row">
													<div class="col-xs-6">
														<select id="zpa_schedshow_alt_time" name="altTime" class="form-control">
															<option value="8:00 AM">8:00 AM</option>
															<option value="8:30 AM">8:30 AM</option>
															<option value="9:00 AM">9:00 AM</option>
															<option value="9:30 AM">9:30 AM</option>
															<option value="10:00 AM">10:00 AM</option>
															<option value="10:30 AM">10:30 AM</option>
															<option value="11:00 AM">11:00 AM</option>
															<option value="11:30 AM">11:30 AM</option>
															<option value="12:00 PM">12:00 PM</option>
															<option value="12:30 PM">12:30 PM</option>
															<option value="1:00 PM">1:00 PM</option>
															<option value="1:30 PM">1:30 PM</option>
															<option value="2:00 PM">2:00 PM</option>
															<option value="2:30 PM">2:30 PM</option>
															<option value="3:00 PM">3:00 PM</option>
															<option value="3:30 PM">3:30 PM</option>
															<option value="4:00 PM">4:00 PM</option>
															<option value="4:30 PM">4:30 PM</option>
															<option value="5:00 PM">5:00 PM</option>
															<option value="5:30 PM">5:30 PM</option>
															<option value="6:00 PM">6:00 PM</option>
															<option value="6:30 PM">6:30 PM</option>
															<option value="7:00 PM">7:00 PM</option>
															<option value="7:30 PM">7:30 PM</option>
															<option value="8:00 PM">8:00 PM</option>
															<option value="8:30 PM">8:30 PM</option>
														</select>
													</div>
													<div class="col-xs-6">
														<input id="zpa_schedshow_alt_date" name="altDate" class="date form-control default-cursor hasDatepicker" required="required" readonly="readonly" type="text" value=""> </div>
												</div>
											</div>
										</div>
									</div>
									<div class="row mt-10">
										<div class="col-xs-12">
											<label for="zpa_schedshow_comments"> Message </label>
											<textarea id="zpa_schedshow_comments" name="message" style="height:100px; width:100%;" class="form-control" rows="5"> </textarea>
										</div>
									</div>
									<div class="row mt-10">
										<div class="col-xs-12 zpa-modal-form-disclaimer"> *Your name, phone number, and email address are required so that we may contact you to schedule an appointment.
											<br>
											<br>By submitting this form with your telephone number you are consenting for Keller William Realty Chestnut Hill and authorized representatives to contact you even if your name is on the Federal "Do-not-call List." </div>
									</div> */ ?>
									<input type="hidden" name="agent" value="<?php echo get_current_user_assigned_agent(); ?>">
									<button type="submit" class="btn btn-primary mt-10 zpa-schedule-showing-submit">Send Request</button>
									<div> </div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php /*
				<div class="modal-footer">
					<button class="btn btn-link" data-dismiss="modal"> Close </button>
				</div> */ ?>
			</div>
		</div>
	</div>
</div>
<script>
	
	jQuery(document).ready(function($) {
		$('#radioBtn a').on('click', function(){
			var sel = $(this).data('title');
			var tog = $(this).data('toggle');
			$('#'+tog).prop('value', sel);
			
			$('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
			$('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
		});
	});

	<?php /*
	jQuery(document).ready(function(){
		// jQuery('#zpa_schedshow_pref_date').datepicker({
		// jQuery('.datepicker').datepicker({
			// format: 'mm-dd-yyyy',
			// startDate: '-3d'
		// });
	}); */ ?>
	
	jQuery(document).ready(function($) {
		var $datepicker = $('.datepicker').pikaday({
			format: 'MMM D, YYYY',
			onSelect: function(date, format) {
				const day = date.getDate();
				const month = date.getMonth() + 1;
				const year = date.getFullYear();
				var date= `${year}-${month}-${day}`;
				$('#zpa-max-date-homes-val').val(date);
			}
		});
		// chain a few methods for the first datepicker, jQuery style!
		// $datepicker.pikaday('show').pikaday('nextMonth');
	});	
	
	jQuery('body').on('click', '.schedule-showing-btn:not(.needLogin)', function(e){
		jQuery('#zpaScheduleShowing').modal('show');
	});
	
	jQuery( '#zpa-schedule-showing-request-form' ).on( 'submit', function(){
		var data = jQuery(this).serializeArray().reduce(function(a, x) { a[x.name] = x.value; return a; }, {});
		// var data = objectifyForm( formArray );
		
		var crit={
			<?php				
			foreach( $saved_crit as $key=>$val ){
				echo "'{$key}': '{$val}',"."\r\n";
			}
			?>
		};
		data['crit']=crit;
		// console.log(data);
		jQuery.ajax({
			type: 'POST',
			dataType : 'json',
			url: zipperagent.ajaxurl,
			data: data,
			success: function( response ) {    
				// console.log(response);
				if( response['result'] ){
					jQuery('#zpaScheduleShowing .modal-header .modal-title').html('<p>Thank You</p>');
					jQuery('#zpaScheduleShowing .modal-body .zpa-schedule-replace').html('<p>Your showing request has been submitted. Someone will follow-up with you as soon as possible for scheduling.</p>');
				}else{
					alert( 'Submit failed!' );
				}
			}
		});
		
		return false;
	});
	
	function objectifyForm(formArray) {//serialize data function

	  var returnArray = {};
	  for (var i = 0; i < formArray.length; i++){
		returnArray[formArray[i]['name']] = formArray[i]['value'];
	  }
	  return returnArray;
	}
</script>