@extends('layouts.app')

@section('content')
        @foreach ($data as $data)
            <p>{{$data->name}}</p>
        @endforeach
@endsection