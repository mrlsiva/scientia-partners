@extends('layouts.master')

@section('title')
	<title>{{ config('app.name')}} | Investor Database</title>
@endsection

@section('body')
	
	<!-- Breadcrumb Navigation -->
	<div class="page-header">
		<div class="page-header-left d-flex align-items-center">
			<div class="page-header-title">
				<h5 class="m-b-10">Full Database (Curated)</h5>
			</div>
			<ul class="breadcrumb">
				<li class="breadcrumb-item">Investor Database</li>
				<li class="breadcrumb-item">Full Database (Curated)</li>
			</ul>
		</div>
	</div>

	<!-- Content -->
	<div class="main-content min-height-main">
		<div class="row">
			<div class="col-xxl-12">
				<div class="alert alert-dismissible p-4 d-flex alert-soft-teal-message" role="alert">
					<p class="fs-12 fw-medium">Access our full database of Investors which are updated on a periodic basis</p>
				</div>
			</div>
			<div class="col-xxl-12">
				<div class="card stretch stretch-full">
					<div class="card-header">
						<h5 class="card-title">Search by name</h5>
					</div>
					<div class="card-body custom-card-action ">
						<div class="input-group search-form">
							<span class="input-group-text">
								<i class="feather-search fs-6 text-muted"></i>
							</span>
							<input type="text" class="form-control search-input-field" placeholder="Search by name....">
							<a href="javascript:void(0);" class=" btn btn-primary">
								<span>Search</span>
							</a>

						</div>

					</div>

				</div>

			</div>
			<div class="col-xxl-12">
				<div class="card stretch stretch-full">
					<div class="card-header">
						<h5 class="card-title">Filters</h5>
					</div>
					<div class="card-body custom-card-action ">
						<div class="row">
							<div class="col-md-10">
								<div class="row">
									<div class="col-md-3">
										<label class="mb-1">Country</label>
										<select class="form-control" data-select2-selector="status">
											<option value="Country 1">Country 1</option>
											<option value="Country 2">Country 2</option>
											<option value="Country 3">Country 3</option>
										</select>
									</div>
									<div class="col-md-3">
										<label class="mb-1">Domain</label>
										<select class="form-control" data-select2-selector="status">
											<option value="Domain 1">Domain 1</option>
											<option value="Domain 2">Domain 2</option>
											<option value="Domain 3">Domain 3</option>
										</select>
									</div>
									<div class="col-md-3">
										<label class="mb-1">Stage of Funding</label>
										<select class="form-control" data-select2-selector="status">
											<option value="Stage of Funding 1">Stage of Funding 1</option>
											<option value="Stage of Funding 2">Stage of Funding 2</option>
											<option value="Stage of Funding 3">Stage of Funding 3</option>
										</select>
									</div>
									<div class="col-md-3">
										<label class="mb-1">Round Size</label>
										<select class="form-control" data-select2-selector="status">
											<option value="Round Size 1">Round Size 1</option>
											<option value="Round Size 2">Round Size 2</option>
											<option value="Round Size 3">Round Size 3</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-2 d-flex flex-column justify-content-end">
								<a href="javascript:void(0);" class="w-100 h-38 btn btn-primary">
									<i class="feather-search me-2"></i>
									<span>Search</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xxl-12">
				<div class="card stretch stretch-full">
					<div class="card-header">
						<h5 class="card-title">Investor Full Database (Curated)</h5>
					</div>
					<div class="card-body custom-card-action p-0">
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr class="border-b">
										<th scope="row">Name</th>
										<th>Website</th>
										<th>Country</th>
										<th>Domain</th>
										<th>Funding Stage</th>
										<th>Round Size</th>
										<th class="text-end">Add to Prospects</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end">
											<div class="item-checkbox ms-1">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input checkbox" id="checkBox_1">
													<label class="custom-control-label" for="checkBox_1"></label>
												</div>
											</div> 
										</td>
									</tr>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end">
											<div class="item-checkbox ms-1">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input checkbox" id="checkBox_2">
													<label class="custom-control-label" for="checkBox_2"></label>
												</div>
											</div> 
										</td>
									</tr>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end">
											<div class="item-checkbox ms-1">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input checkbox" id="checkBox_3">
													<label class="custom-control-label" for="checkBox_3"></label>
												</div>
											</div> 
										</td>
									</tr>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end">
											<div class="item-checkbox ms-1">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input checkbox" id="checkBox_4">
													<label class="custom-control-label" for="checkBox_4"></label>
												</div>
											</div> 
										</td>
									</tr>
									<tr>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td> - </td>
										<td class="text-end">
											<div class="item-checkbox ms-1">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input checkbox" id="checkBox_5">
													<label class="custom-control-label" for="checkBox_5"></label>
												</div>
											</div> 
										</td>
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