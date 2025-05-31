@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Multi Steps Sign-up - Pages')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.scss',
  'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

@section('page-style')
@vite([
  'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/pages-auth-multisteps.js'
])
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover authentication-bg">
  <!-- Logo -->
  <a href="{{url('/')}}" class="app-brand auth-cover-brand">
    <span class="app-brand-logo demo">@include('_partials.macros',['height'=>20,'withbg' => "fill: #fff;"])</span>
    <span class="app-brand-text demo text-heading fw-bold">{{ config('variables.templateName') }}</span>
  </a>
  <!-- /Logo -->
  <div class="authentication-inner row">

    <!-- Left Text -->
    <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-center p-5 auth-cover-bg-color position-relative auth-multisteps-bg-height">
      <img src="{{ asset('assets/img/illustrations/auth-register-multisteps-illustration.png') }}" alt="auth-register-multisteps" class="img-fluid" width="280">

      <img src="{{ asset('assets/img/illustrations/auth-register-multisteps-shape-'.$configData['style'].'.png') }}" alt="auth-register-multisteps" class="platform-bg" data-app-light-img="illustrations/auth-register-multisteps-shape-light.png" data-app-dark-img="illustrations/auth-register-multisteps-shape-dark.png">
    </div>
    <!-- /Left Text -->

    <!--  Multi Steps Registration -->
    <div class="d-flex col-lg-8 align-items-center justify-content-center authentication-bg p-5">
      <div class="w-px-700">
        <div id="multiStepsValidation" class="bs-stepper border-none shadow-none mt-5">
          <div class="bs-stepper-header border-none pt-12 px-0">
            <div class="step" data-target="#accountDetailsValidation">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-file-analytics ti-md"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Account</span>
                  <span class="bs-stepper-subtitle">Account Details</span>
                </span>
              </button>
            </div>
            <div class="line">
              <i class="ti ti-chevron-right"></i>
            </div>
            <div class="step" data-target="#personalInfoValidation">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-user ti-md"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Personal</span>
                  <span class="bs-stepper-subtitle">Enter Information</span>
                </span>
              </button>
            </div>
            <div class="line">
              <i class="ti ti-chevron-right"></i>
            </div>
            <div class="step" data-target="#billingLinksValidation">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-credit-card ti-md"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Billing</span>
                  <span class="bs-stepper-subtitle">Payment Details</span>
                </span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content px-0">
            <form id="multiStepsForm" onSubmit="return false">
              <!-- Account Details -->
              <div id="accountDetailsValidation" class="content">
                <div class="content-header mb-6">
                  <h4 class="mb-0">Account Information</h4>
                  <p class="mb-0">Enter Your Account Details</p>
                </div>
                <div class="row g-6">
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsUsername">Username</label>
                    <input type="text" name="multiStepsUsername" id="multiStepsUsername" class="form-control" placeholder="johndoe" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsEmail">Email</label>
                    <input type="email" name="multiStepsEmail" id="multiStepsEmail" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe" />
                  </div>
                  <div class="col-sm-6 form-password-toggle">
                    <label class="form-label" for="multiStepsPass">Password</label>
                    <div class="input-group input-group-merge">
                      <input type="password" id="multiStepsPass" name="multiStepsPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsPass2" />
                      <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i class="ti ti-eye-off"></i></span>
                    </div>
                  </div>
                  <div class="col-sm-6 form-password-toggle">
                    <label class="form-label" for="multiStepsConfirmPass">Confirm Password</label>
                    <div class="input-group input-group-merge">
                      <input type="password" id="multiStepsConfirmPass" name="multiStepsConfirmPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsConfirmPass2" />
                      <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i class="ti ti-eye-off"></i></span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label class="form-label" for="multiStepsURL">Profile Link</label>
                    <input type="text" name="multiStepsURL" id="multiStepsURL" class="form-control" placeholder="johndoe/profile" aria-label="johndoe" />
                  </div>
                  <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-label-secondary btn-prev" disabled> <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                  </div>
                </div>
              </div>
              <!-- Personal Info -->
              <div id="personalInfoValidation" class="content">
                <div class="content-header mb-6">
                  <h4 class="mb-0">Personal Information</h4>
                  <p class="mb-0">Enter Your Personal Information</p>
                </div>
                <div class="row g-6">
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsFirstName">First Name</label>
                    <input type="text" id="multiStepsFirstName" name="multiStepsFirstName" class="form-control" placeholder="John" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsLastName">Last Name</label>
                    <input type="text" id="multiStepsLastName" name="multiStepsLastName" class="form-control" placeholder="Doe" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsMobile">Mobile</label>
                    <div class="input-group">
                      <span class="input-group-text">US (+1)</span>
                      <input type="text" id="multiStepsMobile" name="multiStepsMobile" class="form-control multi-steps-mobile" placeholder="202 555 0111" />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsPincode">Pincode</label>
                    <input type="text" id="multiStepsPincode" name="multiStepsPincode" class="form-control multi-steps-pincode" placeholder="Postal Code" maxlength="6" />
                  </div>
                  <div class="col-md-12">
                    <label class="form-label" for="multiStepsAddress">Address</label>
                    <input type="text" id="multiStepsAddress" name="multiStepsAddress" class="form-control" placeholder="Address" />
                  </div>
                  <div class="col-md-12">
                    <label class="form-label" for="multiStepsArea">Landmark</label>
                    <input type="text" id="multiStepsArea" name="multiStepsArea" class="form-control" placeholder="Area/Landmark" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsCity">City</label>
                    <input type="text" id="multiStepsCity" class="form-control" placeholder="Jackson" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsState">State</label>
                    <select id="multiStepsState" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="AL">Alabama</option>
                      <option value="AK">Alaska</option>
                      <option value="AZ">Arizona</option>
                      <option value="AR">Arkansas</option>
                      <option value="CA">California</option>
                      <option value="CO">Colorado</option>
                      <option value="CT">Connecticut</option>
                      <option value="DE">Delaware</option>
                      <option value="DC">District Of Columbia</option>
                      <option value="FL">Florida</option>
                      <option value="GA">Georgia</option>
                      <option value="HI">Hawaii</option>
                      <option value="ID">Idaho</option>
                      <option value="IL">Illinois</option>
                      <option value="IN">Indiana</option>
                      <option value="IA">Iowa</option>
                      <option value="KS">Kansas</option>
                      <option value="KY">Kentucky</option>
                      <option value="LA">Louisiana</option>
                      <option value="ME">Maine</option>
                      <option value="MD">Maryland</option>
                      <option value="MA">Massachusetts</option>
                      <option value="MI">Michigan</option>
                      <option value="MN">Minnesota</option>
                      <option value="MS">Mississippi</option>
                      <option value="MO">Missouri</option>
                      <option value="MT">Montana</option>
                      <option value="NE">Nebraska</option>
                      <option value="NV">Nevada</option>
                      <option value="NH">New Hampshire</option>
                      <option value="NJ">New Jersey</option>
                      <option value="NM">New Mexico</option>
                      <option value="NY">New York</option>
                      <option value="NC">North Carolina</option>
                      <option value="ND">North Dakota</option>
                      <option value="OH">Ohio</option>
                      <option value="OK">Oklahoma</option>
                      <option value="OR">Oregon</option>
                      <option value="PA">Pennsylvania</option>
                      <option value="RI">Rhode Island</option>
                      <option value="SC">South Carolina</option>
                      <option value="SD">South Dakota</option>
                      <option value="TN">Tennessee</option>
                      <option value="TX">Texas</option>
                      <option value="UT">Utah</option>
                      <option value="VT">Vermont</option>
                      <option value="VA">Virginia</option>
                      <option value="WA">Washington</option>
                      <option value="WV">West Virginia</option>
                      <option value="WI">Wisconsin</option>
                      <option value="WY">Wyoming</option>
                    </select>
                  </div>
                  <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                  </div>
                </div>
              </div>
              <!-- Billing Links -->
              <div id="billingLinksValidation" class="content">
                <div class="content-header mb-6">
                  <h4 class="mb-0">Select Plan</h4>
                  <p class="mb-0">Select plan as per your requirement</p>
                </div>
                <!-- Custom plan options -->
                <div class="row gap-md-0 gap-4 mb-12">
                  <div class="col-md">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="basicOption">
                        <span class="custom-option-body">
                          <span class="d-block mb-2 h5">Basic</span>
                          <span>A simple start for start ups & Students</span>
                          <span class="d-flex justify-content-center mt-2">
                            <sup class="text-primary h6 fw-normal pt-2 mb-0">$</sup>
                            <span class="fw-medium h3 text-primary mb-0">0</span>
                            <sub class="h6 fw-normal mt-3 mb-0 text-muted">/month</sub>
                          </span>
                        </span>
                        <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="basicOption" />
                      </label>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="standardOption">
                        <span class="custom-option-body">
                          <span class="d-block mb-2 h5">Standard</span>
                          <span>For small to medium businesses</span>
                          <span class="d-flex justify-content-center mt-2">
                            <sup class="text-primary h6 fw-normal pt-2 mb-0">$</sup>
                            <span class="fw-medium h3 text-primary mb-0">99</span>
                            <sub class="h6 fw-normal mt-3 mb-0 text-muted">/month</sub>
                          </span>
                        </span>
                        <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="standardOption" checked />
                      </label>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-check custom-option custom-option-icon">
                      <label class="form-check-label custom-option-content" for="enterpriseOption">
                        <span class="custom-option-body">
                          <span class="d-block mb-2 h5">Enterprise</span>
                          <span>Solution for enterprise & organizations</span>
                          <span class="d-flex justify-content-center mt-2">
                            <sup class="text-primary h6 fw-normal pt-2 mb-0">$</sup>
                            <span class="fw-medium h3 text-primary mb-0">499</span>
                            <sub class="h6 fw-normal mt-3 mb-0 text-muted">/year</sub>
                          </span>
                        </span>
                        <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="enterpriseOption" />
                      </label>
                    </div>
                  </div>
                </div>
                <!--/ Custom plan options -->
                <div class="content-header mb-6">
                  <h4 class="mb-0">Payment Information</h4>
                  <p class="mb-0">Enter your card information</p>
                </div>
                <!-- Credit Card Details -->
                <div class="row g-6">
                  <div class="col-md-12">
                    <label class="form-label w-100" for="multiStepsCard">Card Number</label>
                    <div class="input-group input-group-merge">
                      <input id="multiStepsCard" class="form-control multi-steps-card" name="multiStepsCard" type="text" placeholder="1356 3215 6548 7898" aria-describedby="multiStepsCardImg" />
                      <span class="input-group-text cursor-pointer" id="multiStepsCardImg"><span class="card-type"></span></span>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <label class="form-label" for="multiStepsName">Name On Card</label>
                    <input type="text" id="multiStepsName" class="form-control" name="multiStepsName" placeholder="John Doe" />
                  </div>
                  <div class="col-6 col-md-4">
                    <label class="form-label" for="multiStepsExDate">Expiry Date</label>
                    <input type="text" id="multiStepsExDate" class="form-control multi-steps-exp-date" name="multiStepsExDate" placeholder="MM/YY" />
                  </div>
                  <div class="col-6 col-md-3">
                    <label class="form-label" for="multiStepsCvv">CVV Code</label>
                    <div class="input-group input-group-merge">
                      <input type="text" id="multiStepsCvv" class="form-control multi-steps-cvv" name="multiStepsCvv" maxlength="3" placeholder="654" />
                      <span class="input-group-text cursor-pointer" id="multiStepsCvvHelp"><i class="ti ti-help text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-between">
                    <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button type="submit" class="btn btn-success btn-next btn-submit">Submit</button>
                  </div>
                </div>
                <!--/ Credit Card Details -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- / Multi Steps Registration -->
  </div>
</div>

<script type="module">
  // Check selected custom option
  window.Helpers.initCustomOptionCheck();
</script>
@endsection
