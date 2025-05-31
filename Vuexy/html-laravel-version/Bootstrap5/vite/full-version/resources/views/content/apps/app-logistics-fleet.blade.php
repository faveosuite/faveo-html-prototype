@extends('layouts/layoutMaster')

@section('title', 'Logistics Fleet - Apps')

@section('vendor-style')
@vite('resources/assets/vendor/libs/mapbox-gl/mapbox-gl.scss')
@endsection

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-logistics-fleet.scss')
@endsection

@section('vendor-script')
@vite('resources/assets/vendor/libs/mapbox-gl/mapbox-gl.js')
@endsection

@section('page-script')
@vite('resources/assets/js/app-logistics-fleet.js')
@endsection

@section('content')

@if(env('APP_ENV') !== 'production')
<div class="alert alert-outline-primary alert-dismissible" role="alert">
  Fleet page is using Mapbox to display maps. The maps on the fleet page may not load on your localhost or domain because you need to add your own access token for Mapbox. <br />For more details refer to the <a href="https://docs.mapbox.com/mapbox-gl-js/guides/" target="_blank">Mapbox</a> section in the <a href="{{config('variables.documentation')}}/faq.html#mapbox-not-loading" class="alert-link" target="_blank">documentation</a>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
  </button>
</div>
@endif

