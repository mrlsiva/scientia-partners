@extends('layouts.master')

@section('title')
	<title>{{ config('app.name')}} | Dashboard</title>
@endsection

@section('body')

	<!-- Breadcrumb Navigation -->
	<div class="page-header">
		<div class="page-header-left d-flex align-items-center">
			<div class="page-header-title">
				<h5 class="m-b-10">Dashboard</h5>
			</div>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item">Dashboard</li>
			</ul>
		</div>
	</div>

	<!-- Content -->
	<div class="main-content min-height-main">
		<div class="row">
			<div class="col-xxl-3 cdx-xxl-50">
				<div class="row">
					<div class="col-xxl-12 col-sm-6 ">
						<div class="card card-body">
							<div class="hstack justify-content-between">
								<div class="fw-bold text-dark">Your Current Round </div>
								<div class="dropdown open">
									<a href="javascript:void(0);" data-bs-toggle="dropdown">
										<i class="feather-more-horizontal"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Daily</a>
										<a class="dropdown-item" href="javascript:void(0);">Weekly</a>
										<a class="dropdown-item" href="javascript:void(0);">Monthly</a>
										<a class="dropdown-item" href="javascript:void(0);">Yearly</a>
									</div>
								</div>
							</div>
							<div class="mt-5">
								<div class="hstack justify-content-between">
									<div class="fs-4 fw-bold text-dark">$0000</div>
									<div class="badge bg-soft-primary text-primary">
										<span>00.0%</span>
										<i class="feather-chevron-up fs-12 ms-1"></i>
									</div>
								</div>

								<div class="fs-12 text-muted">interest secured out of  <span class="fw-bold text-dark">$000</span></div>
							</div>
						</div>
					</div>
					<div class="col-xxl-12 col-sm-6">
						<div class="card card-body">
							<div class="hstack justify-content-between">
								<div class="fw-bold text-dark">Deal ID </div>
								<div class="dropdown open">
									<a href="javascript:void(0);" data-bs-toggle="dropdown">
										<i class="feather-more-horizontal"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item" href="javascript:void(0);">Daily</a>
										<a class="dropdown-item" href="javascript:void(0);">Weekly</a>
										<a class="dropdown-item" href="javascript:void(0);">Monthly</a>
										<a class="dropdown-item" href="javascript:void(0);">Yearly</a>
									</div>
								</div>
							</div>
							<div class="mt-5">
								<div class="hstack justify-content-between">
									<div class="fs-4 fw-bold text-dark">0000</div>
									<div class="badge bg-soft-primary text-primary">
										<span>00.0%</span>
										<i class="feather-chevron-up fs-12 ms-1"></i>
									</div>
								</div>

								<div class="fs-12 text-muted">Lorem Ipsum   <span class="fw-bold text-dark">$000</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xxl-9">
				<div class="card stretch stretch-full">
					<div class="card-header">
						<h5 class="card-title">Investor </h5>

					</div>
					<div class="card-body custom-card-action p-0">
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr class="border-b">
										<th scope="row">Prospects</th>
										<th>Contacted</th>
										<th>Reviewed</th>
										<th>Interested</th>
										<th>In waiting</th>
										<th class="text-end">Interest not aligned</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
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
			<div class="col-xxl-12">
				<div class="card stretch stretch-full">
					<div class="card-header">
						<h5 class="card-title">Prospects </h5>

					</div>
					<div class="card-body custom-card-action p-0">
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr class="border-b">
										<th scope="row">Filtered</th>
										<th>Manually added</th>
										<th>Contacted</th>
										<th class="text-end">Queued</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td> - </td>
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
		</div>
		<div class="d-flex justify-content-between align-items-center mb-4">
			<div class="me-4">
				<h2 class="fs-16 fw-bold mb-1">Service Requests</h2>
				<!-- <div class="fs-12 text-muted text-truncate-1-line">Total Storage 100 GB (Free space 53.64 GB)</div> -->
			</div>
			<!-- <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">View More</a> -->
		</div>
		<div class="row">
			<div class="col-xxl-12">
				<div class="card stretch stretch-full">
					<div class="card-header">
						<h5 class="card-title">Partner's Hub </h5>
					</div>
					<div class="card-body custom-card-action p-0">
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr class="border-b">
										<th scope="row">Type</th>
										<th>Raised</th>
										<th>Assigned</th>
										<th>Work Completed</th>
										<th>Pending Acceptance</th>
										<th class="text-end">Rated</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> Core Services </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td> Allied Services </td>
										<td> - </td>
										<td> - </td>
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
			<div class="col-xxl-12">
				<div class="card stretch stretch-full">
					<div class="card-header">
						<h5 class="card-title">Account related </h5>
					</div>
					<div class="card-body custom-card-action p-0">
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr class="border-b">
										<th scope="row">Type</th>
										<th>Raised</th>
										<th class="text-end">Addressed</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> IT </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td> Subscription </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
									<tr>
										<td> Others </td>
										<td> - </td>
										<td class="text-end"> - </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
			<div class="col-xxl-12">
				<div class="card premium stretch stretch-full d-flex flex-column flex-lg-row py-3 px-5 bg-soft-warning text-warning rounded-top gap-4 justify-content-between align-items-center">
					<img src="assets/img/crown-svgrepo-com.svg" height="60px">
					<span>A single window simple tracking CRM software to track the reach of your pitch with prospective Investors, track your prospects and avail Partner's services and track their status. </span>
					<a class=" py-2 px-5 text-white text-nowrap text-center bg-warning cp">Go Premium</a>
				</div>
			</div>
		</div>
	</div>

@endsection