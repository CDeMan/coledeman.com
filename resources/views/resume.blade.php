@extends('partials.pdf_viewer')

@section('title', 'Resume')

@section('pdf_name')
    {{URL::asset('pdf/cole_deman_resume.pdf')}}
@endsection