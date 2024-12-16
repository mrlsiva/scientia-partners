@extends('layouts.sign_up')

@section('title')
	<title>{{ config('app.name')}} | Partners Sign Up</title>
@endsection

@section('body')

	<form class="multisteps-form__form w-75" action="#" id="wizard">
		<div class="form-area position-relative">
			<!-- Basic Details -->
            <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                <div class="wizard-forms">
                    <div class="inner clearfix">
                        <div class="d-flex justify-content-between mb-40">
                           	<div class="wizard-title">
                                <h3>Sign up to FMPG</h3>
                                <p>Enter a basic details</p>
                            </div>
                            <div class="d-flex align-items-center gap-2 ">
                            	<p class="already-acc d-none d-xxl-block d-xl-block">Alerady you have a account?</p>
                            	<a class="sign-in" href="{{route('login')}}">Sign In</a>
                            </div>
                        </div>
                            
                        <div class="wizard-form-field mb-40 d-flex flex-wrap gap-4"> 
                            <div class="wizard-form-input position-relative form-group has-float-label" id="firstName">
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name*">
                                    <label>First Name <span class="text-danger">*</span></label>
                            </div>
                            <div class="wizard-form-input position-relative form-group has-float-label" id="lastName">
								<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name*">
								<label>Last Name<span class="text-danger">*</span></label>
							</div>
                            <div class="wizard-form-input position-relative form-group has-float-label d-flex flex-column full-width" id="email_address">
            					<div>
            						<input type="text" name="email" id="email" class="form-control" placeholder="Email Address*">
									<label>Email Address<span class="text-danger">*</span></label>
            					</div>
            					<div class="form-field-text">( Use a nominative Professional email e.g: Alex@startup.com. Try to avoid pesonal emails such as Alex@gmail.com or generic email such as Info@startup.com )</div>
            				</div>
                            <div class="wizard-form-input position-relative form-group has-float-label" id="linkedLn">
                                <input type="text" name="linkedin" id="linkedin" class="form-control" placeholder="LinkedIn Profile*">
                                <label>LinkedIn Profile <span class="text-danger">*</span></label>
                            </div>
                            <div class="wizard-form-input position-relative form-group has-float-label" id="xHandle">
								<input type="text" name="x_handle" id="x_handle" class="form-control" placeholder="X Handle">
								<label>X Handle</label>
							</div>
                            <div class="wizard-form-input position-relative form-group has-float-label d-flex flex-column full-width" id="userName">
								<div>
									<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Username*">
									<label>Username<span class="text-danger">*</span></label>
								</div>
								<div class="form-field-text">Suggest to provide the name of your Entity/ Project or email</div>
							</div>
                            <div class="wizard-form-input position-relative form-group has-float-label" id="Password">
								<input type="text" name="password" id="password" class="form-control" placeholder="Password*">
								<label>Password<span class="text-danger">*</span></label>
							</div>
                            <div class="wizard-form-input position-relative form-group has-float-label" id="confirmPassword">
								<input type="text" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password*">
								<label>Confirm Password<span class="text-danger">*</span></label>
							</div>
                           <div class="wizard-form-input wizard-note-subject" id="findUs">
								<div class="wizard-form-input select-option-area">
									<select name="find_us" id="find_us">
										<option value="" disabled selected>How did you find us?</option>
										<option value="search_engine">Search Engine (Google, Yahoo etc)
										</option>
										<option value="social_media">Social media feeds (X, LinkedIn, Instagram, FB)
										</option>
										<option value="referral">Friends & Referrals </option>
										<option value="institution">Institution</option>
										<option value="other">Others</option>
									</select>
								</div>
							</div> 
                            <div class="wizard-form-input wizard-form-input full-width d-flex justify-content-end gap-4">
                            	<div class="actions">
                            		<ul>
                            			<li><span class="js-btn-next" title="NEXT">Next <i class="fa fa-arrow-right"></i></span></li>
                            		</ul>
                            	</div>
                            </div>
                        </div>   
                    </div>     
                </div>
            </div>
            <!-- Service -->
            <div class="multisteps-form__panel" data-animation="slideHorz">
            	<div class="wizard-forms">
            		<div class="inner clearfix">
            			<div class="d-flex justify-content-between mb-40">
            				<div class="wizard-title">
            					<h3>Sign up to FMPG</h3>
            					<p>Types of Service</p>
            				</div>
            				<div class="d-flex align-items-center gap-2 ">
            					<p class="already-acc d-none d-xxl-block d-xl-block">Alerady you have a account?</p>
            					<a class="sign-in" href="{{route('login')}}">Sign In</a>
            				</div>
            			</div>
            			<div class="wizard-form-field mb-40 d-flex flex-wrap gap-4">
            				<div class="wizard-form-input wizard-note-subject full-width" id="Service">
								<div class="wizard-form-input select-option-area full-width">
									<select name="service" id="service">
										<option value="" disabled selected>Service?*</option>
										<option value="core_activities">Core Activities
										</option>
										<option value="allied_activities">Allied Activities
										</option>
									</select>
								</div>
							</div>
            				<div class="wizard-form-input position-relative form-group has-float-label full-width select-wizard d-flex flex-column" id="serviceType">
                                <p class="multiselect-p" for="multiSelect">Types of Services Provided*</p>
                                <select class="js-example-basic-multiple" name="service_type[]" id="service_type" multiple="multiple">
                                    
                                  </select>
                            </div>
            				<div class="wizard-form-input position-relative form-group has-float-label">
            					<input type="text" name="name" class="form-control" placeholder="Currency Code">
            					<label>Currency Code <span class="text-danger">*</span></label>
            				</div>
            				<div class="wizard-form-input position-relative form-group has-float-label">
            					<input type="text" name="name" class="form-control" placeholder="Fixed Amount">
            					<label>Fixed Amount <span class="text-danger">*</span></label>
            				</div>
            				<div class="wizard-form-input position-relative form-group has-float-label full-width">
            					<input type="text" name="name" class="form-control" placeholder="Website">
            					<label>Website  </label>
            				</div>
            				<div class="wizard-day-item">
            					<div class="wizard-checkbox-option">
            						<ul>
            							<li>
            								<label class="block-option">
            									<input type="checkbox" name="day-checkout" class="checked-checkbox">
            									<span class="checkbox-tick"></span>
            									<span class="day-label">Privacy Policy T&C*</span>
            								</label>
            							</li>
            						</ul>
            					</div>
            				</div>
            				<div class="wizard-day-item">
            					<div class="wizard-checkbox-option">
            						<ul>
            							<li>
            								<label class="block-option">
            									<input type="checkbox" name="day-checkout" class="checked-checkbox">
            									<span class="checkbox-tick"></span>
            									<span class="day-label">I am not a Robot Captcha</span>
            								</label>
            							</li>
            						</ul>
            					</div>
            				</div>
            				<div class="wizard-form-input wizard-form-input full-width d-flex justify-content-end gap-4">
            					<div class="actions">
            						<ul>
            							<li><span class="js-btn-next" title="NEXT">Submit <i class="fa fa-arrow-right"></i></span></li>
            						</ul>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- Email Confirmation -->
            <div class="multisteps-form__panel" data-animation="slideHorz">
            	<div class="wizard-forms">
            		<div class="inner clearfix">
            			<div class="d-flex justify-content-end mb-40">
            				<div class="d-flex align-items-center gap-2">
            					<!-- <p class="already-acc">Back to home</p> -->
            					<a class="sign-in" href="{{route('home')}}">Home</a>
            				</div>
            			</div>
            			<div class="wizard-form-field mb-40 d-flex flex-wrap gap-4 thankyou">
            				<div class="d-flex flex-column justify-content-center align-items-center w-100 gap-4">
            					<div class="d-flex flex-column justify-content-center align-items-center">
            						<img src="{{asset('public/assets/images/Mail.gif')}}" width="280">
            						<p class="mx-auto m-300">Check your Inbox and click the link to confirm your email address</p>
            					</div>
            					<div class="actions">
            						<ul>
            							<li>
            								<a class="sign-in fill" href="{{route('home')}}">Done</a>
            							</li>
            						</ul>
            					</div>
            				</div>
            			</div>
            		</div>	
            	</div>
            </div>
		</div>
	</form>
	
