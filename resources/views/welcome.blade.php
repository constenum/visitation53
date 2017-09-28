@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-links row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <a class="btn btn-lg btn-block btn-primary" href="{{ url('/student') }}" role="button">Visitation</a>
                <a class="btn btn-lg btn-block btn-primary" href="#" role="button">Open House</a>
                <a class="btn btn-lg btn-block btn-primary" href="#" role="button">Shadow</a>
                <a class="btn btn-lg btn-block btn-primary" href="#" role="button">Camp 1</a>
                <a class="btn btn-lg btn-block btn-primary" href="#" role="button">Camp 2</a>
                <a class="btn btn-lg btn-block btn-primary" href="#" role="button">Camp 3</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <a class="btn btn-lg btn-block btn-primary" href="#" role="button">Camp 4</a>
                <a class="btn btn-lg btn-block btn-primary" href="#" role="button">Camp 5</a>
                <a class="btn btn-lg btn-block btn-primary" href="#" role="button">Camp 6</a>
                <a class="btn btn-lg btn-block btn-primary" href="#" role="button">Camp 7</a>
                <a class="btn btn-lg btn-block btn-primary" href="#" role="button">Camp 8</a>
                <a class="btn btn-lg btn-block btn-primary" href="#" role="button">Camp 9</a>
            </div>
        </div>
    </div>
@endsection