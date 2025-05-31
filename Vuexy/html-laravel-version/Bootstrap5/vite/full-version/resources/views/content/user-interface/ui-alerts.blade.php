@extends('layouts/layoutMaster')

@section('title', 'Alerts - UI elements')

@section('content')
<div class="row mb-6">
  <!-- Basic Alerts -->
  <div class="col-md mb-6 mb-md-0">
    <div class="card">
      <h5 class="card-header">Basic Alerts</h5>
      <div class="card-body">
        <div class="alert alert-primary" role="alert">
          This is a primary alert — check it out!
        </div>

        <div class="alert alert-secondary" role="alert">
          This is a secondary alert — check it out!
        </div>

        <div class="alert alert-success" role="alert">
          This is a success alert — check it out!
        </div>

        <div class="alert alert-danger" role="alert">
          This is a danger alert — check it out!
        </div>

        <div class="alert alert-warning" role="alert">
          This is a warning alert — check it out!
        </div>

        <div class="alert alert-info" role="alert">
          This is an info alert — check it out!
        </div>

        <div class="alert alert-dark mb-0" role="alert">
          This is a dark alert — check it out!
        </div>
      </div>
    </div>
  </div>
  <!--/ Basic Alerts -->
  <!-- Outline Alerts -->
  <div class="col-md">
    <div class="card">
      <h5 class="card-header">Outline Alerts</h5>
      <div class="card-body">
        <div class="alert alert-outline-primary" role="alert">
          This is a primary outline alert — check it out!
        </div>

        <div class="alert alert-outline-secondary" role="alert">
          This is a secondary outline alert — check it out!
        </div>

        <div class="alert alert-outline-success" role="alert">
          This is a success outline alert — check it out!
        </div>

        <div class="alert alert-outline-danger" role="alert">
          This is a danger outline alert — check it out!
        </div>

        <div class="alert alert-outline-warning" role="alert">
          This is a warning outline alert — check it out!
        </div>

        <div class="alert alert-outline-info" role="alert">
          This is an info outline alert — check it out!
        </div>

        <div class="alert alert-outline-dark mb-0" role="alert">
          This is a dark outline alert — check it out!
        </div>
      </div>
    </div>
  </div>
  <!--/ Outline Alerts -->

</div>
<div class="row mb-6">
  <!-- Dismissible Alerts -->
  <div class="col-md mb-4 mb-md-0">
    <div class="card">
      <h5 class="card-header">Dismissible Alerts</h5>
      <div class="card-body">
        <div class="alert alert-primary alert-dismissible" role="alert">
          This is a primary dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-secondary alert-dismissible" role="alert">
          This is a secondary dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-success alert-dismissible" role="alert">
          This is a success dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-danger alert-dismissible" role="alert">
          This is a danger dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-warning alert-dismissible" role="alert">
          This is a warning dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-info alert-dismissible" role="alert">
          This is an info dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>

        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
          This is a dark dismissible alert — check it out!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--/ Dismissible Alerts -->
  <!-- Alerts with Icons -->
  <div class="col-md">
    <div class="card">
      <h5 class="card-header">Alerts with Icons</h5>
      <div class="card-body">
        <div class="alert alert-solid-primary d-flex align-items-center" role="alert">
          <span class="alert-icon rounded">
            <i class="ti ti-user"></i>
          </span>
          This is a primary solid alert — check it out!
        </div>
        <div class="alert alert-solid-secondary d-flex align-items-center" role="alert">
          <span class="alert-icon rounded">
            <i class="ti ti-bookmark"></i>
          </span>
          This is a secondary solid alert — check it out!
        </div>
        <div class="alert alert-solid-success d-flex align-items-center" role="alert">
          <span class="alert-icon rounded">
            <i class="ti ti-check"></i>
          </span>
          This is a success solid alert — check it out!
        </div>
        <div class="alert alert-solid-danger d-flex align-items-center" role="alert">
          <span class="alert-icon rounded">
            <i class="ti ti-ban"></i>
          </span>
          This is a danger solid alert — check it out!
        </div>
        <div class="alert alert-solid-warning d-flex align-items-center" role="alert">
          <span class="alert-icon rounded">
            <i class="ti ti-bell"></i>
          </span>
          This is a warning solid alert — check it out!
        </div>
        <div class="alert alert-solid-info d-flex align-items-center" role="alert">
          <span class="alert-icon rounded">
            <i class="ti ti-info-circle"></i>
          </span>
          This is an info solid alert — check it out!
        </div>
        <div class="alert alert-solid-dark d-flex align-items-center mb-0" role="alert">
          <span class="alert-icon rounded">
            <i class="ti ti-at"></i>
          </span>
          This is a dark solid alert — check it out!
        </div>
      </div>
    </div>
  </div>
  <!--/ Alerts with Icons -->