@endsection

@section('script')

	<script type="application/javascript">
	    jQuery(document).ready(function ()
	    {
	        jQuery('select[name="service"]').on('change',function(){
	            var service = jQuery(this).val();
	            if(service == 'core_activities')
	            {
	            	jQuery('select[name="service_type[]"]').empty();
	            	$('select[name="service_type[]"]').append('<option value="pitch_deck_preparation">'+ "Pitch Deck preparation" +'</option>');
	            	$('select[name="service_type[]"]').append('<option value="financial_modeling">'+ "Financial Modeling & Projections" +'</option>');
	            	$('select[name="service_type[]"]').append('<option value="market_research">'+ "Market Research & Comset Analysis" +'</option>');
	            	$('select[name="service_type[]"]').append('<option value="other">'+ "Other" +'</option>');
	          	}
	          	else{

	          		jQuery('select[name="service_type[]"]').empty();
	          		$('select[name="service_type[]"]').append('<option value="legal_services">'+ "Legal Services" +'</option>');
	          		$('select[name="service_type[]"]').append('<option value="patent">'+ "Patent/ TM" +'</option>');
	          		$('select[name="service_type[]"]').append('<option value="regulatory_services">'+ "Regulatory Services" +'</option>');
	          		$('select[name="service_type[]"]').append('<option value="it">'+ "IT & Development" +'</option>');
	          		$('select[name="service_type[]"]').append('<option value="accounting">'+ "Accounting & Taxation" +'</option>');
	          		$('select[name="service_type[]"]').append('<option value="other">'+ "Other" +'</option>');

	          	}
	      	});
	    });
	</script>
@endsection