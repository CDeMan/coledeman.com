@extends('partials.contentdisplay')

@section('title', 'Resume')

@section('content')
    <div class="section black">
        <div class="container grey-text">
            <h3>@yield('title')</h3>
            <embed src="{{URL::asset('pdf/resume_rough.pdf')}}" width="800px" height="2100px">
        </div>
    </div>
@endsection