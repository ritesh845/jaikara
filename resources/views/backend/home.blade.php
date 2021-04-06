@extends('backend.layouts.main')
@section('content')
   <div class="card card-dashboard-seven">
          <div class="card-header">
            <div class="row row-sm">
              <div class="col-6 col-md-4 col-xl">
                <div class="media">
                  <div><i class="icon ion-ios-calendar"></i></div>
                  <div class="media-body">
                    <label>Start Date</label>
                    <div class="date">
                      <span>Sept 01, 2018</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
              <div class="col-6 col-md-4 col-xl">
                <div class="media">
                  <div><i class="icon ion-ios-calendar"></i></div>
                  <div class="media-body">
                    <label>End Date</label>
                    <div class="date">
                      <span>Sept 30, 2018</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
              <div class="col-6 col-md-4 col-xl mg-t-15 mg-md-t-0">
                <div class="media">
                  <div><i class="icon ion-logo-usd"></i></div>
                  <div class="media-body">
                    <label>Sales Measure</label>
                    <div class="date">
                      <span>Revenue</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
              <div class="col-6 col-md-4 col-xl mg-t-15 mg-xl-t-0">
                <div class="media">
                  <div><i class="icon ion-md-person"></i></div>
                  <div class="media-body">
                    <label>Customer Type</label>
                    <div class="date">
                      <span>All Customers</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
              <div class="col-md-4 col-xl mg-t-15 mg-xl-t-0">
                <div class="media">
                  <div><i class="icon ion-md-stats"></i></div>
                  <div class="media-body">
                    <label>Transaction Type</label>
                    <div class="date">
                      <span>All Transactions</span> <a href="#"><i class="icon ion-md-arrow-dropdown"></i></a>
                    </div>
                  </div>
                </div><!-- media -->
              </div>
            </div><!-- row -->
          </div><!-- card-header -->
       
        </div><!-- card -->
@endsection