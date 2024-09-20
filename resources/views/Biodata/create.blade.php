@extends('layouts.app')

@section('content')
{{-- ini form biodata --}}
    <div class="container">        
        <h1>Form Biodata</h1>
        <form method="POST" action="{{ route('biodata.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="nama" class="form-control" id="" aria-describedby="" placeholder="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea type="keterangan" class="form-control" id="" aria-describedby="" placeholder="keterangan" name="keterangan" required></textarea>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="umur" class="form-control" id="" aria-describedby="" placeholder="umur" name="umur" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="alamat" class="form-control" id="" aria-describedby="" placeholder="alamat" name="alamat" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection