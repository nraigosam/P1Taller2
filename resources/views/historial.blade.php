@extends('layout')

@section('content')

    <h2>historial</h2>
    <ul>
        @foreach($historial as $hist)
        <li>
            <a href="{{ route('historial.show', $hist->slug)}}"></a>
        </li>

        @endforeach
    </ul>

@endsection

