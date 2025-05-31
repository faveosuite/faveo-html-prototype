@extends('layouts/layoutMaster')

@section('title', 'eCommerce Settings Details - Apps')

@section('vendor-style')
@vite('resources/assets/vendor/libs/select2/select2.scss')
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js'
])
@endsection

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
          <a class="nav-link active" href="javascript:void(0);">
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
      <!-- Store Details Tab -->
      <div class="tab-pane fade show active" id="store_details" role="tabpanel">


        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title m-0">Profile</h5>
          </div>
          <div class="card-body">
            <div class="row mb-6 g-6">
              <div class="col-12 col-md-6"><label class="form-label mb-1" for="ecommerce-settings-details-name">Store Name</label>
                <input type="text" class="form-control" id="ecommerce-settings-details-name" placeholder="John Doe" name="settingsDet" aria-label="settings Details">
              </div>

              <div class="col-12 col-md-6"><label class="form-label mb-1" for="ecommerce-settings-details-phone">Phone</label>
                <input type="tel" class="form-control phone-mask" id="ecommerce-settings-details-phone" placeholder="+(123) 456-7890" name="phone" aria-label="phone"></div>

              <div class="col-12 col-md-6"><label class="form-label mb-1" for="ecommerce-settings-details-email">Store contact email</label>
                <input type="email" class="form-control" id="ecommerce-settings-details-email" placeholder="johndoe@gmail.com" name="email" aria-label="email"></div>

              <div class="col-12 col-md-6"><label class="form-label mb-1" for="ecommerce-settings-sender-email">Sender email</label>
                <input type="email" class="form-control" id="ecommerce-settings-sender-email" placeholder="johndoe@gmail.com" name="sender_email" aria-label="sender email"></div>
            </div>

            <div class="alert d-flex align-items-center alert-warning mb-0 h5" role="alert">
              <span class="alert-icon me-4 rounded-2">
                <i class="ti ti-bell ti-md"></i>
              </span>
              Confirm that you have access to johndoe@gmail.com in sender email settings.
            </div>
          </div>
        </div>

        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title m-0">Billing information</h5>
          </div>
          <div class="card-body">
            <div class="row g-6">
              <div class="col-12 col-md-6">
                <label class="form-label mb-1" for="business-name">Legal business name</label>
                <input type="text" id="business-name" class="form-control" placeholder="Business name" />
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label mb-1" for="country_region">Country/region</label>
                <select id="country_region" class="select2 form-select" data-placeholder="United States">
                  <option value="">United States</option>
                  <option value="Australia">Australia</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Canada">Canada</option>
                  <option value="China">China</option>
                  <option value="France">France</option>
                  <option value="Germany">Germany</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Japan">Japan</option>
                  <option value="Korea">Korea, Republic of</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Russia">Russian Federation</option>
                  <option value="South Africa">South Africa</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States">United States</option>
                </select>

              </div>
              <div class="col-12 col-md-6">
                <label class="form-label mb-1" for="bill_address">Address</label>
                <input type="text" id="bill_address" class="form-control" placeholder="Address" />
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label mb-1" for="apa_suite">Apartment, suite, etc.</label>
                <input type="text" id="apa_suite" class="form-control" placeholder="Apartment, suite, etc." />
              </div>
              <div class="col-12 col-md-4">
                <label class="form-label mb-1" for="bill_city">City</label>
                <input type="text" id="bill_city" class="form-control" placeholder="City" />
              </div>
              <div class="col-12 col-md-4">
                <label class="form-label mb-1" for="bill_state">State</label>
                <input type="text" id="bill_state" class="form-control" placeholder="State" />
              </div>
              <div class="col-12 col-md-4">
                <label class="form-label mb-1" for="bill_pincode">PIN Code</label>
                <input type="number" id="bill_pincode" class="form-control" placeholder="PIN Code" min="0" max="999999" />
              </div>

            </div>
          </div>
        </div>

        <div class="card mb-6">
          <div class="card-header">
            <div class="card-title mb-0">
              <h5 class="m-0">Time zone and units of measurement</h5>
              <p class="my-0 card-subtitle">Used to calculate product prices, shipping weighs, and order times.</p>
            </div>
          </div>
          <div class="card-body">
            <div class="row g-6">
              <div class="col-12">
                <label for="timeZones" class="form-label mb-1">Time zone</label>
                <select id="timeZones" class="select2 form-select" data-placeholder="(GMT-12:00) International Date Line West">
                  <option value="">(GMT-12:00) International Date Line West</option>
                  <option value="-12">(GMT-12:00) International Date Line West</option>
                  <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                  <option value="-10">(GMT-10:00) Hawaii</option>
                  <option value="-9">(GMT-09:00) Alaska</option>
                  <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                  <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                  <option value="-7">(GMT-07:00) Arizona</option>
                  <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                  <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                  <option value="-6">(GMT-06:00) Central America</option>
                  <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                  <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                  <option value="-6">(GMT-06:00) Saskatchewan</option>
                  <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                  <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                  <option value="-5">(GMT-05:00) Indiana (East)</option>
                  <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                  <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                </select>
              </div>
              <div class="col-12 col-md-6">
                <label for="unitSystemDropdown" class="form-label mb-1">Unit system</label>
                <select id="unitSystemDropdown" class="select2 form-select" data-placeholder="Metric">
                  <option value="">Metric</option>
                  <option value="metric">Metric</option>
                  <option value="imperial">Imperial</option>
                  <option value="us">US Customary</option>
                  <option value="si">International System</option>
                </select>

              </div>
              <div class="col-12 col-md-6">
                <label for="weightUnits" class="form-label mb-1">Default weight unit</label>
                <select id="weightUnits" class="select2 form-select" data-placeholder="Kilograms">
                  <option value="">Kilograms</option>
                  <option value="kg">Kilograms</option>
                  <option value="lb">Pounds</option>
                  <option value="g">Grams</option>
                  <option value="mg">Milligrams</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-6">
          <div class="card-header">
            <div class="card-title mb-0">
              <h5 class="m-0">Store currency</h5>
              <p class="my-0 card-subtitle">The currency your products are sold in.</p>
            </div>
          </div>
          <div class="card-body">
            <div>
              <label for="currency-store" class="form-label mb-1">Store currency</label>
              <select id="currency-store" class="select2 form-select" data-placeholder="Store currency">
                <option value="">Store Currency</option>
                <option value="usd">USD</option>
                <option value="euro">Euro</option>
                <option value="pound">Pound</option>
                <option value="bitcoin">Bitcoin</option>
              </select>
            </div>
          </div>
        </div>

        <div class="card mb-6">
          <div class="card-header">
            <div class="card-title mb-0">
              <h5 class="m-0">Order id format</h5>
              <p class="my-0 card-subtitle">Shown on the Orders page, customer pages, and customer order notifications to identify orders.</p>
            </div>
          </div>
          <div class="card-body">
            <div class="row g-6">
              <div class="col-12 col-md-6"><label class="form-label mb-1" for="ecommerce-settings-details-prefix">Prefix</label>
                <div class="input-group input-group-merge">
                  <span class="input-group-text text-muted">#</span>
                  <input type="number" class="form-control" id="ecommerce-settings-details-prefix" name="prefix" aria-label="Prefix" min="0">
                </div>
                <p class="mb-0 pt-2">Your order ID will appear as #1001, #1002, #1003 ...</p>
              </div>
              <div class="col-12 col-md-6"><label class="form-label mb-1" for="ecommerce-settings-sender-suffix">Suffix</label>
                <input type="text" class="form-control" id="ecommerce-settings-sender-suffix" name="suffix" aria-label="Suffix"></div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-end gap-4">
          <button type="reset" class="btn btn-label-secondary">Discard</button>
          <a class="btn btn-primary" href="{{url('/app/ecommerce/settings/payments')}}">Save Changes</a>
        </div>

      </div>
    </div>

  </div>
  <!-- /Options-->
</div>

@endsection
