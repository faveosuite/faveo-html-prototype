@extends('layouts/layoutMaster')

@section('title', 'eCommerce Settings Shipping - Apps')

@section('page-script')
@vite('resources/assets/js/app-ecommerce-settings.js')
@endsection

@section('content')
<div class="row g-6">

  <!-- Navigation -->
  <div class="col-12 col-lg-4">
    <div class="d-flex justify-content-between flex-column mb-4 mb-md-0">
      <h5 class="mb-4">Getting Started</h5>
      <ul class="nav nav-align-left nav-pills flex-column">
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/details')}}">
            <i class="ti ti-building-store ti-sm me-1_5"></i>
            <span class="align-middle">Store details</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/payments')}}">
            <i class="ti ti-credit-card ti-sm me-1_5"></i>
            <span class="align-middle">Payments</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/checkout')}}">
            <i class="ti ti-shopping-cart ti-sm me-1_5"></i>
            <span class="align-middle">Checkout</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link active" href="javascript:void(0);">
            <i class="ti ti-discount-2 ti-sm me-1_5"></i>
            <span class="align-middle">Shipping & delivery</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/locations')}}">
            <i class="ti ti-map-pin ti-sm me-1_5"></i>
            <span class="align-middle">Locations</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/notifications')}}">
            <i class="ti ti-bell-ringing ti-sm me-1_5"></i>
            <span class="align-middle">Notifications</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /Navigation -->

  <!-- Options -->
  <div class="col-12 col-lg-8 pt-6 pt-lg-0">
    <div class="tab-content p-0">
      <!-- Shipping & delivery Tab -->
      <div class="tab-pane fade show active" id="shipping_delivery" role="tabpanel">
        <div class="card mb-6">
          <div class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-2">
            <div class="card-title m-0">
              <h5 class="m-0">Shipping zones</h5>
              <p class="my-0 card-subtitle">Choose where you ship and how much you charge for shipping at check out.</p>
            </div>
            <a href="javascript:void(0);" class="fw-medium">Create zone</a>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-sm me-2">
                  <img class="rounded-circle mb-4" src="{{asset('assets/img/avatars/1.png')}}" height="34" width="34" alt="User avatar" />
                </div>
                <div class="d-flex flex-column">
                  <h6 class="mb-0">Domestic</h6>
                  <p class="mb-0 small">United states of America</p>
                </div>
              </div>
              <div>
                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-text-secondary text-secondary rounded-pill me-1"><i class='ti ti-pencil'></i></a>
                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-text-secondary text-secondary rounded-pill"><i class='ti ti-trash'></i></a>
              </div>
            </div>

            <div class="card mb-4 shadow-none border border-top-0">
              <div class="table-responsive text-nowrap rounded">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Rate Name</th>
                      <th>Condition</th>
                      <th>Price</th>
                      <th class="text-end">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Weight</td>
                      <td>5kg -10kg</td>
                      <td>
                        $9
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit me-1"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>VAT</td>
                      <td>12%</td>
                      <td>
                        $25
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="border-transparent">
                      <td>Duty</td>
                      <td>-</td>
                      <td>-</td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <button class="btn btn-label-primary mb-6">Add Rate</button>

            <div class="d-flex justify-content-between align-items-center mb-4">
              <div class="d-flex align-items-center">
                <div class="me-2">
                  <i class="fi fi-us fis rounded-circle fs-3"></i>
                </div>
                <div class="d-flex flex-column">
                  <h6 class="mb-0">International</h6>
                  <p class="mb-0 small">United states of America</p>
                </div>
              </div>
              <div>
                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-text-secondary text-secondary rounded-pill me-1"><i class='ti ti-pencil'></i></a>
                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-text-secondary text-secondary rounded-pill"><i class='ti ti-trash'></i></a>
              </div>
            </div>

            <div class="card mb-4 shadow-none border border-top-0">
              <div class="table-responsive text-nowrap rounded">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Rate Name</th>
                      <th>Condition</th>
                      <th>Price</th>
                      <th class="text-end">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Weight</td>
                      <td>5kg -10kg</td>
                      <td>
                        $19
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit me-1"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>VAT</td>
                      <td>12%</td>
                      <td>
                        $25
                      </td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="border-transparent">
                      <td>Duty</td>
                      <td>Japan</td>
                      <td>$49</td>
                      <td class="text-end">
                        <div class="dropdown pe-4">
                          <button type="button" class="btn btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical ti-md"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit me-2"></i> Edit</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <button class="btn btn-label-primary">Add rate</button>
          </div>
        </div>

        <div class="d-flex justify-content-end gap-4">
          <button type="reset" class="btn btn-label-secondary">Discard</button>
          <a class="btn btn-primary" href="{{url('/app/ecommerce/settings/locations')}}">Save Changes</a>
        </div>
      </div>
    </div>
    <!-- /Options-->
  </div>
</div>

@endsection