<div class="card overflow-hidden">

  <!-- Map Menu Wrapper -->
  <div class="d-flex app-logistics-fleet-wrapper">

    <!-- Map Menu Button when screen is < md -->
    <div class="flex-shrink-0 position-fixed m-6 d-md-none w-auto z-1">
      <button class="btn btn-white btn-white-dark-variant z-2 p-2" data-bs-toggle="sidebar" data-overlay="" data-target="#app-logistics-fleet-sidebar"><i class="ti ti-menu-2 ti-md"></i></button>
    </div>

    <!-- Map Menu -->
    <div class="app-logistics-fleet-sidebar col h-100" id="app-logistics-fleet-sidebar">
      <div class="card-header border-0 pt-6 pb-1 d-flex justify-content-between">
        <h5 class="mb-0 card-title">Fleet</h5>
        <!-- Sidebar close button -->
        <i class="ti ti-x ti-xs cursor-pointer close-sidebar d-md-none btn btn-sm btn-icon btn-text-secondary rounded-pill p-0" data-bs-toggle="sidebar" data-overlay data-target="#app-logistics-fleet-sidebar"></i>
      </div>
      <!-- Sidebar when screen < md -->
      <div class="card-body p-0 logistics-fleet-sidebar-body">
        <!-- Menu Accordion -->
        <div class="accordion py-2 px-1" id="fleet" data-bs-toggle="sidebar" data-overlay data-target="#app-logistics-fleet-sidebar">
          <!-- Fleet 1 -->
          <div class="accordion-item border-0 active mb-0 shadow-none" id="fl-1">
            <div class="accordion-header" id="fleetOne">
              <div role="button" class="accordion-button shadow-none align-items-center" data-bs-toggle="collapse" data-bs-target="#fleet1" aria-expanded="true" aria-controls="fleet1">
                <div class="d-flex align-items-center">
                  <div class="avatar-wrapper">
                    <div class="avatar me-4">
                      <span class="avatar-initial rounded-circle bg-label-secondary"><i class="ti ti-car ti-lg"></i></span>
                    </div>
                  </div>
                  <span class="d-flex flex-column gap-1">
                    <span class="text-heading">VOL-342808</span>
                    <span class="text-body">Chelsea, NY, USA</span>
                  </span>
                </div>
              </div>
            </div>
            <div id="fleet1" class="accordion-collapse collapse show" data-bs-parent="#fleet">
              <div class="accordion-body pt-4 pb-0">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-normal mb-1">Delivery Process</h6>
                  <p class="text-body mb-1">88%</p>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <ul class="timeline ps-4 mt-6">
                  <li class="timeline-item ps-6 pb-3 border-left-dashed">
                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                      <i class='ti ti-circle-check'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-success text-uppercase">tracking number created</small>
                      </div>
                      <h6 class="my-50">Veronica Herman</h6>
                      <small class="text-body">Sep 01, 7:53 AM</small>
                    </div>
                  </li>
                  <li class="timeline-item ps-6 pb-3 border-left-dashed">
                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                      <i class='ti ti-circle-check'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-success text-uppercase">out for delivery</small>
                      </div>
                      <h6 class="my-50">Veronica Herman</h6>
                      <small class="text-body">Sep 03, 8:02 AM</small>
                    </div>
                  </li>
                  <li class="timeline-item ps-6 border-transparent">
                    <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                      <i class='ti ti-map-pin mt-1'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-primary text-uppercase fw-medium">arriving</small>
                      </div>
                      <h6 class="my-50">Veronica Herman</h6>
                      <small class="text-body">Sep 04, 8:18 AM</small>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Fleet 2 -->
          <div class="accordion-item border-0 mb-0 shadow-none" id="fl-2">
            <div class="accordion-header" id="fleetTwo">
              <div role="button" class="accordion-button collapsed shadow-none align-items-center" data-bs-toggle="collapse" data-bs-target="#fleet2" aria-expanded="true" aria-controls="fleet2">

                <div class="d-flex align-items-center">
                  <div class="avatar-wrapper">
                    <div class="avatar me-4">
                      <span class="avatar-initial rounded-circle bg-label-secondary"><i class="ti ti-truck ti-sm"></i></span>
                    </div>
                  </div>
                  <span class="d-flex flex-column gap-1">
                    <span class="text-heading">VOL-954784</span>
                    <span class="text-body">Lincoln Harbor, NY, USA</span>
                  </span>
                </div>
              </div>
            </div>
            <div id="fleet2" class="accordion-collapse collapse" data-bs-parent="#fleet">
              <div class="accordion-body pt-4 pb-0">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-normal mb-1">Delivery Process</h6>
                  <p class="text-body mb-1">100%</p>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <ul class="timeline ps-4 mt-6">
                  <li class="timeline-item ps-6 pb-3 border-left-dashed">
                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                      <i class='ti ti-circle-check'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-success text-uppercase">tracking number created</small>
                      </div>
                      <h6 class="my-50">Myrtle Ullrich</h6>
                      <small class="text-body">Sep 01, 7:53 AM</small>
                    </div>
                  </li>
                  <li class="timeline-item ps-6 pb-3 border-left-dashed">
                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                      <i class='ti ti-circle-check'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-success text-uppercase">out for delivery</small>
                      </div>
                      <h6 class="my-50">Myrtle Ullrich</h6>
                      <small class="text-body">Sep 03, 8:02 AM</small>
                    </div>
                  </li>
                  <li class="timeline-item ps-6 border-transparent">
                    <span class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                      <i class='ti ti-map-pin mt-1'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-primary text-uppercase fw-medium">arrived</small>
                      </div>
                      <h6 class="my-50">Myrtle Ullrich</h6>
                      <small class="text-body">Sep 04, 8:18 AM</small>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Fleet 3 -->
          <div class="accordion-item border-0 mb-0 shadow-none" id="fl-3">
            <div class="accordion-header" id="fleetThree">
              <div role="button" class="accordion-button collapsed shadow-none align-items-center" data-bs-toggle="collapse" data-bs-target="#fleet3" aria-expanded="true" aria-controls="fleet3">

                <div class="d-flex align-items-center">
                  <div class="avatar-wrapper">
                    <div class="avatar me-4">
                      <span class="avatar-initial rounded-circle bg-label-secondary"><i class="ti ti-truck ti-sm"></i></span>
                    </div>
                  </div>
                  <span class="d-flex flex-column gap-1">
                    <span class="text-heading">VOL-342808</span>
                    <span class="text-body">Midtown East, NY, USA</span>
                  </span>
                </div>
              </div>
            </div>
            <div id="fleet3" class="accordion-collapse collapse" data-bs-parent="#fleet">
              <div class="accordion-body pt-4 pb-0">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-normal mb-1">Delivery Process</h6>
                  <p class="text-body mb-1">60%</p>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <ul class="timeline ps-4 mt-6">
                  <li class="timeline-item ps-6 pb-3 border-left-dashed">
                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                      <i class='ti ti-circle-check'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-success text-uppercase">tracking number created</small>
                      </div>
                      <h6 class="my-50">Barry Schowalter</h6>
                      <small class="text-body">Sep 01, 7:53 AM</small>
                    </div>
                  </li>
                  <li class="timeline-item ps-6 pb-3 border-left-dashed">
                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                      <i class='ti ti-circle-check'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-success text-uppercase">out for delivery</small>
                      </div>
                      <h6 class="my-50">Barry Schowalter</h6>
                      <small class="text-body">Sep 03, 8:02 AM</small>
                    </div>
                  </li>
                  <li class="timeline-item ps-6 border-transparent">
                    <span class="timeline-indicator-advanced timeline-indicator-secondary border-0 shadow-none">
                      <i class='ti ti-map-pin mt-1'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-secondary text-uppercase fw-medium">arriving</small>
                      </div>
                      <h6 class="my-50">Barry Schowalter</h6>
                      <small class="text-body">Sep 04, 8:18 AM</small>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Fleet 4 -->
          <div class="accordion-item border-0 mb-4 shadow-none" id="fl-4">
            <div class="accordion-header" id="fleetFour">
              <div role="button" class="accordion-button collapsed shadow-none align-items-center" data-bs-toggle="collapse" data-bs-target="#fleet4" aria-expanded="true" aria-controls="fleet4">

                <div class="d-flex align-items-center">
                  <div class="avatar-wrapper">
                    <div class="avatar me-4">
                      <span class="avatar-initial rounded-circle bg-label-secondary"><i class="ti ti-truck ti-sm"></i></span>
                    </div>
                  </div>
                  <span class="d-flex flex-column gap-1">
                    <span class="text-heading">VOL-343908</span>
                    <span class="text-body">Hoboken, NY, USA</span>
                  </span>
                </div>
              </div>
            </div>
            <div id="fleet4" class="accordion-collapse collapse" data-bs-parent="#fleet">
              <div class="accordion-body pt-4 pb-0">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="fw-normal mb-1">Delivery Process</h6>
                  <p class="text-body mb-1">28%</p>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <ul class="timeline ps-4 mt-6">
                  <li class="timeline-item ps-6 pb-3 border-left-dashed">
                    <span class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                      <i class='ti ti-circle-check'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-success text-uppercase">tracking number created</small>
                      </div>
                      <h6 class="my-50">Helen Jacobs</h6>
                      <small class="text-body">Sep 01, 7:53 AM</small>
                    </div>
                  </li>
                  <li class="timeline-item ps-6 pb-3 border-left-dashed">
                    <span class="timeline-indicator-advanced timeline-indicator-secondary border-0 shadow-none">
                      <i class='ti ti-circle-check'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-secondary text-uppercase fw-medium">out for delivery</small>
                      </div>
                      <h6 class="my-50">Helen Jacobs</h6>
                      <small class="text-body">Sep 03, 8:02 AM</small>
                    </div>
                  </li>
                  <li class="timeline-item ps-6 border-transparent">
                    <span class="timeline-indicator-advanced timeline-indicator-secondary border-0 shadow-none">
                      <i class='ti ti-map-pin mt-1'></i>
                    </span>
                    <div class="timeline-event ps-0 pb-0">
                      <div class="timeline-header">
                        <small class="text-secondary text-uppercase fw-medium">arriving</small>
                      </div>
                      <h6 class="my-50">Helen Jacobs</h6>
                      <small class="text-body">Sep 04, 8:18 AM</small>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mapbox Map container -->
    <div class="col h-100 map-container">
      <!-- Map -->
      <div id="map" class="h-100 w-100"></div>
    </div>

    <!-- Overlay Hidden -->
    <div class="app-overlay d-none"></div>
  </div>
</div>

@endsection
