@extends('layouts.master')

@section('title')
	<title>{{ config('app.name')}} | Investor Database</title>
@endsection

@section('body')

	<!-- Breadcrumb Navigation -->
	<div class="page-header">
		<div class="page-header-left d-flex align-items-center">
			<div class="page-header-title">
				<h5 class="m-b-10">Addition to DB</h5>
			</div>
			<ul class="breadcrumb">
				<li class="breadcrumb-item">Investor Database</li>
				<li class="breadcrumb-item">Addition to DB</li>
			</ul>
		</div>
	</div>

	<!-- Content -->
	<div class="main-content min-height-main">
		<div class="row">
			<div class="col-xxl-12 col-lg-12">
				<div class="card stretch stretch-full">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-dismissible p-4 d-flex alert-soft-teal-message" role="alert">
									<p class="fs-12 fw-medium">Track your own curated list of Investors through our simple and
									easy to use CRM Software</p>
								</div>
							</div>
							<div class="col-md-12">
								<div class="alert alert-dismissible p-4 d-flex alert-soft-warning-message" role="alert">
									<p class="fs-12 fw-medium">Leverage our CRM software to reach out to the investors whom you
									have found </p>
								</div>
							</div>
							<div class="col-md-12">
								<div class="alert alert-dismissible p-4 d-flex alert-soft-danger-message" role="alert">
									<p class="fs-12 fw-medium">Click the link and download the template file. Fill up the
										information which you may have and upload the file into the link given below. Our team
									will review and update the details to the database at the earliest. </p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-4">
									<label class="custom-file-upload text-center alert alert-soft-success-message">
										<i class="feather-download me-2"></i>
									Download Document </label>
									<input name="uploadDocument" style="display: none">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-4">
									<label for="choose-file"
									class="custom-file-upload text-center  alert alert-soft-warning-message"
									id="choose-file-label"> <i class="feather-upload me-2"></i>Upload Document </label>
									<input name="uploadDocument" type="file" id="choose-file" style="display: none">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection