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
                <div class="col-12">
                    <div style="margin-bottom: 10px;" class="row">
                        <div class="col-lg-12 text-end">
                            <a class="btn btn-success" href="{{ route('teacher.courses.create') }}">
                                {{ trans('global.add') }} Course
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example"
                                class="table table-bordered dt-responsive table-striped align-middle"
                                style="width:100%">
                                @if (!($courses->isEmpty()))
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Instructor</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Created By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="filteredData">
                                        @foreach ($courses as $key => $course)
                                        <tr>
                                            {{-- <td>{{ $courses->firstItem() + $key }}</td> --}}
                                            <td>{{ ($courses->currentPage() - 1) * $courses->perPage() + $loop->iteration }}</td>
                                            <td>{{ $course->title }}</td>
                                            <td>{{ ($course->courseCategory) ? $course->courseCategory->name : '' }}</td>
                                            <td>{{ ($course->courseTeacher) ? $course->courseTeacher->email : '' }}</td>
                                            <td>{{ $course->price }}</td>
                                            <td>{{ App\Models\Course::STATUS_SELECT[$course->status] }}</td>
                                            <td>{{ ($course->createdBy) ? $course->createdBy->email : '' }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-primary mt-2"
                                                    href="{{ route('teacher.courses.show', $course->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                                <a class="btn btn-sm btn-info mt-2"
                                                    href="{{ route('teacher.courses.edit', $course->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>

                                                <form action="{{ route('teacher.courses.delete', $course->id) }}" method="POST"
                                                    onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                                    style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-sm btn-danger mt-2" value="{{ trans('global.delete') }}">
                                                </form>
                                            </td>
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
                        {{ $courses->withQueryString()->links('pagination::bootstrap-5') }}
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
