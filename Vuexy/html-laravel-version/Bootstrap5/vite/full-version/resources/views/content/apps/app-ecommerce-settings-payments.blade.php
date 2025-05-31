@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'eCommerce Settings Payments - Apps')

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-ecommerce.scss')
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
          <a class="nav-link" href="{{url('/app/ecommerce/settings/details')}}">
            <i class="ti ti-building-store ti-sm me-1_5"></i>
            <span class="align-middle">Store details</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link active" href="javascript:void(0);">
            <i class="ti ti-credit-card ti-sm me-1_5"></i>
            <span class="align-middle">Payments</span>
          </a>
        </li>
        <li class="nav-item mb-1">
          <a class="nav-link" href="{{url('/app/ecommerce/settings/checkout')}}">
            <i class="ti ti-shopping-cart me-1_5"></i>
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
      <!-- Payments Tab -->
      <div class="tab-pane fade show active" id="payments" role="tabpanel">

        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title m-0">Payment providers</h5>
          </div>

          <div class="card-body">
            <p class="mb-5">Providers that enable you to accept payment methods at a rate set by the third-party.
              An additional fee will apply to new orders once you select a plan</p>
            <button class="btn btn-label-primary" data-bs-toggle="modal" data-bs-target="#paymentProvider">Choose a provider</button>
          </div>


        </div>

        <div class="card mb-6">
          <div class="card-header">
            <div class="card-title m-0">
              <h5 class="m-0">Supported payment methods</h5>
              <p class="my-0 card-subtitle">Payment methods that are available with one of Vuexy's approved payment providers.</p>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mb-5">Default</h6>
            <div class="row mb-5 g-6 bg-label-secondary px-6 rounded-2 mx-0 mt-0 bg-lighter">
              <div class="col-12 d-flex justify-content-between align-items-center border-bottom p-0 pb-6">

                <img src="{{asset('assets/img/icons/payments/paypal.png')}}" alt="Paypal" class="gray-shadow-sm rounded" width="57">

                <span class="fw-medium"><a href="javascript:void(0);">Activate Paypal</a></span>
              </div>
              <div class="col-12 p-0">
                <div class="row">
                  <div class="col-4">
                    <p class="mb-2 small">Provider</p>
                    <p class="text-heading fw-medium">Paypal</p>
                  </div>
                  <div class="col-4">
                    <p class="mb-2 small">Status</p>
                    <p class="badge bg-label-warning fw-medium">Inactive</p>
                  </div>
                  <div class="col-4">
                    <p class="mb-2 small">Transaction Fee</p>
                    <p class="text-heading fw-medium">2.99%</p>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-label-primary" data-bs-toggle="modal" data-bs-target="#paymentMethods">Add payment methods</button>
          </div>
        </div>

        <div class="card mb-6">
          <div class="card-header">
            <h5 class="card-title m-0">Manual payment methods</h5>
          </div>

          <div class="card-body">
            <p class="mb-5">Payments that are made outside your online store. When a customer selects a manual payment method such as cash on delivery. You'll need to approve their order before it can be fulfilled.</p>
            <div class="btn-group">
              <button type="button" class="btn btn-label-primary">Add manual payment method</button>
              <button type="button" class="btn btn-label-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:void(0);">Create custom payment method</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Bank deposit</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Money order</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">Cash on delivery (COD)</a></li>
              </ul>
            </div>
          </div>


        </div>

        <div class="d-flex justify-content-end gap-4">
          <button type="reset" class="btn btn-label-secondary">Discard</button>
          <a class="btn btn-primary" href="{{url('/app/ecommerce/settings/checkout')}}">Save Changes</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /Options-->
</div>

@include('_partials/_modals/modal-select-payment-providers')
@include('_partials/_modals/modal-select-payment-methods')

@endsection
