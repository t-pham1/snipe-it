@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Update Alert Settings
    @parent
@stop

@section('header_right')
    <a href="{{ route('settings.index') }}" class="btn btn-default"> {{ trans('general.back') }}</a>
@stop


{{-- Page content --}}
@section('content')

    <style>
        .checkbox label {
            padding-right: 40px;
        }
    </style>


    {{ Form::open(['method' => 'POST', 'files' => true, 'class' => 'form-horizontal', 'role' => 'form' ]) }}
    <!-- CSRF Token -->
    {{csrf_field()}}

    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">


            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <i class="fa fa-bell"></i> Alerts
                    </h4>
                </div>
                <div class="box-body">


                    <div class="col-md-11 col-md-offset-1">

                        <!-- Alerts Enabled -->
                        <div class="form-group {{ $errors->has('alert_email') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('alert_email', trans('admin/settings/general.alerts_enabled')) }}
                            </div>
                            <div class="col-md-5">
                                {{ Form::checkbox('alerts_enabled', '1', Input::old('alerts_enabled', $setting->alerts_enabled),array('class' => 'minimal')) }}
                                {{ trans('admin/settings/general.alerts_enabled') }}
                            </div>
                        </div>



                        <!-- Alert Email -->
                        <div class="form-group {{ $errors->has('alert_email') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('alert_email', trans('admin/settings/general.alert_email')) }}
                            </div>
                            <div class="col-md-7">
                                {{ Form::text('alert_email', Input::old('alert_email', $setting->alert_email), array('class' => 'form-control','placeholder' => 'admin@yourcompany.com')) }}
                                {!! $errors->first('alert_email', '<span class="alert-msg">:message</span><br>') !!}

                                <p class="help-block">Email addresses or distribution lists you want alerts to be sent to, comma separated</p>


                            </div>
                        </div>

                        <!-- Alert interval -->
                        <div class="form-group {{ $errors->has('alert_interval') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('alert_interval', trans('admin/settings/general.alert_interval')) }}
                            </div>
                            <div class="col-md-9">
                                {{ Form::text('alert_interval', Input::old('alert_interval', $setting->alert_interval), array('class' => 'form-control','placeholder' => '30', 'maxlength'=>'3', 'style'=>'width: 60px;')) }}
                                {!! $errors->first('alert_interval', '<span class="alert-msg">:message</span>') !!}
                            </div>
                        </div>

                        <!-- Alert threshold -->
                        <div class="form-group {{ $errors->has('alert_threshold') ? 'error' : '' }}">
                            <div class="col-md-3">
                                {{ Form::label('alert_threshold', trans('admin/settings/general.alert_inv_threshold')) }}
                            </div>
                            <div class="col-md-9">
                                {{ Form::text('alert_threshold', Input::old('alert_threshold', $setting->alert_threshold), array('class' => 'form-control','placeholder' => '5', 'maxlength'=>'3', 'style'=>'width: 60px;')) }}
                                {!! $errors->first('alert_threshold', '<span class="alert-msg">:message</span>') !!}
                            </div>
                        </div>

                    </div>

                </div> <!--/.box-body-->
                <div class="box-footer">
                    <div class="text-left col-md-6">
                        <a class="btn btn-link text-left" href="{{ route('settings.index') }}">{{ trans('button.cancel') }}</a>
                    </div>
                    <div class="text-right col-md-6">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check icon-white"></i> {{ trans('general.save') }}</button>
                    </div>

                </div>
            </div> <!-- /box -->
        </div> <!-- /.col-md-8-->
    </div> <!-- /.row-->

    {{Form::close()}}

@stop

