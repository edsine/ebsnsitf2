@extends('layouts.app')

@section('content')


<div class="container-fluid">
  {{-- Start::Sweet-alert --}}
  @include('flash::message')
  {{-- end::Sweet-alert --}}
  <!--begin::Row-->
  <div class="row g-5 g-xl-8 pt-5">
    <h1 class="text-black-50 pt-5">Human Resources:<b style="color: #000">Overview</b></h1>
    <div class="col-xl-3">
      <!--begin::Statistics Widget 3-->
      <div class="card mb-xl-8">
        <div class="card card-stats mb-4 mb-xl-0">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-uppercase text-muted mb-0">LEAVE REQUEST</h5>
                <span class="h2 font-weight-bold mb-0">350,897</span>
              </div>
              <div class="col-auto">
                <div class="icon icon-shape text-white rounded-circle shadow">
                  <i class="fas fa-chart-bar" style="font-size:25px;color:purple"></i>
                </div>
              </div>
            </div>
            <p class="mt-3 mb-0 text-muted text-sm">
              <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
              <span class="text-nowrap">Since last month</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">RETENTION RATE</h5>
              <span class="h2 font-weight-bold mb-0">2,356</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape  text-white rounded-circle shadow">
                <i class="fas fa-chart-pie" style="font-size:25px;color:green"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-muted text-sm">
            <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
            <span class="text-nowrap">Since last week</span>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">RESIGNED EMPLOYEES</h5>
              <span class="h2 font-weight-bold mb-0">2,356</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape  text-white rounded-circle shadow">
                <i class="fas fa-chart-pie" style="font-size:25px;color:red"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-muted text-sm">
            <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
            <span class="text-nowrap">Since last week</span>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">EMPLOYEES</h5>
              <span class="h2 font-weight-bold mb-0">924</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape  text-white rounded-circle shadow">
                <i class="fas fa-users" style="font-size:25px;color:blue"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-muted text-sm">
            <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
            <span class="text-nowrap">Since yesterday</span>
          </p>
        </div>
      </div>
    </div>
    <!--begin::Body-->


    <div class="col-xl-6">
      <!--begin::Statistics Widget 3-->
      <div class="card mb-xl-8">
        <!--begin::Body-->

        <div class="card" style="padding-left:20px;padding-top:10px">
          <a href="#" class="text-dark text-hover-primary fw-bold fs-3">PENDING NOTIFICATIONS</a>

        </div>
        <hr />
        <div class="card notification-card notification-warning">
          <div class="card-body">
            <table>
              <tr>
                <td style="width:70%">
                  <div class="card-title"> '<b>Daniel Garba</b>' from finance department applied for a leave</div>
                </td>
                <td style="width:30%">
                  <a href="#" class="btn btn-primary">View</a>
                  <a href="#" class="btn btn-danger dismiss-notification">Dismiss</a>
                </td>
              </tr>
            </table>
          </div>
        </div>

        <div class="card notification-card notification-warning">
          <div class="card-body">
            <table>
              <tr>
                <td style="width:70%">
                  <div class="card-title"> '<b>Vanessa John</b>' from Claims department applied for a leave</div>
                </td>
                <td style="width:30%">
                  <a href="#" class="btn btn-primary">View</a>
                  <a href="#" class="btn btn-danger dismiss-notification">Dismiss</a>
                </td>
              </tr>
            </table>
          </div>
        </div>

        <div class="card notification-card notification-warning">
          <div class="card-body">
            <table>
              <tr>
                <td style="width:70%">
                  <div class="card-title"> '<b>George Smith</b>' from Tender department sent a Memo</div>
                </td>
                <td style="width:30%">
                  <a href="#" class="btn btn-primary">View</a>
                  <a href="#" class="btn btn-danger dismiss-notification">Dismiss</a>
                </td>
              </tr>
            </table>
          </div>
        </div>

        <div class="card notification-card notification-warning">
          <div class="card-body">
            <table>
              <tr>
                <td style="width:70%">
                  <div class="card-title"> '<b>Health and Care</b>' you need to Update your HMO</div>
                </td>
                <td style="width:30%">
                  <a href="#" class="btn btn-primary">View</a>
                  <a href="#" class="btn btn-danger dismiss-notification">Dismiss</a>
                </td>
              </tr>
            </table>
          </div>
        </div>



        <!--end::Body-->
      </div>
      <!--end::Body-->
    </div>

    <div class="col-xl-6">

      <div class="card mb-xl-8">
        <div class="col-md-4 py-1">
          <div class="card" style="margin-left:200px;padding-top:20px">
            <div style="width: 300px; height: 300px; border-radius: 50%; background-color: #f0f0f0; position: relative;">
              <div style="width: 50%; height: 100%; position: absolute; clip-path: polygon(50% 50%, 100% 0, 100% 100%); transform-origin: 100% 50%; transform: rotate(0deg);">
                <div style="width: 100%; height: 100%; clip-path: polygon(0 0, 100% 0, 100% 100%); background-color: #FF5733;"></div>
              </div>
              <div style="width: 50%; height: 100%; position: absolute; clip-path: polygon(50% 50%, 100% 0, 100% 100%); transform-origin: 100% 50%; transform: rotate(72deg);">
                <div style="width: 100%; height: 100%; clip-path: polygon(0 0, 100% 0, 100% 100%); background-color: #FFC300;"></div>
              </div>
              <div style="width: 50%; height: 100%; position: absolute; clip-path: polygon(50% 50%, 100% 0, 100% 100%); transform-origin: 100% 50%; transform: rotate(144deg);">
                <div style="width: 100%; height: 100%; clip-path: polygon(0 0, 100% 0, 100% 100%); background-color: #36A2EB;"></div>
              </div>
              <div style="width: 50%; height: 100%; position: absolute; clip-path: polygon(50% 50%, 100% 0, 100% 100%); transform-origin: 100% 50%; transform: rotate(216deg);">
                <div style="width: 100%; height: 100%; clip-path: polygon(0 0, 100% 0, 100% 100%); background-color: #8E44AD;"></div>
              </div>
              <div style="width: 50%; height: 100%; position: absolute; clip-path: polygon(50% 50%, 100% 0, 100% 100%); transform-origin: 100% 50%; transform: rotate(288deg);">
                <div style="width: 100%; height: 100%; clip-path: polygon(0 0, 100% 0, 100% 100%); background-color: #27AE60;"></div>
              </div>
            </div>
            </body>
          </div>
        </div>
        <!--begin::Body-->
        <div class="card-body d-flex flex-column p-0">
          <div class="d-flex flex-stack flex-grow-1 card-p">
            <div class="d-flex flex-column me-2">
              <a href="#" class="text-dark text-hover-primary fw-bold fs-2">Perfomance Metrics</a>
              <span class="text-muted fw-semibold mt-1">Analytics as at 10:32:38A toady</span>
            </div>
            <span class="symbol symbol-50px">
              <span class="symbol-label fs-5 fw-bold bg-light-success text-success">300</span>
            </span>
          </div>
          <div class="statistics-widget-3-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 50px"></div>

        </div>
        <!--end::Body-->
      </div>
      <!--end::Body-->
    </div>

    <div class="col-xl-12">
      <!--begin::Statistics Widget 3-->
      <div class="card" style="padding:15px">

        <div class="card" style="padding-left:">
          <center><a href="#" class="text-dark text-hover-primary fw-bold fs-3">EMPLOYEE STATUS</a></center>
          <br>

        </div>
        <!--begin::Body-->
        <table class="table">
          <thead class="table-success">
            <tr>
              <th>Employee Name</th>
              <th>Job Title</th>
              <th>Department</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Smith</td>
              <td>Human resource</td>
            </tr>
            <tr>
              <td>Mary</td>
              <td>Moe</td>
              <td>Legal</td>
            </tr>
            <tr>
              <td>July</td>
              <td>Dooley</td>
              <td>Finance</td>
            </tr>
          </tbody>
        </table>
        <!--end::Body-->
      </div>
      <!--end::Statistics Widget 3-->
    </div>
  </div>

  <!--end::Row-->
  <!--begin::Row-->

  <!--end::Tables Widget 12-->
</div>
</div>

@endsection