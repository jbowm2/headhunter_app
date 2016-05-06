@extends('layouts.applicants.dashboard')
@section('content')

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Create your Resume</h1>

        <div class="form-container" style="width: 55%" text-align="right">
            {!! Form::open(['route' => 'resume.store', 'class' => 'profile-form']) !!}

            @include('partials.errors')

            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('tags', 'Select Positions of Interest (Select all that Apply):') !!}
                    {!! Form::select('tags', ['defaults'], null, ['class' => 'form-control', 'multiple']) !!}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('restaurantTypes', 'Select Type of Restaurant (Select all that Apply):') !!}
                    {!! Form::select('restaurantTypes', ['defaults'], null, ['class' => 'form-control', 'multiple']) !!}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('tags', 'Select Positions you have worked (Select all that Apply):') !!}
                    {!! Form::select('tags', ['defaults'], null, ['class' => 'form-control', 'multiple']) !!}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('restaurantTypes', 'Select Type of Restaurant you have worked (Select all that Apply):') !!}
                    {!! Form::select('restaurantTypes', ['defaults'], null, ['class' => 'form-control', 'multiple']) !!}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('educationTags', 'Select level of Education:') !!}
                    {!! Form::select('tags', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('certificationTags', 'Select Certifications Awarded (Select all that Apply):') !!}
                    {!! Form::select('certificationTags', ['defaults'], null, ['class' => 'form-control', 'multiple']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('past_jobs', 'How many jobs have you had in the past five years?') !!}
                    {!! Form::select('past_jobs', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('restaurant_jobs', 'How many restaurant jobs have you had in the past five years?') !!}
                    {!! Form::select('restaurant_jobs', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('residential_status', 'Residential Status:') !!}
                    {!! Form::select('residential_status', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('jobs_lost', 'How many jobs have you been fired from in the past five years?') !!}
                    {!! Form::select('jobs_lost', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('restaurant_jobs_lost', 'How many restaurant jobs have you been fired from in the past five years?') !!}
                    {!! Form::select('restaurant_jobs_lost', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('food_knowledge', 'What is your Food Knowledge like?') !!}
                    {!! Form::select('food_knowledge', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('beer_knowledge', 'What is your Beer Knowledge like?') !!}
                    {!! Form::select('beer_knowledge', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('wine_knowledge', 'What is your Wine Knowledge like?') !!}
                    {!! Form::select('wine_knowledge', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('liquor_knowledge', 'What is your Liquor Knowledge like?') !!}
                    {!! Form::select('liquor_knowledge', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('management_knowledge', 'What is your Management Knowledge like?') !!}
                    {!! Form::select('management_knowledge', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('costing_knowledge', 'What is your Costing Knowledge like?') !!}
                    {!! Form::select('costing_knowledge', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('leading_knowledge', 'Do you have leadership experience?') !!}
                    {!! Form::select('leading_knowledge', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('transportation', 'Do you have reliable transportation?:') !!}
                    {!! Form::text('transportation', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('compensation_earned', 'Approximate Compensation earned in the past (weekly):') !!}
                    {!! Form::select('compensation_earned', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('compensation_expected', 'Compensation expected to earn (weekly):') !!}
                    {!! Form::select('compensation_expected', ['defaults'], null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary btn-submit">
                        Create your Resume
                    </button>
                </div>
            </div>

            {!! Form::close() !!}
            <div class="clearfix"></div>
        </div>
    </div>

@stop