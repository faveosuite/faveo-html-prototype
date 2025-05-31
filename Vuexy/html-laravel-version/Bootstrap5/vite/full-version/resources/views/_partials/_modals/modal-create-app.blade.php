<!-- Create App Modal -->
<div class="modal fade" id="createApp" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple modal-upgrade-plan">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center">
          <h4 class="mb-2">Create App</h4>
          <p class="mb-5">Provide data with this form to create your app.</p>
        </div>
        <div id="wizard-create-app" class="bs-stepper vertical mt-2 shadow-none">
          <div class="bs-stepper-header border-0 p-1">
            <div class="step" data-target="#details">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-file-text"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Details</span>
                  <span class="bs-stepper-subtitle">Enter Details</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#frameworks">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-box"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Frameworks</span>
                  <span class="bs-stepper-subtitle">Select Framework</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#database">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-database"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Database</span>
                  <span class="bs-stepper-subtitle">Select Database</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#billing">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-credit-card"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Billing</span>
                  <span class="bs-stepper-subtitle">Payment Details</span>
                </span>
              </button>
            </div>
            <div class="line"></div>
            <div class="step" data-target="#submit">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-check"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title text-uppercase">Submit</span>
                  <span class="bs-stepper-subtitle">Submit</span>
                </span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content p-1">
            <form onSubmit="return false">
              <!-- Details -->
              <div id="details" class="content pt-4 pt-lg-0">
                <div class="mb-6">
                  <label for="exampleInputEmail1" class="form-label">Application Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Application Name">
                </div>
                <h5>Category</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-info p-2 me-3 rounded"><i class="ti ti-file-text ti-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">CRM Application</h6>
                        <small>Scales with any business</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="details-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-success p-2 me-3 rounded"><i class="ti ti-shopping-cart ti-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">eCommerce Platforms</h6>
                        <small>Grow Your Business With App</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="details-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <div class="badge bg-label-danger p-2 me-3 rounded"><i class="ti ti-device-laptop ti-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">Online Learning platform</h6>
                        <small>Start learning today</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="details-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-label-secondary btn-prev" disabled> <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i>
                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                  </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                </div>
              </div>

              <!-- Frameworks -->
              <div id="frameworks" class="content pt-4 pt-lg-0">
                <h5>Select Framework</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-info p-2 me-3 rounded"><i class="ti ti-brand-react-native ti-30px"></i></div>
                    <div class="d-flex justify-content-between w-100">
                      <div class="me-2">
                        <h6 class="mb-1">React Native</h6>
                        <small>Create truly native apps</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-danger p-2 me-3 rounded"><i class="ti ti-brand-angular ti-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">Angular</h6>
                        <small>Most suited for your application</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" checked="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-warning p-2 me-3 rounded"><i class="ti ti-brand-html5 ti-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">HTML</h6>
                        <small>Progressive Framework</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <div class="badge bg-label-success p-2 me-3 rounded"><i class="ti ti-brand-vue ti-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">VueJs</h6>
                        <small>JS web frameworks</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="frameworks-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>

                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                </div>
              </div>

              <!-- Database -->
              <div id="database" class="content pt-4 pt-lg-0">
                <div class="mb-6">
                  <label for="exampleInputEmail2" class="form-label">Database Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Database Name">
                </div>
                <h5>Select Database Engine</h5>
                <ul class="p-0 m-0">
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-danger p-2 me-3 rounded"><i class="ti ti-brand-firebase ti-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">Firebase</h6>
                        <small>Cloud Firestone</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="database-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start mb-4">
                    <div class="badge bg-label-warning p-2 me-3 rounded"><i class="ti ti-brand-amazon ti-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">AWS</h6>
                        <small>Amazon Fast NoSQL Database</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="database-radio" class="form-check-input" type="radio" value="" checked />
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="d-flex align-items-start">
                    <div class="badge bg-label-info p-2 me-3 rounded"><i class="ti ti-database ti-30px"></i></div>
                    <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                      <div class="me-2">
                        <h6 class="mb-1">MySQL</h6>
                        <small>Basic MySQL database</small>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-inline">
                          <input name="database-radio" class="form-check-input" type="radio" value="" />
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                </div>
              </div>

              <!-- billing -->
              <div id="billing" class="content">
                <h5 class="mb-6">Payment Details</h5>
                <div id="AppNewCCForm" class="row g-6 pt-3 pt-lg-0 mb-6" onsubmit="return false">
                  <div class="col-12">
                    <label for="modalAppCardNumber" class="form-label">Card Number</label>
                    <div class="input-group input-group-merge">
                      <input class="form-control app-credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAppAddCard" id="modalAppCardNumber" />
                      <span class="input-group-text cursor-pointer p-1" id="modalAppAddCard"><span class="app-card-type"></span></span>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="modalAppUserName" class="form-label">Name on Card</label>
                    <input type="text" class="form-control" placeholder="John Doe" id="modalAppUserName" />
                  </div>
                  <div class="col-6 col-md-3">
                    <label for="modalAppExpiry" class="form-label">Expiry</label>
                    <input type="text" class="form-control app-expiry-date-mask" placeholder="MM/YY" id="modalAppExpiry" />
                  </div>
                  <div class="col-6 col-md-3">
                    <label for="modalAppAddCardCvv" class="form-label">CVV</label>
                    <div class="input-group input-group-merge">
                      <input type="text" id="modalAppAddCardCvv" class="form-control app-cvv-code-mask" maxlength="3" placeholder="654" />
                      <span class="input-group-text cursor-pointer" id="modalAppAddCardCvv2"><i class="text-muted ti ti-help" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check form-switch">
                      <input type="checkbox" class="form-check-input" id="appFutureAddress" />
                      <label for="appFutureAddress" class="form-label">Save card for future billing?</label>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                  <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-2">Next</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                </div>
              </div>

              <!-- submit -->
              <div id="submit" class="content text-center pt-4 pt-lg-0">
                <h5 class="mb-1">Submit</h5>
                <p class="small">Submit to kick start your project.</p>
                <!-- image -->
                <img src="{{asset('assets/img/illustrations/girl-with-laptop.png') }}" class="img-fluid" alt="Create App img" width="175">
                <div class="col-12 d-flex justify-content-between mt-6">
                  <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left ti-xs me-sm-2 me-0"></i> <span class="align-middle d-sm-inline-block d-none">Previous</span> </button>
                  <button class="btn btn-success btn-next btn-submit" data-bs-dismiss="modal" aria-label="Close"> <span class="align-middle">Submit</span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Create App Modal -->
