@extends('partials.contentdisplay')

@section('title', 'Resume')


@section('content')
    <div class="section grey darken-4">
        <div class="container grey-text">
            <h3>@yield('title')</h3>
            <embed src="{{URL::asset('pdf/resume_rough.pdf')}}" width="100%" height="2100px" class="z-depth-4">
        </div>
    </div>
@endsection

@section('endscripts')

    <script type="text/javascript">
        <!--
        if (screen.width <= 800) {
            window.location = "http://coledeman.com/pdf/resume_rough.pdf";
        }
        //-->
    </script>

@endsection