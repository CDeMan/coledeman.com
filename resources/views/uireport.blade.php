@extends('partials.pdf_viewer')

@section('title', 'User Interfaces Report')

@section('pdf_name')
    {{URL::asset('pdf/projectreport.pdf')}}
@endsection

@section('hardlink_pdf', 'http://coledeman.com/pdf/projectreport.pdf')