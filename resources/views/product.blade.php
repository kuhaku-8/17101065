@extends('layouts.main')

@section('title')
    {{$title}}
@endsection

@section('content')
    @if(count($product)>2)
        <h3>Data Lebih Dari 2!</h3>    
    
        <ul>
            @for($i=0;$i<count($product);$i++)
                <li>{{$product[$i]}}</li>
            @endfor
        </ul><br>

        <table border=1>
            <tr>
                <td>No</td>
                <td>Name</td>
            </tr>
            @foreach($product as $no=>$name)
                <tr>
                    <td>{{$no+1}}</td>
                    <td>{{$name}}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection