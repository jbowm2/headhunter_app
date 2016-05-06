@extends('layouts.applicants.dashboard')
@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Edit your Personal Profile</h1>

        <div class="form-container" style="width: 55%" text-align="right">
            {!! Form::model($profile, ['method'=> 'PATCH', 'route' => ['profile.update', $profile->id]]) !!}

            @include('partials.errors')

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('first_name', 'First Name:') !!}
                    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('last_name', 'Last Name:') !!}
                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('phone', 'Phone Number:') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('gender', 'Male/Female:') !!}
                    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class ="col-md-4">
                <div class="form-group">
                    {!! Form::label('birthday', 'Birthday:') !!}
                    {!! Form::input('date', 'birthday', $profile->birthday, ['class' => 'form-control datepick', 'placeholder' => 'click to enter', 'readonly' => true]) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary btn-submit">
                        Update your Profile
                    </button>
                </div>
            </div>

            {!! Form::close() !!}
            <div class="clearfix"></div>
        </div>
    </div>

@stop

@section('scripts')
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <script>
        // on ready function loads when the page loads
        $(function() {
            // each calendar picker needs a unique class/id so we can target it
            $(".datepick").datepicker({dateFormat: "yy-mm-dd", minDate: 0});
        });
    </script>

@stop