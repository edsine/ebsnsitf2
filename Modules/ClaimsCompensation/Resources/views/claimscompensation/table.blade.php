

  <div class="container">
    <h1>CLAIMS NOTIFICATION </h1>
    <ul class="nav nav-tabs" id="myTab">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#accident">ACCIDENT CLAIMS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#dealth">DEALTH CLAIMS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#disease">DISEASE CLAIMS</a>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="accident">
       @include('claimscompensation::claimscompensation.accident');
      </div>
      <div class="tab-pane fade" id="dealth">
        @include('claimscompensation::claimscompensation.death');
      </div>
      <div class="tab-pane fade" id="disease">
       @include('claimscompensation::claimscompensation.disease');
      </div>
    </div>
  </div>

