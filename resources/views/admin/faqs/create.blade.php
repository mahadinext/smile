@extends('layouts.common.master')
@section('css')
    @parent
    <style>
        /* #faq-content-section .ck-editor__editable {
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
                    <h4 class="mb-sm-0">{{ trans('global.create') }} FAQ</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <form method="POST" action="{{ route("admin.faqs.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12" id="faq-basic-section">
                    <div class="card">
                        <div class="card-body">

                            <div class="mb-3">
                                <label class="required" for="title">Title</label>
                                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                                @if($errors->has('title'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('title') }}
                                    </div>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label class="required" for="description">Description</label>
                                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }} ckeditor-classic" name="description" id="description">{{ old('description') }}</textarea>

                                @if($errors->has('description'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('description') }}
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

    @include('layouts.common.ckeditor5.43_3_0')
    {{-- @include('layouts.common.ckeditor5.super_build_41_2_1') --}}

@endsection
