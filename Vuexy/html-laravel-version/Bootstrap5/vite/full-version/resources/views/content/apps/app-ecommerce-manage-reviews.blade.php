@extends('layouts/layoutMaster')

@section('title', 'eCommerce Manage Review - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss',
  'resources/assets/vendor/libs/rateyo/rateyo.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
  'resources/assets/vendor/libs/rateyo/rateyo.js'
])
@endsection

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-ecommerce.scss')
@endsection

@section('page-script')
@vite([
  'resources/assets/js/app-ecommerce-reviews.js',
  'resources/assets/js/extended-ui-star-ratings.js'
])
@endsection

@section('content')
<div class="row mb-6 g-6">
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-body row widget-separator g-0">
        <div class="col-sm-5 border-shift border-end pe-sm-6">
          <h3 class="text-primary d-flex align-items-center gap-2 mb-2">4.89<i class="ti ti-star-filled ti-32px"></i></h3>
          <p class="h6 mb-2">Total 187 reviews</p>
          <p class="pe-2 mb-2">All reviews are from genuine customers</p>
          <span class="badge bg-label-primary mb-4 mb-sm-0">+5 This week</span>
          <hr class="d-sm-none">
        </div>

        <div class="col-sm-7 gap-2 text-nowrap d-flex flex-column justify-content-between ps-sm-6 pt-2 py-sm-2">
          <div class="d-flex align-items-center gap-2">
            <small>5 Star</small>
            <div class="progress w-100 bg-label-primary" style="height:8px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="61.50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">124</small>
          </div>
          <div class="d-flex align-items-center gap-2">
            <small>4 Star</small>
            <div class="progress w-100 bg-label-primary" style="height:8px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">40</small>
          </div>
          <div class="d-flex align-items-center gap-2">
            <small>3 Star</small>
            <div class="progress w-100 bg-label-primary" style="height:8px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">12</small>
          </div>
          <div class="d-flex align-items-center gap-2">
            <small>2 Star</small>
            <div class="progress w-100 bg-label-primary" style="height:8px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 18%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">7</small>
          </div>
          <div class="d-flex align-items-center gap-2">
            <small>1 Star</small>
            <div class="progress w-100 bg-label-primary" style="height:8px;">
              <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="w-px-20 text-end">2</small>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-body row">
        <div class="col-sm-5">
          <div class="mb-12">
            <h5 class="mb-2 text-nowrap">Reviews statistics</h5>
            <p class="mb-0"> <span class="me-2">12 New reviews</span> <span class="badge bg-label-success">+8.4%</span></p>
          </div>

          <div>
            <h6 class="mb-2 fw-normal">
              <span class="text-success me-1">87%</span>Positive reviews
            </h6>
            <small>Weekly Report</small>
          </div>
        </div>
        <div class="col-sm-7 d-flex justify-content-sm-end align-items-end">
          <div id="reviewsChart"></div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- review List Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="datatables-review table border-top">
      <thead>
        <tr>
          <th></th>
          <th></th>
          <th>Product</th>
          <th class="text-nowrap">Reviewer</th>
          <th>Review</th>
          <th>Date</th>
          <th class="text-nowrap">Status</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

@endsection
