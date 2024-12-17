@extends('layouts.master')

@section('title')
	<title>{{ config('app.name')}} | My Prospects</title>
@endsection

@section('body')
	
	<!-- Breadcrumb Navigation -->
	<div class="page-header">
		<div class="page-header-left d-flex align-items-center">
			<div class="page-header-title">
				<h5 class="m-b-10">My Prospects</h5>
			</div>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item">My Prospects</li>
			</ul>
		</div>
	</div>
    
    <!-- Content -->     
    <div class="main-content min-height-main">
    	<div class="row">
    		<div class="col-xxl-3 col-md-6">
    			<div class="card stretch stretch-full">
    				<div class="card-body">
    					<div class="hstack justify-content-between">
    						<div>
    							<h4 class="text-success">00</h4>
    							<div class="text-muted">Business Domain</div>
    						</div>
    						<div class="text-end">
    							<i class="feather-globe fs-2"></i>
    						</div>
    					</div>
    				</div>
    				<div class="card-footer bg-success py-3">
    					<div class="hstack justify-content-between">
    						<p class="text-white mb-0">xx% change</p>
    						<div class="text-end">
    							<i class="feather-trending-up text-white"></i>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-xxl-3 col-md-6">
    			<div class="card stretch stretch-full">
    				<div class="card-body">
    					<div class="hstack justify-content-between">
    						<div>
    							<h4 class="text-warning">00</h4>
    							<div class="text-muted">Stage of your Startup</div>
    						</div>
    						<div class="text-end">
    							<i class="feather-pie-chart fs-2"></i>
    						</div>
    					</div>
    				</div>
    				<div class="card-footer bg-warning py-3">
    					<div class="hstack justify-content-between">
    						<p class="text-white mb-0">xx% change</p>
    						<div class="text-end">
    							<i class="feather-trending-down text-white"></i>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-xxl-3 col-md-6">
    			<div class="card stretch stretch-full">
    				<div class="card-body">
    					<div class="hstack justify-content-between">
    						<div>
    							<h4 class="text-primary">00</h4>
    							<div class="text-muted">Geographical Loation</div>
    						</div>
    						<div class="text-end">
    							<i class="feather-map-pin fs-2"></i>
    						</div>
    					</div>
    				</div>
    				<div class="card-footer bg-primary py-3">
    					<div class="hstack justify-content-between">
    						<p class="text-white mb-0">xx% change</p>
    						<div class="text-end">
    							<i class="feather-trending-up text-white"></i>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-xxl-3 col-md-6">
    			<div class="card stretch stretch-full">
    				<div class="card-body">
    					<div class="hstack justify-content-between">
    						<div>
    							<h4 class="text-danger">00</h4>
    							<div class="text-muted">Round Size</div>
    						</div>
    						<div class="text-end">
    							<i class="feather-disc fs-2"></i>
    						</div>
    					</div>
    				</div>
    				<div class="card-footer bg-danger py-3">
    					<div class="hstack justify-content-between">
    						<p class="text-white mb-0">xx% change</p>
    						<div class="text-end">
    							<i class="feather-trending-down text-white"></i>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="col-xxl-12">
    			<div class="card stretch stretch-full">
    				<div class="card-header">
    					<h5 class="card-title">Premium User </h5>
    					<div class="actions">
    						<button type="button" id="sendButton" disabled>Send Proposal</button>
    					</div>
    				</div>
    				<div class="card-body custom-card-action p-0">
    					<div class="table-responsive">
    						<!-- proposal-tabel -->
    						<table class="table table-hover mb-0 ">
    							<thead>
    								<tr class="border-b">
    									<th scope="row">Investor Name</th>
    									<th>Geographical Location</th>
    									<th>Website</th>
    									<th>Ticket size</th>
    									<th>Stage of funding</th>
    									<th>Select</th>
    									<th class="text-end">Status</th>
    								</tr>
    							</thead>
    							<tbody>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_1">
    												<label class="custom-control-label" for="checkBox_1"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-primary text-primary">Contacted</span> </td>
    								</tr>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_2">
    												<label class="custom-control-label" for="checkBox_2"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-info text-info">Reviewed</span> </td>
    								</tr>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_3">
    												<label class="custom-control-label" for="checkBox_3"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-danger text-danger">Waiting</span> </td>
    								</tr>
    								
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_4">
    												<label class="custom-control-label" for="checkBox_4"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-teal text-teal">Interested</span> </td>
    								</tr>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_5">
    												<label class="custom-control-label" for="checkBox_5"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-warning text-warning">Interest not aligned</span> </td>
    								</tr>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_6">
    												<label class="custom-control-label" for="checkBox_6"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-indigo text-indigo">Queued</span> </td>
    								</tr>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_7">
    												<label class="custom-control-label" for="checkBox_7"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-success text-success">Cold</span> </td>
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
    					<h5 class="card-title">Free User </h5>
    					<div class="actions">
    						<button type="button" id="sendButton" disabled>Send Proposal</button>
    					</div>
    				</div>
    				<div class="card-body custom-card-action p-0">
    					<div class="table-responsive">
    						<table class="table table-hover mb-0 proposal-tabel">
    							<thead>
    								<tr class="border-b">
    									<th scope="row">Investor Name</th>
    									<th>Geographical Location</th>
    									<th>Website</th>
    									<th>Ticket size</th>
    									<th>Stage of funding</th>
    									<th>Select</th>
    									<th class="text-end">Status</th>
    								</tr>
    							</thead>
    							<tbody>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_8">
    												<label class="custom-control-label" for="checkBox_8"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-primary text-primary">Contacted</span> </td>
    								</tr>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_9">
    												<label class="custom-control-label" for="checkBox_9"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-info text-info">Reviewed</span> </td>
    								</tr>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_10">
    												<label class="custom-control-label" for="checkBox_10"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-danger text-danger">Waiting</span> </td>
    								</tr>
    								
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_11">
    												<label class="custom-control-label" for="checkBox_11"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-teal text-teal">Interested</span> </td>
    								</tr>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_12">
    												<label class="custom-control-label" for="checkBox_12"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-warning text-warning">Interest not aligned</span> </td>
    								</tr>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_13">
    												<label class="custom-control-label" for="checkBox_13"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-indigo text-indigo">Queued</span> </td>
    								</tr>
    								<tr>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td> - </td>
    									<td>
    										<div class="item-checkbox ms-1">
    											<div class="custom-control custom-checkbox">
    												<input type="checkbox" class="custom-control-input checkbox" id="checkBox_14">
    												<label class="custom-control-label" for="checkBox_14"></label>
    											</div>
    										</div>
    									</td>
    									<td class="text-end"> <span class="badge bg-soft-success text-success">Cold</span> </td>
    								</tr>
    								
    							</tbody>
    						</table>
    					</div>
    					<div class="overlay d-flex flex-column gap-3">
    						<p>What are you waiting for? Upgrade to our Premium plan to reach out to your potential Investors. </p>
    						<p>The time is now </p>
    						<button type="button" class="btn btn-primary">Go Premium</button>
    					</div>
    				</div>
    				
    			</div>
    		</div>
    	</div>
    </div>


@endsection