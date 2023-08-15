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

    

        <div class="card col-6">
        <div class="card-body">
        <div style="display: flex; align-items: flex-end; justify-content: center; height: 400px;  padding: 20px; position: relative;">
  <div style="width: 50px; margin: 0 10px; background-color: #3498db; height: 250px;">
    <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 2px; height: 10px; background-color: #e74c3c;"></div>
  </div>
  <div style="width: 50px; margin: 0 10px; background-color: #e74c3c; height: 300px;">
    <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 2px; height: 10px; background-color: #e74c3c;"></div>
  </div>
  <div style="width: 50px; margin: 0 10px; background-color: #2ecc71; height: 200px;">
    <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 2px; height: 10px; background-color: #e74c3c;"></div>
  </div>
  <div style="width: 50px; margin: 0 10px; background-color: #f39c12; height: 150px;">
    <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 2px; height: 10px; background-color: #e74c3c;"></div>
  </div>
  <div style="width: 50px; margin: 0 10px; background-color: #3498db; height: 250px;">
    <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 2px; height: 10px; background-color: #e74c3c;"></div>
  </div>
  <div style="width: 50px; margin: 0 10px; background-color: #f39c12; height: 150px;">
    <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 2px; height: 10px; background-color: #e74c3c;"></div>
  </div>
  <div style="width: 50px; margin: 0 10px; background-color: #f39c12; height: 150px;">
    <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 2px; height: 10px; background-color: #e74c3c;"></div>
  </div>
  <div style="width: 50px; margin: 0 10px; background-color: grey; height: 350px;">
    <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 2px; height: 10px; background-color: #e74c3c;"></div>
  </div>
  <div style="width: 50px; margin: 0 10px; background-color: #9b59b6; height: 100px;">
    <div style="position: absolute; bottom: -10px; left: 50%; transform: translateX(-50%); width: 2px; height: 10px; background-color: #e74c3c;"></div>
  </div>
</div>
<div style="display: flex; justify-content: center; margin-top: 10px;">
  <div style="width: 50px; text-align: center;">Label 1</div>
  <div style="width: 50px; text-align: center;">Label 2</div>
  <div style="width: 50px; text-align: center;">Label 3</div>
  <div style="width: 50px; text-align: center;">Label 4</div>
  <div style="width: 50px; text-align: center;">Label 5</div>
</div>
     
        </div>
        </div>
        

 
        <div class="card col-6" style="border-left:1px solid lightgrey;">
        <!-- table -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Transaction ID</th>
      <th>Date</th>
      <th>Customer</th>
     
      <th>Price</th>
      <th>Total</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>12345</td>
      <td>2023-08-14</td>
     
      <td>1</td>
      <td>$999</td>
      <td>$999</td>
      <td style="color:red">Failed</td>
    </tr>
    <tr>
      <td>67890</td>
      <td>2023-08-15</td>
     
      <td>2</td>
      <td>$1,198</td>
      <td>$2,396</td>
      <td style="color:green">Success</td>
    </tr>
    <tr>
      <td>67890</td>
      <td>2023-08-15</td>
      
      <td>2</td>
      <td>$1,198</td>
      <td>$2,396</td>
      <td style="color:green">Success</td>
    </tr>
    <tr>
      <td>12345</td>
      <td>2023-08-14</td>
     
      <td>1</td>
      <td>$999</td>
      <td>$999</td>
      <td style="color:red">Failed</td>
    </tr>
    <tr>
      <td>67890</td>
      <td>2023-08-15</td>
      
      <td>2</td>
      <td>$1,198</td>
      <td>$2,396</td>
      <td style="color:green">Success</td>
    </tr>
    <tr>
      <td>67890</td>
      <td>2023-08-15</td>
     
      <td>2</td>
      <td>$1,198</td>
      <td>$2,396</td>
      <td style="color:green">Success</td>
    </tr>
    <tr>
      <td>12345</td>
      <td>2023-08-14</td>
     
      <td>1</td>
      <td>$999</td>
      <td>$999</td>
      <td style="color:red">Failed</td>
    </tr>
    <tr>
      <td>67890</td>
      <td>2023-08-15</td>
    
      <td>2</td>
      <td>$1,198</td>
      <td>$2,396</td>
      <td style="color:green">Success</td>
    </tr>
    <tr>
      <td>12345</td>
      <td>2023-08-14</td>
     
      <td>1</td>
      <td>$999</td>
      <td>$999</td>
      <td style="color:red">Failed</td>
    </tr>
  </tbody>
</table>

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
