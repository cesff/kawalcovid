@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>
                Tambah Kasus
                </div>
                <div class="card-body">
                <form action="{{route('kasus.store')}}" method="POST">
                   @csrf
                        <div class="form-group">
                        <label>Positif</label>
                        <input type="text" name="positif" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Sembuh</label>
                        <input type="text" name="sembuh" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Meninggal</label>
                        <input type="text" name="meninggal" class="form-control" required>
                        </div>
                        <label>Tanggal</label>
                        <div class="form-group">
                        <input type="date" name="tanggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Nama Rw</label>
                        <select name="id_rw" class="form-control">
                        @foreach ($rw as $data)
                        <option value="{{$data->id}}">{{$data->nama_rw}}</option>
                        @endforeach
                        </select>
                        </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
