@extends('layouts.sign_up')

@section('title')
	<title>{{ config('app.name')}} | Founders Sign Up</title>
@endsection

@section('body')

	<form class="multisteps-form__form w-75" action="#" id="wizard">
		<div class="form-area position-relative">
			<!-- Basic -->
			<div class="multisteps-form__panel js-active" data-animation="slideHorz">
				<div class="wizard-forms">
					<div class="inner clearfix">
						<!-- flex-lg-row flex-sm-column flex-column -->
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
								<label>First Name<span class="text-danger">*</span></label>
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
								<div class="form-field-text">( Consider using a Professional email e.g: Alex@startup.com. Try to avoid pesonal emails such as Alex@gmail.com or generic email such as Info@startup.com as investors may not tend to take these seriously) </div>
							</div>
							<div class="wizard-form-input position-relative form-group has-float-label" id="linkedLn">
								<input type="text" name="linkedin" id="linkedin" class="form-control" placeholder="LinkedIn Profile">
								<label>LinkedIn Profile</label>
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
							<div class="wizard-form-input full-width wizard-note-subject" id="findUs">
								<div class="wizard-form-input full-width select-option-area">
									<select name="find_us" id="find_us">
										<option value="" disabled selected>How did you find us?*</option>
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

							<div class="wizard-form-input wizard-form-input full-width">
								<label>Is your Project Affiliated to Institution?<span class="text-danger">*</span></label>
								<div class="wizard-checked" id="yes">
									<label class="checkbox-circle">
										<input type="radio" onclick="affiliated_yes()" name="affiliated" id="affiliated" value="yes">
										<span class="checkmark"></span>
										yes
									</label>
								</div>
								<div class="wizard-checked" id="no">
									<label class="checkbox-circle">
										<input type="radio" onclick="affiliated_no()" name="affiliated" id="affiliated" value="no" checked="checked">
										<span class="checkmark"></span>
										No
									</label>
								</div>
							</div>

							<!-- if-affiliated-yes -->
							<div class="d-flex flex-wrap gap-4 w-100 secret" id="if_yes">
								<div class="wizard-form-input position-relative form-group has-float-label" id="educationalInstitution">
									<input type="text" name="educational_institution" id="educational_institution" class="form-control" placeholder="Educational Institution*">
									<label>Educational Institution<span class="text-danger">*</span></label>
								</div>
								<div class="wizard-form-input position-relative form-group has-float-label" id="Sponsor">
									<input type="text" name="sponsor" id="sponsor" class="form-control" placeholder="Project Sponsor*">
									<label>Project Sponsor<span class="text-danger">*</span></label>
								</div>
								<div class="wizard-form-input position-relative form-group has-float-label" id="sponsorDetail">
									<input type="text" name="sponsor_detail" id="sponsor_detail" class="form-control" placeholder="Sponsor/ Referral details*">
									<label>Sponsor/ Referral details<span class="text-danger">*</span></label>
								</div>
								<div class="wizard-form-input position-relative form-group has-float-label" id="sponsorName">
									<input type="text" name="sponsor_name" id="sponsor_name" class="form-control" placeholder="Name of the Professor/ Sponsor*">
									<label>Name of the Professor/ Sponsor<span class="text-danger">*</span></label>
								</div>
								<div class="wizard-form-input position-relative form-group has-float-label d-flex flex-column full-width" id="sponsorEmail">
									<div>
										<input type="text" name="sponsor_email" id="sponsor_email" class="form-control" placeholder="Email Address of the Sponsor/ Professor*">
										<label>Email Address of the Sponsor/ Professor<span class="text-danger">*</span></label>
									</div>
									<div class="form-field-text">The email address must be official email given by the educational Institution</div>
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
			<!-- Company -->
			<div class="multisteps-form__panel" data-animation="slideHorz">
				<div class="wizard-forms">
					<div class="inner clearfix">
						<div class="d-flex justify-content-between mb-40">
							<div class="wizard-title">
								<h3>Sign up to FMPG</h3>
								<p>Enter a Company details</p>
							</div>
							<div class="d-flex align-items-center gap-2">
								<p class="already-acc">Alerady you have a account?</p>
								<a class="sign-in" href="{{route('login')}}">Sign In</a>
							</div>
						</div>

						<div class="wizard-form-field mb-40 d-flex flex-wrap gap-4">
							<div class="wizard-form-input position-relative form-group has-float-label" id="companyName">
								<input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company Name*">
								<label>Company Name<span class="text-danger">*</span></label>
							</div>
							<div class="wizard-form-input position-relative form-group has-float-label" id="companyWebsite">
								<input type="text" name="company_website" id="company_website" class="form-control" placeholder="Company website">
								<label>Company website</label>
							</div>
							<div class="wizard-form-input position-relative form-group has-float-label d-flex flex-column full-width" id="companyLinkedin">
								<input type="text" name="company_linkedin" id="company_linkedin" class="form-control" placeholder="Company LinkedIn Profile">
								<label>Company LinkedIn Profile</label>
							</div>

							<div class="wizard-form-input wizard-form-input full-width">
								<label>Is your Company Incorporated?<span class="text-danger">*</span></label>
								<div class="wizard-checked">
									<label class="checkbox-circle">
										<input type="radio" name="company_incorporated" id="company_incorporated" value="yes" onclick="company_incorporated_yes()">
										<span class="checkmark"></span>
										yes
									</label>
								</div>
								<div class="wizard-checked">
									<label class="checkbox-circle">
										<input type="radio" name="company_incorporated" id="company_incorporated" value="no" checked="checked" onclick="company_incorporated_no()">
										<span class="checkmark"></span>
										No
									</label>
								</div>
							</div>
							<!-- if-company-incorporated-yes -->
							<div class="d-flex flex-wrap gap-4 w-100 secret" id="if_company_incorporated_yes">
								<div class="wizard-form-input position-relative form-group has-float-label" id="IncorporatedPeriod">
									<input type="month" name="incorporated_period" id="incorporated_period"  class="form-control" placeholder="Incorporated Period*">
									<label>Incorporated Period<span class="text-danger">*</span></label>
								</div>
							</div>
							<div class="wizard-form-input wizard-note-subject">
								<div class="wizard-form-input select-option-area" id="incorporatedCountry">
									<select name="incorporated_country" id="incorporated_country">
										<option value="" disabled selected>Country of Incorporation/ will be incorporated</option>
										<option>Afghanistan </option>
										<option>Albania</option>
										<option>Algeria</option>
										<option>Andorra</option>
										<option>Others</option>
									</select>
								</div>
							</div>
							<div class="wizard-form-input wizard-note-subject  ">
								<div class="wizard-form-input select-option-area" id="companyStage">
									<select name="company_stage" id="company_stage">
										<option value="" disabled selected>What stage is the Company at?</option>
										<option>Ideation </option>
										<option>Patent development</option>
										<option>Prototype</option>
										<option>MVP</option>
										<option>Early Revenue</option>
										<option>Scaling/ Growth</option>
										<option>Development</option>
										<option>Pre-IPO</option>
									</select>
								</div>
							</div>
							<div class="wizard-form-input position-relative form-group has-float-label" id="roundSize">
								<input type="text" name="round_size" id="round_size" class="form-control" placeholder="Round Size*">
								<label>Round Size<span class="text-danger">*</span></label>
							</div>
							<div class="wizard-form-input position-relative form-group has-float-label" id="roundSecured">
								<input type="text" name="round_secured" id="round_secured" class="form-control" placeholder="What % of round is already secured">
								<label>What % of round is already secured</label>
							</div>
							<div class="wizard-form-input position-relative form-group has-float-label d-flex flex-column" id="projectDescription">
								<input type="text" name="project_description" id="project_description" class="form-control" placeholder="Brief Description about your Project">
								<label>Brief Description about your Project</label>
							</div>
							<div class="wizard-form-input position-relative form-group has-float-label d-flex flex-column ">
								<input type="text" name="name" class="form-control" placeholder="Business Domain (Minimum 1. Maximum 5)">
								<label>Business Domain (Minimum 1. Maximum 5)</label>
							</div>
							<div class="wizard-form-input wizard-form-input full-width d-flex justify-content-end gap-4">
								<div class="actions">
									<ul>
										<li><span class="js-btn-prev" title="BACK"> <i class="fa fa-arrow-left"></i> Back</span></li>
										<li><span class="js-btn-next" title="NEXT">Next <i class="fa fa-arrow-right"></i></span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Founder -->
			<div class="multisteps-form__panel" data-animation="slideHorz">
				<div class="wizard-forms">
					<div class="inner clearfix">
						<div class="d-flex justify-content-between mb-40">
							<div class="wizard-title">
								<h3>Sign up to FMPG</h3>
								<p>Enter Founder Details</p>
							</div>
							<div class="d-flex align-items-center gap-2">
								<p class="already-acc">Alerady you have a account?</p>
								<a class="sign-in" href="{{route('login')}}">Sign In</a>
							</div>
						</div>

						<div class="wizard-form-field mb-40 d-flex flex-wrap gap-4">

							<div class="d-flex wizard-form-input full-width gap-4">
								<div class="flex-fill position-relative form-group has-float-label">
									<input type="text" name="name" class="form-control" placeholder="Name of Co-Founder 1">
									<label>Name of Co-Founder 1</label>
								</div>
								<div class="flex-fill position-relative form-group has-float-label">
									<input type="text" name="name" class="form-control" placeholder="LinkedIn Profile of the Co-founder 1">
									<label>LinkedIn Profile of the Co-founder 1</label>
								</div>
								<div class="d-flex align-self-center justify-content-center align-items-center cp">
									<div class="add-minus-icon d-flex align-self-center justify-content-center align-items-center">
										<span>-</span>
										<!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
									</div>
								</div>
							</div>
							<div class="d-flex wizard-form-input full-width gap-4">
								<div class="flex-fill position-relative form-group has-float-label">
									<input type="text" name="name" class="form-control" placeholder="Name of Co-Founder 2">
									<label>Name of Co-Founder 2</label>
								</div>
								<div class="flex-fill position-relative form-group has-float-label">
									<input type="text" name="name" class="form-control" placeholder="LinkedIn Profile of the Co-founder 2">
									<label>LinkedIn Profile of the Co-founder 2</label>
								</div>
								<div class="d-flex align-self-center justify-content-center align-items-center cp">
									<div class="add-minus-icon d-flex align-self-center justify-content-center align-items-center">
										<span>-</span>
										<!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
									</div>
								</div>
							</div>
							<div class="d-flex wizard-form-input full-width gap-4">
								<div class="flex-fill position-relative form-group has-float-label">
									<input type="text" name="name" class="form-control" placeholder="Name of Co-Founder 3">
									<label>Name of Co-Founder 3</label>
								</div>
								<div class="flex-fill position-relative form-group has-float-label">
									<input type="text" name="name" class="form-control" placeholder="LinkedIn Profile of the Co-founder 3">
									<label>LinkedIn Profile of the Co-founder 3</label>
								</div>
								<div class="d-flex align-self-center justify-content-center align-items-center cp">
									<div class="add-minus-icon d-flex align-self-center justify-content-center align-items-center">
										<span>+</span>
										<!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
									</div>
								</div>
							</div>



							<div class="wizard-form-input wizard-form-input full-width">
								<label class="mt-0">Has any co-founders previously founded and exited (sold/ IPO'd) ? *</label>
								<div class="wizard-checked mt-0">
									<label class="checkbox-circle">
										<input type="radio" checked="checked" name="Affiliated" value="yes">
										<span class="checkmark"></span>
										yes
									</label>
								</div>
								<div class="wizard-checked mt-0">
									<label class="checkbox-circle">
										<input type="radio" name="Affiliated" value="No">
										<span class="checkmark"></span>
										No
									</label>
								</div>
							</div>
							<!-- id="if-yes" -->
							<div class="d-flex flex-wrap gap-4 w-100" >
								<div class="wizard-form-input position-relative form-group has-float-label">
									<input type="text" name="name" class="form-control" placeholder="Name of the company">
									<label>Name of the company</label>
								</div>
								<div class="wizard-form-input position-relative form-group has-float-label">
									<input type="text" name="name" class="form-control" placeholder="Funding secured/ Valuation during exit">
									<label>Funding secured/ Valuation during exit</label>
								</div>
								<div class="wizard-form-input wizard-note-subject  ">
									<div class="wizard-form-input select-option-area">
										<select>
											<option value="" disabled selected>Stage of funding secured</option>
											<option>Ideation </option>
											<option>Patent development</option>
											<option>Prototype</option>
											<option>MVP</option>
											<option>Early Revenue</option>
											<option>Scaling/ Growth</option>
											<option>Development</option>
											<option>Pre-IPO</option>
										</select>
									</div>
								</div>
								<div class="wizard-form-input position-relative form-group has-float-label">
									<input type="text" name="name" class="form-control" placeholder="Period when the funding/ Eixt made?">
									<label>Period when the funding/ Eixt made?</label>
								</div>

							</div>
							<div class="wizard-form-input wizard-form-input full-width d-flex justify-content-end gap-4">
								<div class="actions">
									<ul>
										<li><span class="js-btn-prev" title="BACK"> <i class="fa fa-arrow-left"></i> Back</span></li>
										<li><span class="js-btn-next" title="NEXT">Next <i class="fa fa-arrow-right"></i></span></li>
									</ul>
								</div>
							</div>

						</div>

					</div>



				</div>
			</div>
			<!-- Revenue -->
			<div class="multisteps-form__panel" data-animation="slideHorz">
				<div class="wizard-forms">
					<div class="inner clearfix">
						<div class="d-flex justify-content-between mb-40">
							<div class="wizard-title">
								<h3>Sign up to FMPG</h3>
								<p>Revenue & Product Overview</p>
							</div>
							<div class="d-flex align-items-center gap-2">
								<p class="already-acc">Alerady you have a account?</p>
								<a class="sign-in" href="{{route('login')}}">Sign In</a>
							</div>
						</div>

						<div class="wizard-form-field mb-40 d-flex flex-wrap gap-4">

							<div class="wizard-form-input wizard-form-input full-width" id="Revenue">
								<label>Has the company started generating Revenue</label>
								<div class="wizard-checked">
									<label class="checkbox-circle">
										<input type="radio" name="revenue" id="revenue" value="yes" checked="checked" onclick="revenue_yes()">
										<span class="checkmark"></span>
										yes
									</label>
								</div>
								<div class="wizard-checked">
									<label class="checkbox-circle">
										<input type="radio" name="revenue" id="revenue" value="no"  onclick="revenue_no()">
										<span class="checkmark"></span>
										No
									</label>
								</div>
							</div>

							<!-- if-revenue-yes -->
							<div class="d-flex flex-wrap gap-4 w-100" id="if_revenue_yes">
								<div class="wizard-form-input full-width wizard-note-subject" id="revenueGrowth">
									<div class="wizard-form-input full-width select-option-area" >
										<select name="revenue_growth" id="revenue_growth">
											<option value="" disabled selected>How fast is the Revenue growth MoM over the past 6 months?</option>
											<option value="no">No Revenue Yet
											</option>
											<option value="10%">Less than 10%
											</option>
											<option value="20%">Less than 20% </option>
											<option value="50%">Less than 50%</option>
											<option value="80%">Less than 80%</option>
											<option value="100%">More than 100%</option>
										</select>
									</div>
								</div>
							</div>
							
							<!-- if-revenue-no -->
							<div class="d-flex flex-wrap gap-4 w-100 secret" id="if_revenue_no">
								<div class="wizard-form-input full-width wizard-note-subject" id="developmentPeriod">
									<div class="wizard-form-input full-width select-option-area" >
										<select name="development_period" id="development_period">
											<option value="" disabled selected>What is the Product development period (Prototype/MVP)?</option>
											<option value="roll_out">Ready to Launch/ Roll-out
											</option>
											<option value="<3"><3 months
											</option>
											<option value="<6"><6 months </option>
											<option value="<1"><1 Yr</option>
											<option value="<1.5"><1.5 Yrs</option>
											<option value="<2"><2 Yrs</option>
											<option value=">2">>2 Yrs</option>
										</select>
									</div>
								</div>

								<div class="wizard-form-input full-width wizard-note-subject" id="revenueExpected">
									<div class="wizard-form-input full-width select-option-area" >
										<select name="revenue_expected" id="revenue_expected">
											<option value="" disabled selected>When is the Product likely to be launched and Revenue expected?</option>
											<option value="roll_out">Ready to Launch/ Roll-out
											</option>
											<option value="<3"><3 months
											</option>
											<option value="<6"><6 months </option>
											<option value="<1"><1 Yr</option>
											<option value="<1.5"><1.5 Yrs</option>
											<option value="<2"><2 Yrs</option>
											<option value=">2">>2 Yrs</option>
										</select>
									</div>
								</div>
							</div>

							<div class="wizard-day-item">
								<div class="wizard-checkbox-option">
									<ul>
										<li>
											<label class="block-option">
												<input type="checkbox" name="policy" id="policy" class="checked-checkbox">
												<span class="checkbox-tick"></span>
												<span class="day-label">Privacy Policy T&C<span class="text-danger">*</span></span>
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
												<input type="checkbox" name="aggrement" id="aggrement" class="checked-checkbox">
												<span class="checkbox-tick"></span>
												<span class="day-label">I explicity consent to share the above details with any prospective Investors<span class="text-danger">*</span></span>
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
	<script>
		function affiliated_yes() {
			$('#if_yes').removeClass('secret');
		}
		function affiliated_no() {
			$('#if_yes').addClass('secret');
			var educational_institution = document.getElementById("educational_institution").value = '';
            var sponsor = document.getElementById("sponsor").value = '';
            var sponsor_detail = document.getElementById("sponsor_detail").value = '';
            var sponsor_name = document.getElementById("sponsor_name").value = '';
            var sponsor_email = document.getElementById("sponsor_email").value = '';
			$('#educationalInstitution').removeClass('error');
			$('#Sponsor').removeClass('error');
			$('#sponsorDetail').removeClass('error');
			$('#sponsorName').removeClass('error');
			$('#sponsorEmail').removeClass('error');
		}

		function company_incorporated_yes() {
			$('#if_company_incorporated_yes').removeClass('secret');
		}
		function company_incorporated_no() {
			$('#if_company_incorporated_yes').addClass('secret');
			
            var incorporated_period = document.getElementById("incorporated_period").value = '';
			$('#IncorporatedPeriod').removeClass('error');
		}

		function revenue_yes() {
			$('#if_revenue_yes').removeClass('secret');
			$('#if_revenue_no').addClass('secret');

			var development_period = document.getElementById("development_period").value = '';
			var revenue_expected = document.getElementById("revenue_expected").value = '';
			$('#developmentPeriod').removeClass('error');
			$('#revenueExpected').removeClass('error');
		}
		function revenue_no() {
			$('#if_revenue_yes').addClass('secret');
			$('#if_revenue_no').removeClass('secret');

			var revenue_growth = document.getElementById("revenue_growth").value = '';
			$('#revenueGrowth').removeClass('error');
		}
	</script>

@endsection


