@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>
                Edit
                </div>

                <div class="card-body">
                <form action="{{route('kasus.update',$kasus->id)}}" method="POST">
                   @csrf
                   @method('PATCH')
                    <div class="form-group">
                        <label>Positif</label>
                        <input type="text" name="positif" value="{{$kasus->positif}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Sembuh</label>
                        <input type="text" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Meninggal</label>
                        <input type="text" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" required>
                    </div>
                        <div class="form-group">
                        <label>Nama Rw</label>
                        <select name="id_rw" class="form-control">
                        @foreach ($rw as $data)
                        <option value="{{$data->id}}" {{$data->id == $kasus->id_rw ? 'selected' : ''}}>{{$data->nama_rw}}</option>
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
