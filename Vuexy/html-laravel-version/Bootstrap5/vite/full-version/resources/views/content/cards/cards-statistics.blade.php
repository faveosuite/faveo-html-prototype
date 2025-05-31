@extends('layouts/layoutMaster')

@section('title', 'Cards Statistics- UI elements')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/apex-charts/apex-charts.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/apex-charts/apexcharts.js'])
@endsection

@section('page-script')
@vite(['resources/assets/js/cards-statistics.js'])
@endsection

@section('content')
<div class="row g-6">
  <!-- Statistics -->
  <div class="col-lg-8 col-md-12">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <h5 class="card-title mb-0">Statistics</h5>
        <small class="text-muted">Updated 1 month ago</small>
      </div>
      <div class="card-body">
        <div class="row gy-3">
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded bg-label-primary me-4 p-2"><i class="ti ti-chart-pie-2 ti-lg"></i></div>
              <div class="card-info">
                <h5 class="mb-0">230k</h5>
                <small>Sales</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded bg-label-info me-4 p-2"><i class="ti ti-users ti-lg"></i></div>
              <div class="card-info">
                <h5 class="mb-0">8.549k</h5>
                <small>Customers</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded bg-label-danger me-4 p-2"><i class="ti ti-shopping-cart ti-lg"></i></div>
              <div class="card-info">
                <h5 class="mb-0">1.423k</h5>
                <small>Products</small>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="d-flex align-items-center">
              <div class="badge rounded bg-label-success me-4 p-2"><i class="ti ti-currency-dollar ti-lg"></i></div>
              <div class="card-info">
                <h5 class="mb-0">$9745</h5>
                <small>Revenue</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Orders -->
  <div class="col-lg-2 col-6">
    <div class="card h-100">
      <div class="card-body text-center">
        <div class="badge rounded p-2 bg-label-danger mb-2"><i class="ti ti-briefcase ti-lg"></i></div>
        <h5 class="card-title mb-1">97.8k</h5>
        <p class="mb-0">Orders</p>
      </div>
    </div>
  </div>

  <!-- Reviews -->
  <div class="col-lg-2 col-6">
    <div class="card h-100">
      <div class="card-body text-center">
        <div class="badge rounded p-2 bg-label-success mb-2"><i class="ti ti-message-dots ti-lg"></i></div>
        <h5 class="card-title mb-1">3.4k</h5>
        <p class="mb-0">Review</p>
      </div>
    </div>
  </div>

  <!-- Orders last week -->
  <div class="col-xl-2 col-md-4 col-6">
    <div class="card h-100">
      <div class="card-header pb-3">
        <h5 class="card-title mb-1">Order</h5>
        <p class="card-subtitle">Last week</p>
      </div>
      <div class="card-body">
        <div id="ordersLastWeek"></div>
        <div class="d-flex justify-content-between align-items-center gap-3">
          <h4 class="mb-0">124k</h4>
          <small class="text-success">+12.6%</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Sales last year -->
  <div class="col-xl-2 col-md-4 col-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h5 class="card-title mb-1">Sales</h5>
        <p class="card-subtitle">Last Year</p>
      </div>
      <div id="salesLastYear"></div>
      <div class="card-body pt-0">
        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
          <h4 class="mb-0">175k</h4>
          <small class="text-danger">-16.2%</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Profit last month -->
  <div class="col-xl-2 col-md-4 col-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h5 class="card-title mb-1">Profit</h5>
        <p class="card-subtitle">Last Month</p>
      </div>
      <div class="card-body">
        <div id="profitLastMonth"></div>
        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
          <h4 class="mb-0">624k</h4>
          <small class="text-success">+8.24%</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Sessions Last month -->
  <div class="col-xl-2 col-md-4 col-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h5 class="card-title mb-1">Sessions</h5>
        <p class="card-subtitle">Last Month</p>
      </div>
      <div class="card-body">
        <div id="sessionsLastMonth"></div>
        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
          <h4 class="mb-0">45.1k</h4>
          <small class="text-success">+12.6%</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Expenses -->
  <div class="col-xl-2 col-md-4 col-6">
    <div class="card h-100">
      <div class="card-header pb-2">
        <h5 class="card-title mb-1">82.5k</h5>
        <p class="card-subtitle">Expenses</p>
      </div>
      <div class="card-body">
        <div id="expensesChart"></div>
        <div class="mt-3 text-center">
          <small class="text-muted mt-3">$21k Expenses more than last month</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Impression -->
  <div class="col-xl-2 col-md-4 col-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h5 class="card-title mb-1">Impression</h5>
        <p class="card-subtitle">This Week</p>
      </div>
      <div class="card-body">
        <div id="impressionThisWeek"></div>
        <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
          <h4 class="mb-0">26.1k</h4>
          <small class="text-danger">-24.5%</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Card Border Shadow -->

  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-primary h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-primary"><i class='ti ti-truck ti-28px'></i></span>
          </div>
          <h4 class="mb-0">42</h4>
        </div>
        <p class="mb-1">On route vehicles</p>
        <p class="mb-0">
          <span class="text-heading fw-medium me-2">+18.2%</span>
          <small class="text-muted">than last week</small>
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-warning h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-warning"><i class='ti ti-alert-triangle ti-28px'></i></span>
          </div>
          <h4 class="mb-0">8</h4>
        </div>
        <p class="mb-1">Vehicles with errors</p>
        <p class="mb-0">
          <span class="text-heading fw-medium me-2">-8.7%</span>
          <small class="text-muted">than last week</small>
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-danger h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-danger"><i class='ti ti-git-fork ti-28px'></i></span>
          </div>
          <h4 class="mb-0">27</h4>
        </div>
        <p class="mb-1">Deviated from route</p>
        <p class="mb-0">
          <span class="text-heading fw-medium me-2">+4.3%</span>
          <small class="text-muted">than last week</small>
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card card-border-shadow-info h-100">
      <div class="card-body">
        <div class="d-flex align-items-center mb-2">
          <div class="avatar me-4">
            <span class="avatar-initial rounded bg-label-info"><i class='ti ti-clock ti-28px'></i></span>
          </div>
          <h4 class="mb-0">13</h4>
        </div>
        <p class="mb-1">Late vehicles</p>
        <p class="mb-0">
          <span class="text-heading fw-medium me-2">-2.5%</span>
          <small class="text-muted">than last week</small>
        </p>
      </div>
    </div>
  </div>
  <!--/ Card Border Shadow -->
  <!-- Cards with few info -->
  <div class="col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div class="card-title mb-0">
          <h5 class="mb-1 me-2">86%</h5>
          <p class="mb-0">CPU Usage</p>
        </div>
        <div class="card-icon">
          <span class="badge bg-label-primary rounded p-2">
            <i class='ti ti-cpu ti-26px'></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div class="card-title mb-0">
          <h5 class="mb-1 me-2">1.24gb</h5>
          <p class="mb-0">Memory Usage</p>
        </div>
        <div class="card-icon">
          <span class="badge bg-label-success rounded p-2">
            <i class='ti ti-server ti-26px'></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div class="card-title mb-0">
          <h5 class="mb-1 me-2">0.2%</h5>
          <p class="mb-0">Downtime Ratio</p>
        </div>
        <div class="card-icon">
          <span class="badge bg-label-danger rounded p-2">
            <i class='ti ti-chart-pie-2 ti-26px'></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div class="card-title mb-0">
          <h5 class="mb-1 me-2">128</h5>
          <p class="mb-0">Issues Found</p>
        </div>
        <div class="card-icon">
          <span class="badge bg-label-warning rounded p-2">
            <i class='ti ti-alert-octagon ti-26px'></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <!--/ Cards with few info -->

  <!-- Cards with charts & info -->
  <!-- Subscriber Gained -->
  <div class="col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body pb-0">
        <div class="card-icon">
          <span class="badge bg-label-primary rounded p-2">
            <i class='ti ti-users ti-26px'></i>
          </span>
        </div>
        <h5 class="card-title mb-0 mt-2">92.6k</h5>
        <small>Subscribers Gained</small>
      </div>
      <div id="subscriberGained"></div>
    </div>
  </div>

  <!-- Quarterly Sales -->
  <div class="col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body pb-0">
        <div class="card-icon">
          <span class="badge bg-label-danger rounded p-2">
            <i class='ti ti-shopping-cart ti-26px'></i>
          </span>
        </div>
        <h5 class="card-title mb-0 mt-2">36.5%</h5>
        <small>Quarterly Sales</small>
      </div>
      <div id="quarterlySales"></div>
    </div>
  </div>

  <!-- Order Received -->
  <div class="col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body pb-0">
        <div class="card-icon">
          <span class="badge bg-label-warning rounded p-2">
            <i class='ti ti-package ti-26px'></i>
          </span>
        </div>
        <h5 class="card-title mb-0 mt-2">97.5k</h5>
        <small>Order Received</small>
      </div>
      <div id="orderReceived"></div>
    </div>
  </div>

  <!-- Revenue Generated -->
  <div class="col-lg-3 col-sm-6">
    <div class="card h-100">
      <div class="card-body pb-0">
        <div class="card-icon">
          <span class="badge bg-label-success rounded p-2">
            <i class='ti ti-credit-card ti-26px'></i>
          </span>
        </div>
        <h5 class="card-title mb-0 mt-2">97.5k</h5>
        <small>Revenue Generated</small>
      </div>
      <div id="revenueGenerated"></div>
    </div>
  </div>

  <!-- Average Daily Sales -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h5 class="mb-3 card-title">Average Daily Sales</h5>
        <p class="mb-0 text-body">Total Sales This Month</p>
        <h4 class="mb-0">$28,450</h4>
      </div>
      <div class="card-body px-0">
        <div id="averageDailySales"></div>
      </div>
    </div>
  </div>

  <!-- Sales Overview -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <p class="mb-0 text-body">Sales Overview</p>
          <p class="card-text fw-medium text-success">+18.2%</p>
        </div>
        <h4 class="card-title mb-1">$42.5k</h4>
      </div>
      <div class="card-body">
        <div class="row mt-4">
          <div class="col-4">
            <div class="d-flex gap-2 align-items-center mb-2">
              <span class="badge bg-label-info p-1 rounded"><i class="ti ti-shopping-cart ti-sm"></i></span>
              <p class="mb-0">Order</p>
            </div>
            <h5 class="mb-0 pt-1">62.2%</h5>
            <small class="text-muted">6,440</small>
          </div>
          <div class="col-4">
            <div class="divider divider-vertical">
              <div class="divider-text">
                <span class="badge-divider-bg bg-label-secondary">VS</span>
              </div>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
              <p class="mb-0">Visits</p>
              <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-link ti-sm"></i></span>
            </div>
            <h5 class="mb-0 pt-1">25.5%</h5>
            <small class="text-muted">12,749</small>
          </div>
        </div>
        <div class="d-flex align-items-center mt-6">
          <div class="progress w-100" style="height: 10px;">
            <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Avg Daily Traffic -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0 d-flex justify-content-between align-items-start">
        <div class="card-title mb-0">
          <h4 class="mb-0">2.84k</h4>
          <small class="text-body">Avg Daily Traffic</small>
        </div>
        <div class="badge bg-label-success">+15%</div>
      </div>
      <div class="card-body">
        <div id="averageDailyTraffic"></div>
      </div>
    </div>
  </div>

  <!-- Statistics -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header d-flex align-items-start justify-content-between">
        <h5 class="card-title mb-0">Statistics</h5>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="progressStat" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="progressStat">
            <a class="dropdown-item" href="javascript:void(0);">View More</a>
            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2 gap-3">
          <h6 class="mb-0">Subscribers Gained</h6>
          <div class="badge bg-label-success">+92k</div>
        </div>
        <div class="d-flex justify-content-between align-items-center gap-3">
          <p class="mb-0">1.2k new subscriber</p>
          <small class="text-muted">85%</small>
        </div>
        <div class="d-flex align-items-center mt-1">
          <div class="progress w-100" style="height: 8px;">
            <div class="progress-bar bg-primary" style="width: 85%" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-6 mb-2 gap-3">
          <h6 class="mb-0">Orders Received</h6>
          <div class="badge bg-label-success">+38k</div>
        </div>
        <div class="d-flex justify-content-between align-items-center gap-3">
          <p class="mb-0">2.4k new orders</p>
          <small class="text-muted">65%</small>
        </div>
        <div class="d-flex align-items-center mt-1">
          <div class="progress w-100" style="height: 8px;">
            <div class="progress-bar bg-info" style="width: 65%" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Profit -->
  <div class="col-lg-2 col-6 mb-lg-0">
    <div class="card h-100">
      <div class="card-body">
        <div class="badge p-2 bg-label-danger mb-3 rounded"><i class="ti ti-credit-card ti-28px"></i></div>
        <h5 class="card-title mb-1">Total Profit</h5>
        <p class="card-subtitle ">Last week</p>
        <p class="text-heading mb-3 mt-1">1.28k</p>
        <div>
          <span class="badge bg-label-danger">-12.2%</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Sales -->
  <div class="col-lg-2 col-6 mb-lg-0">
    <div class="card h-100">
      <div class="card-body">
        <div class="badge p-2 bg-label-success mb-3 rounded"><i class="ti ti-credit-card ti-28px"></i></div>
        <h5 class="card-title mb-1">Total Sales</h5>
        <p class="card-subtitle ">Last week</p>
        <p class="text-heading mb-3 mt-1">$4,673</p>
        <div>
          <span class="badge bg-label-success">+25.2%</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Revenue Growth -->
  <div class="col-lg-4 col-md-6 mb-md-0">
    <div class="card h-100">
      <div class="card-body d-flex justify-content-between">
        <div class="d-flex flex-column">
          <div class="card-title mb-auto">
            <h5 class="mb-2 text-nowrap">Revenue Growth</h5>
            <p class="mb-0">Weekly Report</p>
          </div>
          <div class="chart-statistics">
            <h3 class="card-title mb-1">$4,673</h3>
            <span class="badge bg-label-success">+15.2%</span>
          </div>
        </div>
        <div id="revenueGrowth"></div>
      </div>
    </div>
  </div>

  <!-- Generated Leads -->
  <div class="col-lg-4 col-md-6">
    <div class="card h-100">
      <div class="card-body d-flex justify-content-between">
        <div class="d-flex flex-column">
          <div class="card-title mb-auto">
            <h5 class="mb-0 text-nowrap">Generated Leads</h5>
            <p class="mb-0">Monthly Report</p>
          </div>
          <div class="chart-statistics">
            <h3 class="card-title mb-0">4,350</h3>
            <p class="text-success text-nowrap mb-0"><i class='ti ti-chevron-up me-1'></i> 15.8%</p>
          </div>
        </div>
        <div id="generatedLeadsChart"></div>
      </div>
    </div>
  </div>
  <!--/ Cards with charts & info -->
</div>
@endsection
