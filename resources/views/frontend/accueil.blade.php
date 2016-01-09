@extends('frontend.layouts.master')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $page->title }}</h1>
                {!! $page->content !!}
            </div>
        </div>
    </div>

@stop