</div>
<div class="row">
  <!-- Alerts with headings -->
  <div class="col-lg-6 mb-4 mb-lg-0">
    <div class="card">
      <h5 class="card-header">Alerts with Heading</h5>
      <div class="card-body">
        <div class="alert alert-primary alert-dismissible" role="alert">
          <h5 class="alert-heading mb-2">This is a primary alert — check it out!</h5>
          <p class="mb-0">Sugar plum apple pie sesame snaps croissant marshmallow apple pie liquorice. Cheesecake bear claw tiramisu shortbread cupcake. Sugar plum candy canes jujubes liquorice tiramisu gummi bears muffin dragée gingerbread.</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        <div class="alert alert-secondary alert-dismissible" role="alert">
          <h5 class="alert-heading mb-2">This is a secondary alert — check it out!</h5>
          <p class="mb-0">Sugar plum apple pie sesame snaps croissant marshmallow apple pie liquorice. Cheesecake bear claw tiramisu shortbread cupcake. Sugar plum candy canes jujubes liquorice tiramisu gummi bears muffin dragée gingerbread.</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        <div class="alert alert-success mb-0 alert-dismissible" role="alert">
          <h5 class="alert-heading mb-2">This is a success alert — check it out!</h5>
          <p class="mb-0">Sugar plum apple pie sesame snaps croissant marshmallow apple pie liquorice. Cheesecake bear claw tiramisu shortbread cupcake. Sugar plum candy canes jujubes liquorice tiramisu gummi bears muffin dragée gingerbread.</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--/ Alerts with headings -->
  <!-- Alert headings with icon -->
  <div class="col-lg-6 mb-4 mb-md-0">
    <div class="card">
      <h5 class="card-header">Alert headings with icon</h5>
      <div class="card-body">
        <div class="alert alert-primary alert-dismissible d-flex" role="alert">
          <span class="alert-icon rounded">
            <i class="ti ti-user"></i>
          </span>
          <div class="d-flex flex-column ps-1">
            <h5 class="alert-heading mb-2">This is a primary alert — check it out!</h5>
            <p class="mb-0">Sugar plum apple pie sesame snaps croissant marshmallow apple pie liquorice. Cheesecake bear claw tiramisu shortbread cupcake. Sugar plum candy canes jujubes liquorice tiramisu gummi bears muffin dragée gingerbread.</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>
        </div>
        <div class="alert alert-secondary alert-dismissible d-flex" role="alert">
          <span class="alert-icon rounded">
            <i class="ti ti-bookmark"></i>
          </span>
          <div class="d-flex flex-column ps-1">
            <h5 class="alert-heading mb-2">This is a secondary alert — check it out!</h5>
            <p class="mb-0">Sugar plum apple pie sesame snaps croissant marshmallow apple pie liquorice. Cheesecake bear claw tiramisu shortbread cupcake. Sugar plum candy canes jujubes liquorice tiramisu gummi bears muffin dragée gingerbread.</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>
        </div>
        <div class="alert alert-success alert-dismissible d-flex" role="alert">
          <span class="alert-icon rounded">
            <i class="ti ti-check"></i>
          </span>
          <div class="d-flex flex-column ps-1">
            <h5 class="alert-heading mb-2">This is a success alert — check it out!</h5>
            <p class="mb-0">Sugar plum apple pie sesame snaps croissant marshmallow apple pie liquorice. Cheesecake bear claw tiramisu shortbread cupcake. Sugar plum candy canes jujubes liquorice tiramisu gummi bears muffin dragée gingerbread.</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Alert headings with icon -->
</div>
@endsection
