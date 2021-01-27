@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br>
                Show
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Positif</label>
                        <input type="text" name="positif" value="{{$kasus->positif}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Sembuh</label>
                        <input type="text" name="sembuh" value="{{$kasus->sembuh}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Meninggal</label>
                        <input type="text" name="meninggal" value="{{$kasus->meninggal}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                             <label>Tanggal</label>
                            <input type="text" name="tanggal" value="{{$kasus->tanggal}}" class="form-control" readonly>
                    </div>
                        <div class="form-group">
                        <label>Nama Rw</label>
                        <input type="text" class="form-control" value="{{$kasus->rw->nama_rw}}" readonly>
                    </select>
                </div>
                    <div class="form-group">
                 <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
