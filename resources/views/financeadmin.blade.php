@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        {{-- Start::Sweet-alert --}}
        @include('flash::message')
        {{-- end::Sweet-alert --}}


        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-8 pt-5">
            <h1 class="text-black-50 pt-5"> Finance and Accounting :<b style="color: #000">Overview</b></h1>
            <div class="col-xl-3">
                <!--begin::Statistics Widget 5-->
                <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                        <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="8" y="9" width="3" height="10" rx="1.5"
                                    fill="currentColor" />
                                <rect opacity="0.5" x="13" y="5" width="3" height="14"
                                    rx="1.5" fill="currentColor" />
                                <rect x="18" y="11" width="3" height="8" rx="1.5"
                                    fill="currentColor" />
                                <rect x="3" y="13" width="3" height="6" rx="1.5"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">239,009</div>
                        <div class="fw-semibold text-gray-400">Total Revenue</div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Statistics Widget 5-->
            </div>
            <div class="col-xl-3">
            <div class="card">
            <div class="card-body">
    <h5 class="card-title">Expenses</h5>
    <div class="card-icon">
      <i class="fa-money-bill-alt" style="font-size:30px;color:skyblue"></i>
    </div>
    <hr />
    <div class="progress">
      <div class="progress-bar bg-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
        70%
      </div>
    </div>
    <p class="card-text">432,000.00</p>
  </div>
</div>

            </div>
            <div class="col-xl-3">
            <div class="card">
  <div class="card-body">
    <h5 class="card-title">Profits</h5>
    <div class="card-icon">
      <i class="fas fa-dollar-sign" style="font-size:30px;color:goldenrod"></i>
    </div>
    <hr />
    <div class="progress">
      <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
        40%
      </div>
    </div>
    <p class="card-text">230</p>
  </div>
</div>
            </div>
            <div class="col-xl-3">
               <!-- Card with analytical icon and progress bar -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Approved Money</h5>
    <div class="card-icon">
      <i class="fas fa-chart-line" style="font-size:30px;color:green"></i>
    </div>
    <hr />
    <div class="progress">
      <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
        60%
      </div>
    </div>
    <p class="card-text">42,00.0</p>
  </div>
</div>

            </div>

            <div class="card card-flush mt-6 mt-xl-9">
									<!--begin::Card header-->
									<div class="card-header mt-5">
										<!--begin::Card title-->
										<div class="card-title flex-column">
											<h3 class="fw-bolder mb-1">Project Spendings</h3>
											<div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div>
										</div>
										<!--begin::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar my-1">
											<!--begin::Select-->
											<div class="me-6 my-1">
												<select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
													<option value="All" selected="selected">All time</option>
													<option value="thisyear">This year</option>
													<option value="thismonth">This month</option>
													<option value="lastmonth">Last month</option>
													<option value="last90days">Last 90 days</option>
												</select>
											</div>
											<!--end::Select-->
											<!--begin::Select-->
											<div class="me-4 my-1">
												<select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
													<option value="All" selected="selected">All Orders</option>
													<option value="Approved">Approved</option>
													<option value="Declined">Declined</option>
													<option value="In Progress">In Progress</option>
													<option value="In Transit">In Transit</option>
												</select>
											</div>
											<!--end::Select-->
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span class="svg-icon svg-icon-3 position-absolute ms-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
											</div>
											<!--end::Search-->
										</div>
										<!--begin::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table container-->
										<div class="table-responsive">
											<!--begin::Table-->
											<table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
												<!--begin::Head-->
												<thead class="fs-7 text-gray-400 text-uppercase">
													<tr>
														<th class="min-w-250px">Manager</th>
														<th class="min-w-150px">Date</th>
														<th class="min-w-90px">Amount</th>
														<th class="min-w-90px">Status</th>
														<th class="min-w-50px text-end">Details</th>
													</tr>
												</thead>
												<!--end::Head-->
												<!--begin::Body-->
												<tbody class="fs-6">
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
																	<div class="fw-bold text-gray-400">smith@kpmg.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Dec 20, 2022</td>
														<td>$617.00</td>
														<td>
															<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
																	<div class="fw-bold text-gray-400">melody@altbox.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Nov 10, 2022</td>
														<td>$580.00</td>
														<td>
															<span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
																	<div class="fw-bold text-gray-400">max@kt.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Jun 24, 2022</td>
														<td>$516.00</td>
														<td>
															<span class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
																	<div class="fw-bold text-gray-400">sean@dellito.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Nov 10, 2022</td>
														<td>$879.00</td>
														<td>
															<span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
																	<div class="fw-bold text-gray-400">brian@exchange.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Aug 19, 2022</td>
														<td>$439.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Online-->
																	<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
																	<!--end::Online-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
																	<div class="fw-bold text-gray-400">mik@pex.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>May 05, 2022</td>
														<td>$435.00</td>
														<td>
															<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
													<tr>
														<td>
															<!--begin::User-->
															<div class="d-flex align-items-center">
																<!--begin::Wrapper-->
																<div class="me-5 position-relative">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Info-->
																<div class="d-flex flex-column justify-content-center">
																	<a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
																	<div class="fw-bold text-gray-400">f.mit@kpmg.com</div>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</td>
														<td>Oct 25, 2022</td>
														<td>$685.00</td>
														<td>
															<span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-light btn-sm">View</a>
														</td>
													</tr>
												
												
												</tbody>
												<!--end::Body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Table container-->
									</div>
									<!--end::Card body-->
								</div>

    

    

    
   >
            </div>
            <!--end::Tables Widget 12-->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var ctx = document.getElementById('salesChart').getContext('2d');
  var salesChart = new Chart(ctx, {
    type: 'bar', // Change the chart type as needed
    data: {
      // Your chart data goes here
    },
    options: {
      // Your chart options go here
    }
  });
</script>
    </div>
@endsection
