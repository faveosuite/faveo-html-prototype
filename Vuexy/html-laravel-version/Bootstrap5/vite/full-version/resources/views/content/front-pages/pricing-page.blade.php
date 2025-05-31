@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Pricing - Front Pages')

<!-- Page Styles -->
@section('page-style')
@vite(['resources/assets/vendor/scss/pages/front-page-pricing.scss'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/front-page-pricing.js'])
@endsection


@section('content')
<!-- Pricing Plans -->
<section class="section-py first-section-pt">
  <div class="container">
    <h2 class="text-center mb-2">Pricing Plans</h2>
    <p class="text-center mb-0">All plans include 40+ advanced tools and features to boost your product.<br> Choose the best plan to fit your needs.</p>
    <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pt-9 pb-3 mb-50">
      <label class="switch switch-sm ms-sm-12 ps-sm-12 me-0">
        <span class="switch-label fs-6 text-body">Monthly</span>
        <input type="checkbox" class="switch-input price-duration-toggler" checked />
        <span class="switch-toggle-slider">
          <span class="switch-on"></span>
          <span class="switch-off"></span>
        </span>
        <span class="switch-label fs-6 text-body">Annually</span>
      </label>
      <div class="mt-n5 ms-n10 ml-2 mb-10 d-none d-sm-flex align-items-center gap-1">
        <i class="ti ti-corner-left-down ti-lg text-muted scaleX-n1-rtl"></i>
        <span class="badge badge-sm bg-label-primary rounded-1 mb-3 ">Save up to 10%</span>
      </div>
    </div>

    <div class="row g-6">
      <!-- Basic -->
      <div class="col-lg">
        <div class="card border rounded shadow-none">
          <div class="card-body pt-12 px-5">
            <div class="mt-3 mb-5 text-center">
              <img src="{{asset('assets/img/illustrations/page-pricing-basic.png')}}" alt="Basic Image" height="120">
            </div>
            <h4 class="card-title text-center text-capitalize mb-1">Basic</h4>
            <p class="text-center mb-5">A simple start for everyone</p>
            <div class="text-center h-px-50">
              <div class="d-flex justify-content-center">
                <sup class="h6 text-body pricing-currency mt-2 mb-0 me-1">$</sup>
                <h1 class="mb-0 text-primary">0</h1>
                <sub class="h6 text-body pricing-duration mt-auto mb-1 ms-1">/month</sub>
              </div>
            </div>

            <ul class="list-group ps-6 my-5 pt-9">
              <li class="mb-4">100 responses a month</li>
              <li class="mb-4">Unlimited forms and surveys</li>
              <li class="mb-4">Unlimited fields</li>
              <li class="mb-4">Basic form creation tools</li>
              <li class="mb-0">Up to 2 subdomains</li>
            </ul>
            <a href="{{url('front-pages/payment')}}" class="btn btn-label-success d-grid w-100">Your Current Plan</a>
          </div>
        </div>
      </div>

      <!-- Pro -->
      <div class="col-lg">
        <div class="card border-primary border shadow-none">
          <div class="card-body position-relative pt-4">
            <div class="position-absolute end-0 me-5 top-0 mt-4">
              <span class="badge bg-label-primary rounded-1">Popular</span>
            </div>
            <div class="my-5 pt-6 text-center">
              <img src="{{asset('assets/img/illustrations/page-pricing-standard.png')}}" alt="Standard Image" height="120">
            </div>
            <h4 class="card-title text-center text-capitalize mb-1">Standard</h4>
            <p class="text-center mb-5">For small to medium businesses</p>
            <div class="text-center h-px-50">
              <div class="d-flex justify-content-center">
                <sup class="h6 text-body pricing-currency mt-2 mb-0 me-1">$</sup>
                <h1 class="price-toggle price-yearly text-primary mb-0">7</h1>
                <h1 class="price-toggle price-monthly text-primary mb-0 d-none">9</h1>
                <sub class="h6 text-body pricing-duration mt-auto mb-1 ms-1">/month</sub>
              </div>
              <small class="price-yearly price-yearly-toggle text-muted">USD 480 / year</small>
            </div>

            <ul class="list-group ps-6 my-5 pt-9">
              <li class="mb-4">Unlimited responses</li>
              <li class="mb-4">Unlimited forms and surveys</li>
              <li class="mb-4">Instagram profile page</li>
              <li class="mb-4">Google Docs integration</li>
              <li class="mb-0">Custom "Thank you" page</li>
            </ul>
            <a href="{{url('front-pages/payment')}}" class="btn btn-primary d-grid w-100">Upgrade</a>
          </div>
        </div>
      </div>

      <!-- Enterprise -->
      <div class="col-lg">
        <div class="card border rounded shadow-none">
          <div class="card-body pt-12">
            <div class="mt-3 mb-5 text-center">
              <img src="{{asset('assets/img/illustrations/page-pricing-enterprise.png')}}" alt="Enterprise Image" height="120">
            </div>
            <h4 class="card-title text-center text-capitalize mb-1">Enterprise</h4>
            <p class="text-center mb-5">Solution for big organizations</p>

            <div class="text-center h-px-50">
              <div class="d-flex justify-content-center">
                <sup class="h6 text-body pricing-currency mt-2 mb-0 me-1">$</sup>
                <h1 class="price-toggle price-yearly text-primary mb-0">16</h1>
                <h1 class="price-toggle price-monthly text-primary mb-0 d-none">19</h1>
                <sub class="h6 text-body pricing-duration mt-auto mb-1 ms-1">/month</sub>
              </div>
              <small class="price-yearly price-yearly-toggle text-muted">USD 960 / year</small>
            </div>
            <ul class="list-group ps-6 my-5 pt-9">
              <li class="mb-4">PayPal payments</li>
              <li class="mb-4">Logic Jumps</li>
              <li class="mb-4">File upload with 5GB storage</li>
              <li class="mb-4">Custom domain support</li>
              <li class="mb-0">Stripe integration</li>
            </ul>
            <a href="{{url('front-pages/payment')}}" class="btn btn-label-primary d-grid w-100">Upgrade</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Pricing Plans -->
<!-- Pricing Free Trial -->
<section class="pricing-free-trial bg-label-primary">
  <div class="container">
    <div class="position-relative">
      <div class="d-flex justify-content-between flex-column-reverse flex-lg-row align-items-center pt-12 pb-10">
        <div class="text-center text-lg-start">
          <h4 class="text-primary mb-2">Still not convinced? Start with a 14-day FREE trial!</h4>
          <p class="text-body mb-6 mb-md-11">You will get full access to with all the features for 14 days.</p>
          <a href="{{url('front-pages/payment')}}" class="btn btn-primary">Start 14-day free trial</a>
        </div>
        <!-- image -->
        <div class="text-center">
          <img src="{{asset('assets/img/illustrations/girl-with-laptop.png')}}" class="img-fluid me-lg-5 pe-lg-1 mb-3 mb-lg-0" alt="Api Key Image" width="202">
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Pricing Free Trial -->
<!-- Plans Comparison -->
<section class="section-py pricing-plans-comparison">
  <div class="container">
    <div class="col-12 text-center mb-6">
      <h3 class="mb-2">Pick a plan that works best for you</h3>
      <p>Stay cool, we have a 48-hour money back guarantee!</p>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="table-responsive border border-top-0 rounded">
          <table class="table table-striped text-center mb-0">
            <thead>
              <tr>
                <th scope="col">
                  <p class="mb-0">Features</p>
                  <small class="text-body fw-normal text-capitalize">Native front features</small>
                </th>
                <th scope="col">
                  <p class="mb-0">Starter</p>
                  <small class="text-body fw-normal text-capitalize">Free</small>
                </th>
                <th scope="col">
                  <p class="mb-0 position-relative">Pro
                    <span class="badge badge-center rounded-pill bg-primary position-absolute mt-n2 ms-1"><i class="ti ti-star mt-n1"></i></span>
                  </p>
                  <small class="text-body fw-normal text-capitalize">$7.5/month</small>
                </th>
                <th scope="col">
                  <p class="mb-0">Enterprise</p>
                  <small class="text-body fw-normal text-capitalize">$16/month</small>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-heading">14-days free trial</td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
              </tr>
              <tr>
                <td class="text-heading">No user limit</td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0">
                    <i class="ti ti-x"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0">
                    <i class="ti ti-x"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
              </tr>
              <tr>
                <td class="text-heading">Product Support</td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0">
                    <i class="ti ti-x"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
              </tr>
              <tr>
                <td class="text-heading">Email Support</td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0">
                    <i class="ti ti-x"></i>
                  </span>
                </td>
                <td>
                  <span class="badge bg-label-primary badge-sm">Add-On-Available</span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
              </tr>
              <tr>
                <td class="text-heading">Integrations</td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0">
                    <i class="ti ti-x"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
              </tr>
              <tr>
                <td class="text-heading">Removal of Front branding</td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0">
                    <i class="ti ti-x"></i>
                  </span>
                </td>
                <td>
                  <span class="badge bg-label-primary badge-sm">Add-On-Available</span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
              </tr>
              <tr>
                <td class="text-heading">Active maintenance & support</td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0">
                    <i class="ti ti-x"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0">
                    <i class="ti ti-x"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
              </tr>
              <tr>
                <td class="text-heading">Data storage for 365 days</td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0">
                    <i class="ti ti-x"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0">
                    <i class="ti ti-x"></i>
                  </span>
                </td>
                <td><span class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                    <i class="ti ti-check"></i>
                  </span>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <a href="{{url('front-pages/payment')}}" class="btn text-nowrap btn-label-primary">Choose Plan</a>
                </td>
                <td>
                  <a href="{{url('front-pages/payment')}}" class="btn text-nowrap btn-primary">Choose Plan</a>
                </td>
                <td>
                  <a href="{{url('front-pages/payment')}}" class="btn text-nowrap btn-label-primary">Choose Plan</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Plans Comparison -->
<!-- FAQS -->
<section class="section-py pricing-faqs rounded-bottom bg-body">
  <div class="container">
    <div class="text-center mb-6">
      <h4 class="mb-2">FAQs</h4>
      <p>Let us help answer the most common questions you might have.</p>
    </div>
    <div class="accordion" id="pricingFaq">
      <div class="card accordion-item">
        <h2 class="accordion-header" id="headingone">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1" aria-expanded="false" aria-controls="faq-1">
            What counts towards the 100 responses limit?
          </button>
        </h2>
        <div id="faq-1" class="accordion-collapse collapse" aria-labelledby="headingone" data-bs-parent="#pricingFaq">
          <div class="accordion-body">
            We accept Visa®, MasterCard®, American Express®, and PayPal®.
            So you can be confident that your credit card information will be kept
            safe and secure.
          </div>
        </div>
      </div>
      <div class="card accordion-item active">
        <h2 class="accordion-header" id="headingTwo">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
            How do you process payments?
          </button>
        </h2>
        <div id="faq-2" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#pricingFaq">
          <div class="accordion-body">
            Donec placerat, lectus sed mattis semper, neque lectus feugiat lectus, varius pulvinar diam eros in elit. Pellentesque convallis laoreet laoreet.Donec placerat, lectus sed mattis semper, neque lectus feugiat lectus, varius pulvinar diam eros in elit. Pellentesque convallis laoreet laoreet.
          </div>
        </div>
      </div>
      <div class="card accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
            Do you have a money-back guarantee?
          </button>
        </h2>
        <div id="faq-3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#pricingFaq">
          <div class="accordion-body">
            We count all responses submitted through all your forms in a month.
            If you already received 100 responses this month, you won’t be able to receive any more of them until next
            month when the counter resets.
          </div>
        </div>
      </div>
      <div class="card accordion-item">
        <h6 class="accordion-header" id="headingFour">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-4" aria-expanded="false" aria-controls="faq-4">
            I have more questions. Where can I get help?
          </button>
        </h6>
        <div id="faq-4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#pricingFaq">
          <div class="accordion-body">
            2Checkout accepts all types of credit and debit cards.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ FAQS -->

@endsection
