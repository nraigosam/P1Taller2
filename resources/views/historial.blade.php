@extends('layout')

@section('content')

    <h2>historial</h2>
    <ul>
        @foreach($historial as $hist)
        <li>
           your color was {{$hist->yourColor}} and the correc color was {{$hist->color}}
        </li>

        @endforeach
    </ul>

@endsection

