@extends('layouts.common.master')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{ trans('global.show') }} Course</h4>
                    </div>
                </div>
            </div>

            <div class="row project-wrapper">
                <div class="col-xxl-12">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-primary rounded-2 fs-2">
                                                <i data-feather="briefcase"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Total Class</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{ $enrolledCourse->total_class }}">0</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-warning rounded-2 fs-2">
                                                <i data-feather="award"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-uppercase fw-medium text-muted mb-3">Completed</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{ $completedClassCount }}">0</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-info rounded-2 fs-2">
                                                <i data-feather="clock"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden ms-3">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Remaining Class</p>
                                            <div class="d-flex align-items-center mb-3">
                                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{ $incompleteClassCount }}">0</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <h4 class="card-title mb-0">Completed Classes</h4>
                        </div>

                        @if(!$completedClass->isEmpty())
                            <div data-simplebar style="height: 350px;" class="card-body pt-0">
                                @foreach ($completedClass as $key => $data)
                                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-success-subtle fs-4" style="background-color: #e3f7ed !important;">
                                                {{ $data->content_no }}
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">{{ $data->title }}</h6>
                                            <a class="badge bg-success-subtle text-success fs-12" style="background-color: #e3f7ed !important;" href="#">
                                                <i class="ri-arrow-right-s-line fs-13 align-middle me-1"></i>Class Material
                                            </a>
                                        </div>
                                        <div class="flex-shrink-0">

                                            <span class="badge bg-success-subtle text-success fs-12 mb-0" style="background-color: #e3f7ed !important;">
                                                {{ $data->class_time ?? 'TBA' }}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach

                                {{-- <div class="mt-3 text-center">
                                    <a href="javascript:void(0);" class="text-muted text-decoration-underline">View all</a>
                                </div> --}}

                            </div>
                        @else
                            <div class="card-body pt-0">
                                <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Not Available</h6>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <h4 class="card-title mb-0">Upcoming Classes</h4>
                        </div>

                        @if(!$incompleteClass->isEmpty())
                            <div data-simplebar style="height: 350px;" class="card-body pt-0">
                                @foreach ($incompleteClass as $key => $data)
                                    <div class="mini-stats-wid d-flex align-items-center mt-3">
                                        <div class="flex-shrink-0 avatar-sm">
                                            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-success-subtle fs-4" style="background-color: #e3f7ed !important;">
                                                {{ $data->content_no }}
                                            </span>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-1">{{ $data->title }}</h6>
                                            <a class="badge bg-success-subtle text-success fs-12" style="background-color: #e3f7ed !important;" href="#">
                                                <i class="ri-arrow-right-s-line fs-13 align-middle me-1"></i>Class URL
                                            </a>
                                        </div>
                                        <div class="flex-shrink-0">

                                            <span class="badge bg-success-subtle text-success fs-12 mb-0" style="background-color: #e3f7ed !important;">
                                                {{ $data->class_time ?? 'TBA' }}
                                            </span>
                                        </div>
                                    </div>
                                @endforeach

                                {{-- <div class="mt-3 text-center">
                                    <a href="javascript:void(0);" class="text-muted text-decoration-underline">View all</a>
                                </div> --}}

                            </div>
                        @else
                            <div class="card-body pt-0">
                                <h6 class="text-uppercase fw-semibold mt-4 mb-3 text-muted">Not Available</h6>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
@endsection

@section('scripts')
    @parent
    <script>
        $(document).ready(function() {
        });
    </script>
@endsection
