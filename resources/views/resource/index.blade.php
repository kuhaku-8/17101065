@extends('layouts.main')

@section('title')
    {{$title}}
@endsection

@section('header')
    <h1>{{strtoupper($header)}}</h1>
    <ol class="breadcrumb">
        <li><a href="#">Menu</a></li>
        <li class="active">{{$header}}</li>
    </ol>
@endsection

@section('content')
    {{$content}}

    <h3>Function dalam Resource :</h3>
    <ol>
    @foreach($data as $no=>$function)
    <li>Function {{$function}}</li>
    @endforeach
    </ol>
@endsection