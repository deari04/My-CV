@extends('layouts.app')

@section('content')
{{-- ini form education --}}
    <div class="container">        
        <h1>Form Education</h1>
        <form method="POST" action="{{ route('education.store') }}">
            @csrf
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="tahun" class="form-control" id="" aria-describedby="" placeholder="tahun" name="tahun" required>
            </div>
            <div class="mb-3">
                <label for="sekolah" class="form-label">Sekolah</label>
                <textarea type="sekolah" class="form-control" id="" aria-describedby="" placeholder="sekolah" name="sekolah" required></textarea>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="jurusan" class="form-control" id="" aria-describedby="" placeholder="jurusan" name="jurusan" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection