@extends('layouts.master')

@section('title')
	<title>{{ config('app.name')}} | Investor Database</title>
@endsection

@section('body')
	
	<!-- Breadcrumb Navigation -->
	<div class="page-header">
		<div class="page-header-left d-flex align-items-center">
			<div class="page-header-title">
				<h5 class="m-b-10">Sample (Free)</h5>
			</div>
			<ul class="breadcrumb">
				<li class="breadcrumb-item">Investor Database</li>
				<li class="breadcrumb-item">Sample (Free)</li>
			</ul>
		</div>
	</div>

	<!-- Content -->
	<div class="main-content min-height-main">       
		<div class="row">
			<div class="col-xxl-12">
				<div class="card stretch stretch-full">
					<div class="card-header">
						<h5 class="card-title">Investor Database (Free Sample)</h5>
					</div>
					<div class="card-body custom-card-action p-0">
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr class="border-b">
										<th scope="row">Investor Name</th>
										<th>Website</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> - </td>
										<td> - </td>
									</tr>
									<tr>
										<td> - </td>
										<td> - </td>
									</tr>
									<tr>
										<td> - </td>
										<td> - </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
			<div class="col-xxl-12">
				<div class="card premium stretch stretch-full d-flex flex-column flex-lg-row py-3 px-5 bg-soft-warning text-warning rounded-top gap-4 justify-content-between align-items-center">
					<span>To access the power of our full Investor database and expand your options of fundability, subscribe to our premium services</span>
					<a class=" py-2 px-5 text-white text-nowrap text-center bg-warning cp">Go Premium</a>
				</div>
			</div>
		</div>
	</div>

@endsection