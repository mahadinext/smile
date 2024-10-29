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

            <div class="row">
                <div class="col-12">
                    <div style="margin-bottom: 10px;" class="row">
                        <div class="col-lg-12">
                            <a class="btn btn-success" href="{{ route('admin.users.create') }}">
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
                                <thead>
                                    <tr>
                                        <th width="10">

                                        </th>
                                        <th>
                                            {{ trans('cruds.user.fields.id') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.user.fields.name') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.user.fields.email') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.user.fields.email_verified_at') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.user.fields.approved') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.user.fields.roles') }}
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="filteredData">

                                </tbody>
                            </table>
                        </div>
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
