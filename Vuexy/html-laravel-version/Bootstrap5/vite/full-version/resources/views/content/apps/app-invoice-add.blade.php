@extends('layouts/layoutMaster')

@section('title', 'Add - Invoice')

@section('vendor-style')
@vite('resources/assets/vendor/libs/flatpickr/flatpickr.scss')
@endsection

@section('page-style')
@vite('resources/assets/vendor/scss/pages/app-invoice.scss')
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/jquery-repeater/jquery-repeater.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/offcanvas-send-invoice.js',
  'resources/assets/js/app-invoice-add.js'
])
@endsection

@section('content')
<div class="row invoice-add">
  <!-- Invoice Add-->
  <div class="col-lg-9 col-12 mb-lg-0 mb-6">
    <div class="card invoice-preview-card p-sm-12 p-6">
      <div class="card-body invoice-preview-header rounded">
        <div class="d-flex flex-wrap flex-column flex-sm-row justify-content-between text-heading">
          <div class="mb-md-0 mb-6">
            <div class="d-flex svg-illustration mb-6 gap-2 align-items-center">
              <div class="app-brand-logo demo">@include('_partials.macros',["height"=>22,"withbg"=>''])</div>
              <span class="app-brand-text fw-bold fs-4 ms-50">
                {{ config('variables.templateName') }}
              </span>
            </div>
            <p class="mb-2">Office 149, 450 South Brand Brooklyn</p>
            <p class="mb-2">San Diego County, CA 91905, USA</p>
            <p class="mb-3">+1 (123) 456 7891, +44 (876) 543 2198</p>
          </div>
          <div class="col-md-5 col-8 pe-0 ps-0 ps-md-2">
            <dl class="row mb-0">
              <dt class="col-sm-5 mb-2 d-md-flex align-items-center justify-content-end">
                <span class="h5 text-capitalize mb-0 text-nowrap">Invoice</span>
              </dt>
              <dd class="col-sm-7">
                <div class="input-group input-group-merge disabled">
                  <span class="input-group-text">#</span>
                  <input type="text" class="form-control" disabled placeholder="3905" value="3905" id="invoiceId" />
                </div>
              </dd>
              <dt class="col-sm-5 mb-2 d-md-flex align-items-center justify-content-end">
                <span class="fw-normal">Date Issued:</span>
              </dt>
              <dd class="col-sm-7">
                <input type="text" class="form-control invoice-date" placeholder="YYYY-MM-DD" />
              </dd>
              <dt class="col-sm-5 d-md-flex align-items-center justify-content-end">
                <span class="fw-normal">Due Date:</span>
              </dt>
              <dd class="col-sm-7 mb-0">
                <input type="text" class="form-control due-date" placeholder="YYYY-MM-DD" />
              </dd>
            </dl>
          </div>
        </div>
      </div>

      <div class="card-body px-0">

        <div class="row">
          <div class="col-md-6 col-sm-5 col-12 mb-sm-0 mb-6">
            <h6>Invoice To:</h6>
            <select class="form-select mb-4 w-50">
              <option value="Jordan Stevenson">Jordan Stevenson</option>
              <option value="Wesley Burland">Wesley Burland</option>
              <option value="Vladamir Koschek">Vladamir Koschek</option>
              <option value="Tyne Widmore">Tyne Widmore</option>
            </select>
            <p class="mb-1">Shelby Company Limited</p>
            <p class="mb-1">Small Heath, B10 0HF, UK</p>
            <p class="mb-1">718-986-6062</p>
            <p class="mb-0">peakyFBlinders@gmail.com</p>
          </div>
          <div class="col-md-6 col-sm-7">
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
      </div>
      <hr class="mt-0 mb-6">
      <div class="card-body pt-0 px-0">
        <form class="source-item">
          <div class="mb-4" data-repeater-list="group-a">
            <div class="repeater-wrapper pt-0 pt-md-9" data-repeater-item>
              <div class="d-flex border rounded position-relative pe-0">
                <div class="row w-100 p-6">
                  <div class="col-md-6 col-12 mb-md-0 mb-4">
                    <p class="h6 repeater-title">Item</p>
                    <select class="form-select item-details mb-6">
                      <option value="App Design">App Design</option>
                      <option value="App Customization" selected>App Customization</option>
                      <option value="ABC Template">ABC Template</option>
                      <option value="App Development">App Development</option>
                    </select>
                    <textarea class="form-control" rows="2" placeholder="Customization & Bug Fixes"></textarea>
                  </div>
                  <div class="col-md-3 col-12 mb-md-0 mb-4">
                    <p class="h6 repeater-title">Cost</p>
                    <input type="text" class="form-control invoice-item-price mb-5" placeholder="24" min="12" />
                    <div class="text-heading">
                      <div class="mb-1">Discount:</div>
                      <span class="discount me-2">0%</span>
                      <span class="tax-1 me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 1">0%</span>
                      <span class="tax-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tax 2">0%</span>
                    </div>
                  </div>
                  <div class="col-md-2 col-12 mb-md-0 mb-4">
                    <p class="h6 repeater-title">Qty</p>
                    <input type="text" class="form-control invoice-item-qty" placeholder="1" min="1" max="50" />
                  </div>
                  <div class="col-md-1 col-12 pe-0 mt-md-2">
                    <p class="h6 repeater-title">Price</p>
                    <p class="mb-0 text-heading">$24.00</p>
                  </div>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                  <i class="ti ti-x ti-lg cursor-pointer" data-repeater-delete></i>
                  <div class="dropdown">
                    <i class="ti ti-settings ti-lg cursor-pointer more-options-dropdown" role="button" id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    </i>
                    <div class="dropdown-menu dropdown-menu-end w-px-300 p-4" aria-labelledby="dropdownMenuButton">

                      <div class="row g-3">
                        <div class="col-12">
                          <label for="discountInput" class="form-label">Discount(%)</label>
                          <input type="number" class="form-control" id="discountInput" min="0" max="100" />
                        </div>
                        <div class="col-md-6">
                          <label for="taxInput1" class="form-label">Tax 1</label>
                          <select name="tax-1-input" id="taxInput1" class="form-select tax-select">
                            <option value="0%" selected>0%</option>
                            <option value="1%">1%</option>
                            <option value="10%">10%</option>
                            <option value="18%">18%</option>
                            <option value="40%">40%</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="taxInput2" class="form-label">Tax 2</label>
                          <select name="tax-2-input" id="taxInput2" class="form-select tax-select">
                            <option value="0%" selected>0%</option>
                            <option value="1%">1%</option>
                            <option value="10%">10%</option>
                            <option value="18%">18%</option>
                            <option value="40%">40%</option>
                          </select>
                        </div>
                      </div>
                      <div class="dropdown-divider my-4"></div>
                      <button type="button" class="btn btn-label-primary btn-apply-changes">Apply</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="button" class="btn btn-sm btn-primary" data-repeater-create><i class='ti ti-plus ti-14px me-1_5'></i>Add Item</button>
            </div>
          </div>
        </form>
      </div>
      <hr class="my-0">
      <div class="card-body px-0">

        <div class="row row-gap-4">
          <div class="col-md-6 mb-md-0 mb-4">
            <div class="d-flex align-items-center mb-4">
              <label for="salesperson" class="me-2 fw-medium text-heading">Salesperson:</label>
              <input type="text" class="form-control" id="salesperson" placeholder="Edward Crowley" />
            </div>
            <input type="text" class="form-control" id="invoiceMsg" placeholder="Thanks for your business" />
          </div>
          <div class="col-md-6 d-flex justify-content-end">
            <div class="invoice-calculations">
              <div class="d-flex justify-content-between mb-2">
                <span class="w-px-100">Subtotal:</span>
                <span class="fw-medium text-heading">$1800</span>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span class="w-px-100">Discount:</span>
                <span class="fw-medium text-heading">$28</span>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <span class="w-px-100">Tax:</span>
                <span class="fw-medium text-heading">21%</span>
              </div>
              <hr />
              <div class="d-flex justify-content-between">
                <span class="w-px-100">Total:</span>
                <span class="fw-medium text-heading">$1690</span>
              </div>
            </div>
          </div>
        </div>

      </div>
      <hr class="my-0">
      <div class="card-body px-0">

        <div class="row">
          <div class="col-12">
            <div>
              <label for="note" class="text-heading mb-1 fw-medium">Note:</label>
              <textarea class="form-control" rows="2" id="note" placeholder="Invoice note">It was a pleasure working with you and your team. We hope you will keep us in mind for future freelance projects. Thank You!</textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Invoice Add-->

  <!-- Invoice Actions -->
  <div class="col-lg-3 col-12 invoice-actions">
    <div class="card mb-6">
      <div class="card-body">
        <button class="btn btn-primary d-grid w-100 mb-4" data-bs-toggle="offcanvas" data-bs-target="#sendInvoiceOffcanvas">
          <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-send ti-xs me-2"></i>Send Invoice</span>
        </button>
        <a href="{{url('app/invoice/preview')}}" class="btn btn-label-secondary d-grid w-100 mb-4">Preview</a>
        <button type="button" class="btn btn-label-secondary d-grid w-100">Save</button>
      </div>
    </div>
    <div>
      <label for="acceptPaymentsVia" class="form-label">Accept payments via</label>
      <select class="form-select mb-6" id="acceptPaymentsVia">
        <option value="Bank Account">Bank Account</option>
        <option value="Paypal">Paypal</option>
        <option value="Card">Credit/Debit Card</option>
        <option value="UPI Transfer">UPI Transfer</option>
      </select>
      <div class="d-flex justify-content-between mb-2">
        <label for="payment-terms">Payment Terms</label>
        <div class="form-check form-switch me-n2">
          <input type="checkbox" class="form-check-input" id="payment-terms" checked />
        </div>
      </div>
      <div class="d-flex justify-content-between mb-2">
        <label for="client-notes">Client Notes</label>
        <div class="form-check form-switch me-n2">
          <input type="checkbox" class="form-check-input" id="client-notes" checked />
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <label for="payment-stub">Payment Stub</label>
        <div class="form-check form-switch me-n2">
          <input type="checkbox" class="form-check-input" id="payment-stub" checked />
        </div>
      </div>
    </div>
  </div>
  <!-- /Invoice Actions -->
</div>

<!-- Offcanvas -->
@include('_partials/_offcanvas/offcanvas-send-invoice')
<!-- /Offcanvas -->
@endsection
