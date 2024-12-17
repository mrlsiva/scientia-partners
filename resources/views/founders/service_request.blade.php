@extends('layouts.master')

@section('title')
	<title>{{ config('app.name')}} | Service Request</title>
@endsection

@section('body')

	<!-- Breadcrumb Navigation -->
	<div class="page-header">
		<div class="page-header-left d-flex align-items-center">
			<div class="page-header-title">
				<h5 class="m-b-10">Service Request Status</h5>
			</div>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item">Service Request Status</li>
			</ul>
		</div>
	</div>

	<!-- Content -->
	<div class="main-content min-height-main">
		<div class="row">
			<div class="col-xxl-12">
				<div class="card stretch stretch-full">
					<div class="card-header">
						<div class="">
							<h5 class="fw-bold">Service Request</h5>
							<span class="fs-12 text-muted">Partner's Hub</span>
						</div>
					</div>

					<div class="card-body custom-card-action p-0">
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr>
										<th scope="col">Type</th>
										<th scope="col">SR#</th>
										<th scope="col">Raised on</th>
										<th scope="col">Resolved on</th>
										<th scope="col">Acceptance</th>
										<th scope="col">Rating</th>
										<th scope="col" class="text-end">Remarks</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="position-relative"> <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-success rounded"></div>Core Services</td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td>
											<a href="javascript:void(0)" class="badge bg-soft-success text-success">Accept</a>
										</td>
										<td> 
											<div>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
											</div>
										</td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td class="position-relative"> <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-warning rounded"></div>Core Services</td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td>
											<a href="javascript:void(0)" class="badge bg-soft-warning text-warning">Reminded</a>
										</td>
										<td> 
											<div>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
											</div>
										</td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td class="position-relative"> <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-danger rounded"></div>Core Services</td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td>
											<a href="javascript:void(0)" class="badge bg-soft-danger text-danger">Reject</a>
										</td>
										<td> 
											<div>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
											</div>
										</td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td class="position-relative"> <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-success rounded"></div>Allied Services</td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td>
											<a href="javascript:void(0)" class="badge bg-soft-success text-success">Accept</a>
										</td>
										<td> 
											<div>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
											</div>
										</td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td class="position-relative"> <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-warning rounded"></div>Allied Services</td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td>
											<a href="javascript:void(0)" class="badge bg-soft-warning text-warning">Reminded</a>
										</td>
										<td> 
											<div>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
											</div>
										</td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td class="position-relative"> <div class="ht-50 position-absolute start-0 top-50 translate-middle border-start border-5 border-danger rounded"></div>Allied Services</td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td>
											<a href="javascript:void(0)" class="badge bg-soft-danger text-danger">Reject</a>
										</td>
										<td> 
											<div>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
												<i class="fas fa-star text-warning fs-10"></i>
											</div>
										</td>
										<td class="text-end"> - </td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-xxl-8">
				<div class="card stretch stretch-full">
					<div class="card-header">
						<div class="">
							<h5 class="fw-bold">Service Request</h5>
							<span class="fs-12 text-muted">Account related</span>
						</div>
					</div>

					<div class="card-body custom-card-action p-0">
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr>
										<th scope="col">Type</th>
										<th scope="col">SR#</th>
										<th scope="col">Raised on</th>
										<th scope="col" class="text-end">Resolved on</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td>IT</td>
										<td> - </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td>Subscription</td>
										<td> - </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td>Others</td>
										<td> - </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
			<div class="col-xxl-4">
				<div class="card stretch stretch-full alert alert-soft-warning-message d-flex align-items-center">
					<div class="alert mb-0 d-flex flex-column alert-soft-warning-message profile-overview-alert text-center h-100" role="alert">
						<div class="mb-4 d-none d-md-block mt-4">
							<i class="feather feather-alert-triangle fs-1"></i>
						</div>
						<div>
							<p class="fw-bold text-truncate-1-line mb-1">Your profile has not been updated yet!!!</p>
							<p class="fs-10 mb-4 fw-medium text-uppercase text-truncate-1-line">A single window simple tracking CRM software to track the reach of your pitch with prospective Investors, track your prospects and avail Partner's services and track their status.  </p>
							<a href="javascript:void(0);" class="btn btn-sm bg-soft-warning text-warning d-inline-block">Update Now</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div> 

@endsection