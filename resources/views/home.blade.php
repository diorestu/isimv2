@extends('layouts.main')

@section('content')
    <x-card title="">
        <div class="row p-4">
            <div class="col-md-4 col-sm-6">
                <div class="card statistics-card-1 overflow-hidden ">
                    <div class="card-body">

                        <img src="../assets/images/widget/img-status-4.svg" alt="img" class="img-fluid img-bg">
                        <h5 class="mb-4">Daily Sales</h5>
                        <div class="d-flex align-items-center mt-3">
                            <h3 class="f-w-300 d-flex align-items-center m-b-0">$249.95</h3>
                            <span class="badge bg-light-success ms-2">36%</span>
                        </div>
                        <p class="text-muted mb-2 text-sm mt-3">You made an extra 35,000 this daily</p>
                        <div class="progress" style="height: 7px">
                            <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card statistics-card-1">
                    <div class="card-body">
                        <img src="../assets/images/widget/img-status-1.svg" alt="img" class="img-fluid img-bg">
                        <div class="d-flex align-items-center">
                            <div class="avtar bg-brand-color-2 text-white me-3">
                                <i class="ph-duotone ph-scales f-26"></i>
                            </div>
                            <div>
                                <p class="text-muted mb-0">Conversion Rate</p>
                                <div class="d-flex align-items-end">
                                    <h2 class="mb-0 f-w-500">8.57<small class="text-muted">%</small></h2>
                                    <span class="badge bg-light-danger ms-2"><i class="ti ti-chevrons-down"></i> 3.6%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card statistics-card-1">
                    <div class="card-header d-flex align-items-center justify-content-between py-3">
                        <h5>Pending Orders</h5>
                        <div class="dropdown">
                            <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="material-icons-two-tone f-18">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">View</a>
                                <a class="dropdown-item" href="#">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="../assets/images/widget/img-status-2.svg" alt="img" class="img-fluid img-bg">
                        <div class="d-flex align-items-center">
                            <h3 class="f-w-300 d-flex align-items-center m-b-0">100 <small class="text-muted">/500</small>
                            </h3>
                            <span class="badge bg-light-primary ms-2">20%</span>
                        </div>
                        <p class="text-muted mb-2 text-sm mt-3">Delivery Orders</p>
                        <div class="progress" style="height: 7px">
                            <div class="progress-bar bg-brand-color-1" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card user-card">
                    <div class="card-body">
                        {{-- <div class="user-cover-bg">
                            <img src="../assets/images/application/img-user-cover-1.jpg" alt="image" class="img-fluid">
                            <div class="cover-data">
                                <div class="d-inline-flex align-items-center">
                                    <i class="ph-duotone ph-star text-warning me-1"></i>
                                    4.5 <small class="text-white text-opacity-50">/ 5</small>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="chat-avtar card-user-image">
                            <img src="../assets/images/user/avatar-1.jpg" alt="user-image"
                                class="img-thumbnail rounded-circle ">
                            <i class="chat-badge bg-success"></i>
                        </div> --}}
                        <div class="d-flex flex-wrap gap-2">
                            <div class="flex-grow-1">
                                <h6 class="mb-1">William Bond</h6>
                                <p class="text-muted text-sm mb-0">DM on <a href="#"
                                        class="text-primary">@williambond</a></p>
                            </div>
                            <div class="flex-shrink-0">
                                <button class="btn btn-primary btn-sm">Message</button>
                                <button class="btn btn-outline-secondary btn-sm ms-1">Follow</button>
                            </div>
                        </div>
                        <div class="row g-3 my-3 text-center">
                            <div class="col-4">
                                <h5 class="mb-0">86</h5>
                                <small class="text-muted">Post</small>
                            </div>
                            <div class="col-4 border border-top-0 border-bottom-0">
                                <h5 class="mb-0">40</h5>
                                <small class="text-muted">Project</small>
                            </div>
                            <div class="col-4">
                                <h5 class="mb-0">4.5K</h5>
                                <small class="text-muted">Members</small>
                            </div>
                        </div>
                        <div class="form-floating mb-0">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Email address">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="saprator my-3">
                            <span>Task completed</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 me-2">
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-primary" style="width: 60%"></div>
                                </div>
                            </div>
                            <div class="flex-shrink-0">
                                <h6 class="mb-0">30%</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-card>
@endsection
