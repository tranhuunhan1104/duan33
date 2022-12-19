@extends('layout.master')
@section('content')
<div class="content-wrapper">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0 font-weight-bold">Trang quản lí sản phẩm </h3>
              </div>

            </div>
            <div class="row  mt-3">
              <div class="col-xl-5 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Thống kê doanh số của sản phẩm</h4>
                      {{-- <div id="circleProgress6" class="progressbar-js-circle rounded p-3"></div> --}}

                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-lg-9">
                            <ul class="session-by-channel-legend">
                              <li>
                                <div>Firewalls(3)</div>
                                <div>4(100%)</div>
                              </li>
                              <li>
                                <div>Ports(12)</div>
                                <div>12(100%)</div>
                              </li>
                              <li>
                                <div>Servers(233)</div>
                                <div>2(100%)</div>
                              </li>
                              <li>
                                <div>Firewalls(3)</div>
                                <div>7(100%)</div>
                              </li>
                              <li>
                                <div>Firewalls(3)</div>
                                <div>6(70%)</div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Những mặt hàng hot </h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="d-flex justify-content-between mb-md-5 mt-3">
                              <div class="small">Critical</div>
                              <div class="text-danger small">Error</div>
                              <div  class="text-warning small">Warning</div>
                            </div>
                            <canvas id="eventChart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Đánh giá của người dùng về cửa hàng</h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="d-flex justify-content-between mb-4">
                              <div>Uptime</div>
                              <div class="text-muted">195 Days, 8 hours</div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                              <div>First Seen</div>
                              <div class="text-muted">23 Sep 2019, 2.04PM</div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                              <div>Collected time</div>
                              <div class="text-muted">23 Sep 2019, 2.04PM</div>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                              <div>Memory space</div>
                              <div class="text-muted">168.3GB</div>
                            </div>
                            <div class="progress progress-md mt-4">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Những mẫu được dự đoán sẽ hot</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">doanh thu tháng của cửa hàng</h4>
                      <button type="button" class="btn btn-sm btn-light">Month</button>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="d-md-flex mb-4">
                          <div class="mr-md-5 mb-4">
                            <h5 class="mb-1"><i class="typcn typcn-globe-outline mr-1"></i>Online</h5>
                            <h2 class="text-primary mb-1 font-weight-bold">23,342</h2>
                          </div>
                          <div class="mr-md-5 mb-4">
                            <h5 class="mb-1"><i class="typcn typcn-archive mr-1"></i>Offline</h5>
                            <h2 class="text-secondary mb-1 font-weight-bold">13,221</h2>
                          </div>
                          <div class="mr-md-5 mb-4">
                            <h5 class="mb-1"><i class="typcn typcn-tags mr-1"></i>Marketing</h5>
                            <h2 class="text-warning mb-1 font-weight-bold">1,542</h2>
                          </div>
                        </div>
                        <canvas id="salesanalyticChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>




@endsection

