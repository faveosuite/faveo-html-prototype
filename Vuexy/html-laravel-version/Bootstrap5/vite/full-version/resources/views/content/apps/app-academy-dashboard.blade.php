@extends('layouts/layoutMaster')

@section('title', 'Academy Dashboard - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/apex-charts/apex-charts.scss'
  ])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/apex-charts/apexcharts.js',
  ])
@endsection

@section('page-script')
@vite('resources/assets/js/app-academy-dashboard.js')
@endsection

@section('content')
<!-- Hour chart  -->
<div class="card bg-transparent shadow-none my-6 border-0">
  <div class="card-body row p-0 pb-6 g-6">
    <div class="col-12 col-lg-8 card-separator">
      <h5 class="mb-2">Welcome back,<span class="h4"> Felecia 👋🏻</span></h5>
      <div class="col-12 col-lg-5">
        <p>Your progress this week is Awesome. let's keep it up and get a lot of points reward !</p>
      </div>
      <div class="d-flex justify-content-between flex-wrap gap-4 me-12">
        <div class="d-flex align-items-center gap-4 me-6 me-sm-0">
          <div class="avatar avatar-lg">
            <div class="avatar-initial bg-label-primary rounded">
              <div>
                <img src="{{asset('assets/svg/icons/laptop.svg')}}" alt="paypal" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-0 fw-medium">Hours Spent</p>
            <h4 class="text-primary mb-0">34h</h4>
          </div>
        </div>
        <div class="d-flex align-items-center gap-4">
          <div class="avatar avatar-lg">
            <div class="avatar-initial bg-label-info rounded">
              <div>
                <img src="{{asset('assets/svg/icons/lightbulb.svg')}}" alt="Lightbulb" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-0 fw-medium">Test Results</p>
            <h4 class="text-info mb-0">82%</h4>
          </div>
        </div>
        <div class="d-flex align-items-center gap-4">
          <div class="avatar avatar-lg">
            <div class="avatar-initial bg-label-warning rounded">
              <div>
                <img src="{{asset('assets/svg/icons/check.svg')}}" alt="Check" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="content-right">
            <p class="mb-0 fw-medium">Course Completed </p>
            <h4 class="text-warning mb-0">14</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 ps-md-4 ps-lg-6">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <div>
            <h5 class="mb-1">Time Spendings</h5>
            <p class="mb-9">Weekly report</p>
          </div>
          <div class="time-spending-chart">
            <h4 class="mb-2">231<span class="text-body">h</span> 14<span class="text-body">m</span></h4>
            <span class="badge bg-label-success">+18.4%</span>
          </div>
        </div>
        <div id="leadsReportChart"></div>
      </div>
    </div>
  </div>
</div>
<!-- Hour chart End  -->

