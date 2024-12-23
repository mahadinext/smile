@extends('layouts.common.master')
@section('css')
    @parent
    <style>
        /* #course-content-section .ck-editor__editable {
            min-height: 100px !important;
        } */
    </style>
@endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">{{ trans('global.create') }} Course Category</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <form method="POST" action="{{ route("admin.course-category.store") }}" enctype="multipart/form-data">
                @csrf

                <div class="col-lg-12" id="course-content-section">
                    <div class="card" id="content-card-template">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Course Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="required" for="name">Name</label>
                                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name') }}" required>
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 text-start">
                    <button class="btn btn-primary" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    @parent

    {{-- @include('layouts.common.ckeditor5.43_3_0') --}}
@endsection