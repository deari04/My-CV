@extends('layouts.app')

@section('content')
{{-- ini form skill--}}
    <div class="container">        
        <h1>Form Skills</h1>
        <form method="POST" action="{{ route('skill.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nama_skill" class="form-label">Nama Skills</label>
                <input type="nama_skill" class="form-control" id="" aria-describedby="" placeholder="nama_skill" name="nama_skill" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection