@extends('layouts/layoutMaster')

@section('title', 'eCommerce Settings Checkout - Apps')

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
          <a class="nav-link active" href="javascript:void(0);">
            <i class="ti ti-shopping-cart ti-sm me-1_5"></i>
            <span class="align-middle">Checkout</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/shipping')}}">
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
      <!-- Checkout Tab -->
      <div class="tab-pane fade show active " id="checkout" role="tabpanel">
        <div class="card mb-6">
          <div class="card-header">
            <div class="card-title m-0">
              <h5 class="m-0">Customer contact method</h5>
              <p class="my-0 card-subtitle">Select what contact method customers use to check out.</p>
            </div>
          </div>

          <div class="card-body">
            <div class="form-check my-2 ms-2">
              <input class="form-check-input" type="radio" name="contactMethod" id="contactPhone" checked>
              <label class="form-check-label text-heading" for="contactPhone">
                Phone number
              </label>
            </div>
            <div class="form-check mb-6 mt-4 ms-2">
              <input class="form-check-input" type="radio" name="contactMethod" id="contactMail">
              <label class="form-check-label text-heading" for="contactMail">
                Email
              </label>
            </div>
            <div class="alert d-flex align-items-center alert-info mb-0 h5" role="alert">
              <span class="alert-icon rounded-2">
                <i class="ti ti-info-circle ti-md"></i>
              </span>
              To send SMS updates, you need to install an SMS App.
            </div>
          </div>
        </div>

        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title m-0">Customer information</h5>
          </div>
          <div class="card-body">
            <div class="mb-4">
              <p class="mb-0">Full name</p>
              <div class="form-check my-2 ms-2">
                <input class="form-check-input" type="radio" name="fullName" id="last_name" checked>
                <label class="form-check-label text-heading" for="last_name">
                  Only require last name
                </label>
              </div>
              <div class="form-check mt-4 ms-2">
                <input class="form-check-input" type="radio" name="fullName" id="last_and_first_name">
                <label class="form-check-label text-heading" for="last_and_first_name">
                  Require first and last name
                </label>
              </div>
            </div>
            <div class="mb-4">
              <p class="mb-0">Company name</p>
              <div class="form-check my-2 ms-2">
                <input class="form-check-input" type="radio" name="companyName" id="dont_include_name" checked>
                <label class="form-check-label text-heading" for="dont_include_name">
                  Don't include name
                </label>
              </div>
              <div class="form-check mt-4 ms-2">
                <input class="form-check-input" type="radio" name="companyName" id="optional_name">
                <label class="form-check-label text-heading" for="optional_name">
                  Optional
                </label>
              </div>
              <div class="form-check mt-4 ms-2">
                <input class="form-check-input" type="radio" name="companyName" id="required_name">
                <label class="form-check-label text-heading" for="required_name">
                  Required
                </label>
              </div>
            </div>
            <div class="mb-4">
              <p class="mb-0">Address line 2 (apartment, unit, etc.)</p>
              <div class="form-check my-2 ms-2">
                <input class="form-check-input" type="radio" name="addressLine" id="dont_include_address" checked>
                <label class="form-check-label text-heading" for="dont_include_address">
                  Don't include name
                </label>
              </div>
              <div class="form-check mt-4 ms-2">
                <input class="form-check-input" type="radio" name="addressLine" id="optional_address">
                <label class="form-check-label text-heading" for="optional_address">
                  Optional
                </label>
              </div>
              <div class="form-check mt-4 ms-2">
                <input class="form-check-input" type="radio" name="addressLine" id="required_address">
                <label class="form-check-label text-heading" for="required_address">
                  Required
                </label>
              </div>
            </div>
            <div class="mb-4">
              <p class="mb-0">Shipping address phone number</p>
              <div class="form-check mt-4 ms-2">
                <input class="form-check-input" type="radio" name="shippingAddress" id="dont_include_ship_address" checked>
                <label class="form-check-label text-heading" for="dont_include_ship_address">
                  Don't include name
                </label>
              </div>
              <div class="form-check mt-4 ms-2">
                <input class="form-check-input" type="radio" name="shippingAddress" id="optional_ship_address">
                <label class="form-check-label text-heading" for="optional_ship_address">
                  Optional
                </label>
              </div>
              <div class="form-check mt-4 ms-2">
                <input class="form-check-input" type="radio" name="shippingAddress" id="required_ship_address">
                <label class="form-check-label text-heading" for="required_ship_address">
                  Required
                </label>
              </div>
            </div>

          </div>
        </div>

        <div class="d-flex justify-content-end gap-4">
          <button type="reset" class="btn btn-label-secondary">Discard</button>
          <a class="btn btn-primary" href="{{url('/app/ecommerce/settings/shipping')}}">Save Changes</a>
        </div>

      </div>

    </div>
  </div>
  <!-- /Options-->
</div>

@endsection
