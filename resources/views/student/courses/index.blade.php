@extends('layouts.common.master')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Course {{ trans('global.list') }}</h4>
                    </div>
                </div>
            </div>

            @include('layouts.common.session-message')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Total Course- {{ $totalCourses }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('student.courses.index') }}" method="GET">
                                        <div class="row d-flex flex-row align-items-center card-body">

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label class="" for="course_category">Course Category</label>
                                                    <select class="form-control search select2 {{ $errors->has('course_category') ? 'is-invalid' : '' }}" name="course_category" id="course_category">
                                                        <option value="">Select</option>
                                                        @foreach ($courseCategory as $key => $value)
                                                            <option value="{{ $key }}" {{ request('course_category', '') == $key ? 'selected' : '' }}>{{ $value }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="course_title">Title</label>
                                                    <input class="form-control" value="{{ request('course_title') }}" type="text" name="course_title" id="course_title">
                                                </div>
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <button type="submit" class="btn btn-success btn-md mr-3" style="padding: 6px 19px;"><i class="mdi mdi-file-search-outline"></i> Search</button>
                                                <a href="{{ route('student.courses.index') }}" class="btn btn-warning btn-md">Clear</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Course List</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered dt-responsive table-striped align-middle"
                                style="width:100%">
                                @if (!($enrolledCourses->isEmpty()))
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            {{-- <th>Title</th> --}}
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody id="filteredData">
                                        @foreach ($enrolledCourses as $key => $data)
                                        <tr>
                                            {{-- <td>{{ $enrolledCourses->firstItem() + $key }}</td> --}}
                                            <td>{{ ($enrolledCourses->currentPage() - 1) * $enrolledCourses->perPage() + $loop->iteration }}</td>
                                            {{-- <td>{{ $data->courseEnrollment->courses ? $data->courseEnrollment->courses->title : null}}</td>
                                            <td>{{ $data->courseEnrollment->courses ? $data->courseEnrollment->courses->price : null }}</td> --}}
                                            {{-- <td>
                                               <a class="btn btn-sm btn-primary mt-2"
                                                    href="{{ route('student.courses.show', $data->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>

                                                <a class="btn btn-sm btn-info mt-2"
                                                    href="{{ route('student.courses.edit', $data->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>

                                                <a class="btn btn-sm btn-danger mt-2" onclick="return confirm('{{ trans('global.areYouSure') }}');"
                                                    href ="{{ route('student.courses.delete', $data->id) }}">
                                                    {{ trans('global.delete') }}
                                                </a>
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <tr>
                                        <td rowspan="5">
                                            <h5 class="text-center">Not available</h5>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                        {{ $enrolledCourses->withQueryString()->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
        @parent
        <script>
        </script>
    @endsection