<!-- Topic and Instructors -->
<div class="row mb-6 g-6">
  <!-- Interested Topics -->
  <div class="col-xxl-8">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Topic you are interested in</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="topic" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topic">
            <a class="dropdown-item" href="javascript:void(0);">Highest Views</a>
            <a class="dropdown-item" href="javascript:void(0);">See All</a>
          </div>
        </div>
      </div>
      <div class="card-body row g-6">
        <div class="col-xxl-7 col-md-8">
          <div id="horizontalBarChart"></div>
        </div>
        <div class="col-1 d-none d-xxl-block"></div>
        <div class="col-md-4 d-flex justify-content-around align-items-center">
          <div>
            <div class="d-flex align-items-baseline">
              <span class="text-primary me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
              <div>
                <p class="mb-0">UI Design</p>
                <h5>35%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline my-12">
              <span class="text-success me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
              <div>
                <p class="mb-0">Music</p>
                <h5>14%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <span class="text-danger me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
              <div>
                <p class="mb-0">React</p>
                <h5>10%</h5>
              </div>
            </div>
          </div>

          <div>
            <div class="d-flex align-items-baseline">
              <span class="text-info me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
              <div>
                <p class="mb-0">UX Design</p>
                <h5>20%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline my-12">
              <span class="text-secondary me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
              <div>
                <p class="mb-0">Animation</p>
                <h5>12%</h5>
              </div>
            </div>
            <div class="d-flex align-items-baseline">
              <span class="text-warning me-2"><i class='ti ti-circle-filled ti-12px'></i></span>
              <div>
                <p class="mb-0">SEO</p>
                <h5>9%</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Interested Topics -->

  <!-- Popular Instructors -->
  <div class="col-xxl-4 col-lg-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Popular Instructors</h5>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="popularInstructors" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularInstructors">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="px-5 py-4 border border-start-0 border-end-0">
        <div class="d-flex justify-content-between align-items-center">
          <p class="mb-0 text-uppercase">Instructors</p>
          <p class="mb-0 text-uppercase">courses</p>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Maven Analytics</h6>
                <small class="text-truncate text-body">Business Intelligence</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">33</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{asset('assets/img/avatars/2.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Bentlee Emblin</h6>
                <small class="text-truncate text-body">Digital Marketing</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">52</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-6">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Benedetto Rossiter</h6>
                <small class="text-truncate text-body">UI/UX Design</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">12</h6>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <div class="avatar avatar me-4">
              <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle" />
            </div>
            <div>
              <div>
                <h6 class="mb-0 text-truncate">Alma Gonzalez</h6>
                <small class="text-truncate text-body">Java Developer</small>
              </div>
            </div>
          </div>
          <div class="text-end">
            <h6 class="mb-0">8</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Popular Instructors -->

  <!-- Top Courses -->
  <div class="col-xxl-4 col-lg-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Top Courses</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="topCourses" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="topCourses">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mb-0">
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-video ti-lg"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                <h6 class="mb-0">Videography Basic Design Course</h6>
              </div>
              <div class="col-sm-4 d-flex justify-content-sm-end">
                <div class="badge bg-label-secondary">1.2k Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-info"><i class="ti ti-code ti-lg"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                <h6 class="mb-0">Basic Front-end Development Course</h6>
              </div>
              <div class="col-sm-4 d-flex justify-content-sm-end">
                <div class="badge bg-label-secondary">834 Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-success"><i class="ti ti-camera ti-lg"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                <h6 class="mb-0">Basic Fundamentals of Photography</h6>
              </div>
              <div class="col-sm-4 d-flex justify-content-sm-end">
                <div class="badge bg-label-secondary">3.7k Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6 align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-warning"><i class="ti ti-brand-dribbble ti-lg"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                <h6 class="mb-0">Advance Dribble Base Visual Design</h6>
              </div>
              <div class="col-sm-4 d-flex justify-content-sm-end">
                <div class="badge bg-label-secondary">2.5k Views</div>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <span class="avatar-initial rounded bg-label-danger"><i class="ti ti-microphone-2 ti-lg"></i></span>
            </div>
            <div class="row w-100 align-items-center">
              <div class="col-sm-8 mb-1 mb-sm-0 mb-lg-1 mb-xxl-0">
                <h6 class="mb-0">Your First Singing Lesson</h6>
              </div>
              <div class="col-sm-4 d-flex justify-content-sm-end">
                <div class="badge bg-label-secondary">948 Views</div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Top Courses -->

  <!-- Upcoming Webinar -->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-body">
        <div class="bg-label-primary rounded text-center mb-4 pt-4">
          <img class="img-fluid" src="{{asset('assets/img/illustrations/girl-with-laptop.png')}}" alt="Card girl image" width="140" />
        </div>
        <h5 class="mb-2">Upcoming Webinar</h5>
        <p class="small">Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
        <div class="row mb-4 g-3">
          <div class="col-6">
            <div class="d-flex">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-calendar-event ti-28px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap">17 Nov 23</h6>
                <small>Date</small>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex">
              <div class="avatar flex-shrink-0 me-3">
                <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-clock ti-28px"></i></span>
              </div>
              <div>
                <h6 class="mb-0 text-nowrap">32 minutes</h6>
                <small>Duration</small>
              </div>
            </div>
          </div>
        </div>
        <a href="javascript:void(0);" class="btn btn-primary w-100">Join the event</a>
      </div>
    </div>
  </div>
  <!--/ Upcoming Webinar -->

  <!-- Assignment Progress -->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Assignment Progress</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="assignmentProgress" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="assignmentProgress">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-6">
            <div class="chart-progress me-4" data-color="primary" data-series="72" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">User experience Design</h6>
                  <small>120 Tasks</small>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="ti ti-chevron-right scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="chart-progress me-4" data-color="success" data-series="48" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">Basic fundamentals</h6>
                  <small>32 Tasks</small>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="ti ti-chevron-right scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex mb-6">
            <div class="chart-progress me-4" data-color="danger" data-series="15" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">React native components</h6>
                  <small>182 Tasks</small>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="ti ti-chevron-right scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="chart-progress me-4" data-color="info" data-series="24" data-progress_variant="true"></div>
            <div class="row w-100 align-items-center">
              <div class="col-9">
                <div class="me-2">
                  <h6 class="mb-2">Basic of music theory</h6>
                  <small>56 Tasks</small>
                </div>
              </div>
              <div class="col-3 text-end">
                <button type="button" class="btn btn-sm btn-icon btn-label-secondary">
                  <i class="ti ti-chevron-right scaleX-n1-rtl"></i>
                </button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Assignment Progress -->

</div>
<!--  Topic and Instructors  End-->

<!-- Course datatable -->
<div class="card">
  <div class="table-responsive mb-4">
    <table class="table table-sm datatables-academy-course">
      <thead class="border-top">
        <tr>
          <th></th>
          <th></th>
          <th>Course Name</th>
          <th>Time</th>
          <th class="w-25">Progress</th>
          <th class="w-25">Status</th>
        </tr>
      </thead>
    </table>
  </div>
</div>

<!-- Course datatable End -->

@endsection
