@extends('layouts/layoutMaster')

@section('title', 'Invoice (Print version) - Pages')

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-invoice-print.scss')
@endsection

@section('page-script')
@vite('resources/assets/js/app-invoice-print.js')
@endsection

@section('content')
<div class="invoice-print p-12">

  <div class="d-flex justify-content-between flex-row">
    <div class="mb-6">
      <div class="d-flex svg-illustration mb-6 gap-2">
        <div class="app-brand-logo demo">@include('_partials.macros',["height"=>22,"withbg"=>''])</div>
        <span class="app-brand-text fw-bold">
          {{ config('variables.templateName') }}
        </span>
      </div>
      <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
      <p class="mb-1">San Diego County, CA 91905, USA</p>
      <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
    </div>
    <div>
      <h5 class="mb-6">INVOICE #86423</h5>
      <div class="mb-1">
        <span>Date Issues:</span>
        <span>April 25, 2021</span>
      </div>
      <div>
        <span>Date Due:</span>
        <span>May 25, 2021</span>
      </div>
    </div>
  </div>

  <hr class="mb-6" />

  <div class="row d-flex justify-content-between mb-6">
    <div class="col-sm-6 w-50">
      <h6>Invoice To:</h6>
      <p class="mb-1">Thomas shelby</p>
      <p class="mb-1">Shelby Company Limited</p>
      <p class="mb-1">Small Heath, B10 0HF, UK</p>
      <p class="mb-1">718-986-6062</p>
      <p class="mb-0">peakyFBlinders@gmail.com</p>
    </div>
    <div class="col-sm-6 w-50">
      <h6>Bill To:</h6>
      <table>
        <tbody>
          <tr>
            <td class="pe-4">Total Due:</td>
            <td>$12,110.55</td>
          </tr>
          <tr>
            <td class="pe-4">Bank name:</td>
            <td>American Bank</td>
          </tr>
          <tr>
            <td class="pe-4">Country:</td>
            <td>United States</td>
          </tr>
          <tr>
            <td class="pe-4">IBAN:</td>
            <td>ETD95476213874685</td>
          </tr>
          <tr>
            <td class="pe-4">SWIFT code:</td>
            <td>BR91905</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="table-responsive border border-bottom-0 rounded">
    <table class="table m-0">
      <thead>
        <tr>
          <th>Item</th>
          <th>Description</th>
          <th>Cost</th>
          <th>Qty</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Vuexy Admin Template</td>
          <td>HTML Admin Template</td>
          <td>$32</td>
          <td>1</td>
          <td>$32.00</td>
        </tr>
        <tr>
          <td>Frest Admin Template</td>
          <td>Angular Admin Template</td>
          <td>$22</td>
          <td>1</td>
          <td>$22.00</td>
        </tr>
        <tr>
          <td>Apex Admin Template</td>
          <td>HTML Admin Template</td>
          <td>$17</td>
          <td>2</td>
          <td>$34.00</td>
        </tr>
        <tr>
          <td>Robust Admin Template</td>
          <td>React Admin Template</td>
          <td>$66</td>
          <td>1</td>
          <td>$66.00</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="table-responsive">
    <table class="table m-0 table-borderless">
      <tbody>
        <tr>
          <td class="align-top px-0 py-6">
            <p class="mb-1">
              <span class="me-2 fw-medium">Salesperson:</span>
              <span>Alfie Solomons</span>
            </p>
            <span>Thanks for your business</span>
          </td>
          <td class="px-0 py-12 w-px-100">
            <p class="mb-2">Subtotal:</p>
            <p class="mb-2">Discount:</p>
            <p class="mb-2 border-bottom pb-2">Tax:</p>
            <p class="mb-0 pt-2">Total:</p>
          </td>
          <td class="text-end px-0 py-6 w-px-100">
            <p class="fw-medium mb-2">$1800</p>
            <p class="fw-medium mb-2">$28</p>
            <p class="fw-medium mb-2 border-bottom pb-2">21%</p>
            <p class="fw-medium mb-0 pt-2">$1690</p>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <hr class="mt-0 mb-6">
  <div class="row">
    <div class="col-12">
      <span class="fw-medium">Note:</span>
      <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future
        freelance projects. Thank You!</span>
    </div>
  </div>
</div>
@endsection
