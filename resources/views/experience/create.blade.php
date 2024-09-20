@extends('layouts.app')

@section('content')
{{-- ini form experience --}}
    <div class="container">        
        <h1>Form Experience</h1>
        <form method="POST" action="{{ route('experience.store') }}">
            @csrf
            <div class="mb-3">
                <label for="tahun_internship" class="form-label">Tahun Internship</label>
                <input type="tahun_internship" class="form-control" id="" aria-describedby="" placeholder="tahun_internship" name="tahun_internship" required>
            </div>
            <div class="mb-3">
                <label for="internship" class="form-label">Internship</label>
                <textarea type="internship" class="form-control" id="" aria-describedby="" placeholder="internship" name="internship" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tahun_organization" class="form-label">Tahun Organization</label>
                <input type="tahun_organization" class="form-control" id="" aria-describedby="" placeholder="tahun_organization" name="tahun_organization" required>
            </div>
            <div class="mb-3">
                <label for="organization" class="form-label">Organization</label>
                <textarea type="organization" class="form-control" id="" aria-describedby="" placeholder="organization" name="organization" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection