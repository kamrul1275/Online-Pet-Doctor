@extends('doctor.layout.doctor_master')




@section('doctor_content')

    @php

    $id = Auth::user()->id;

    $doctor_id =App\Models\User::find($id);

    $status= $doctor_id->status;

    //dd($status);
    @endphp


    @if($status=== 'active')

    <h4>Doctor account is <span class="text-success">Active</span> </h4>

    @else
    <h4>Doctor account is <span class="text-danger">InActive</span> </h4>

    <p class="text-danger"> <b> Please wait, Admin will be approve</b></p>

    @endif




<div class="content">
    <div class="row">
      <!-- Row #1 -->
      <div class="col-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
          <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
            <div class="d-none d-sm-block">
              <i class="fa fa-shopping-bag fa-2x opacity-25"></i>
            </div>
            <div>
              <div class="fs-3 fw-semibold">1500</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
          <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
            <div class="d-none d-sm-block">
              <i class="fa fa-wallet fa-2x opacity-25"></i>
            </div>
            <div>
              <div class="fs-3 fw-semibold">$780</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
          <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
            <div class="d-none d-sm-block">
              <i class="fa fa-envelope-open fa-2x opacity-25"></i>
            </div>
            <div>
              <div class="fs-3 fw-semibold">15</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">Messages</div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-end" href="javascript:void(0)">
          <div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
            <div class="d-none d-sm-block">
              <i class="fa fa-users fa-2x opacity-25"></i>
            </div>
            <div>
              <div class="fs-3 fw-semibold">4252</div>
              <div class="fs-sm fw-semibold text-uppercase text-muted">Online</div>
            </div>
          </div>
        </a>
      </div>
      <!-- END Row #1 -->
    </div>
    <div class="row">
      <!-- Row #2 -->
      <div class="col-md-6">
        <div class="block block-rounded">
          <div class="block-header">
            <h3 class="block-title">
              Sales <small>This week</small>
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="si si-wrench"></i>
              </button>
            </div>
          </div>
          <div class="block-content p-1 bg-body-light">
            <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
            <canvas id="js-chartjs-dashboard-lines"></canvas>
          </div>
          <div class="block-content">
            <div class="row items-push">
              <div class="col-6 col-sm-4 text-center text-sm-start">
                <div class="fs-sm fw-semibold text-uppercase text-muted">This Month</div>
                <div class="fs-4 fw-semibold">720</div>
                <div class="fw-semibold text-success">
                  <i class="fa fa-caret-up"></i> +16%
                </div>
              </div>
              <div class="col-6 col-sm-4 text-center text-sm-start">
                <div class="fs-sm fw-semibold text-uppercase text-muted">This Week</div>
                <div class="fs-4 fw-semibold">160</div>
                <div class="fw-semibold text-danger">
                  <i class="fa fa-caret-down"></i> -3%
                </div>
              </div>
              <div class="col-12 col-sm-4 text-center text-sm-start">
                <div class="fs-sm fw-semibold text-uppercase text-muted">Average</div>
                <div class="fs-4 fw-semibold">24.3</div>
                <div class="fw-semibold text-success">
                  <i class="fa fa-caret-up"></i> +9%
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="block block-rounded">
          <div class="block-header">
            <h3 class="block-title">
              Earnings <small>This week</small>
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
              <button type="button" class="btn-block-option">
                <i class="si si-wrench"></i>
              </button>
            </div>
          </div>
          <div class="block-content p-1 bg-body-light">
            <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
            <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
            <canvas id="js-chartjs-dashboard-lines2"></canvas>
          </div>
          <div class="block-content">
            <div class="row items-push">
              <div class="col-6 col-sm-4 text-center text-sm-start">
                <div class="fs-sm fw-semibold text-uppercase text-muted">This Month</div>
                <div class="fs-4 fw-semibold">$ 6,540</div>
                <div class="fw-semibold text-success">
                  <i class="fa fa-caret-up"></i> +4%
                </div>
              </div>
              <div class="col-6 col-sm-4 text-center text-sm-start">
                <div class="fs-sm fw-semibold text-uppercase text-muted">This Week</div>
                <div class="fs-4 fw-semibold">$ 1,525</div>
                <div class="fw-semibold text-danger">
                  <i class="fa fa-caret-down"></i> -7%
                </div>
              </div>
              <div class="col-12 col-sm-4 text-center text-sm-start">
                <div class="fs-sm fw-semibold text-uppercase text-muted">Balance</div>
                <div class="fs-4 fw-semibold">$ 9,352</div>
                <div class="fw-semibold text-success">
                  <i class="fa fa-caret-up"></i> +35%
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Row #2 -->
    </div>

  </div>






@endsection
