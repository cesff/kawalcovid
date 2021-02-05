<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Http;
use App\Models\Provinsi;
use App\Models\Kasus;



class ApiController extends Controller
{
    public function global()
    {
        $response = Http::get('https://api.kawalcorona.com/global');
            $data =$response->json();
            return $data;
            return response([
                'Message' => ' Berhasil!',
            ]);
    }
    public function Indonesia(){
        $positif = DB::table('kasuses')
                        ->select('kasuses.positif')
                        ->sum('kasuses.positif');

        $sembuh = DB::table('kasuses')
                        ->select('kasuses.sembuh')
                        ->sum('kasuses.sembuh');

        $meninggal = DB::table('kasuses')
                        ->select('kasuses.meninggal')
                        ->sum('kasuses.meninggal');

        return response([
                    'Success' => true,
                    'Data' => [
                    'Name' => 'Indonesia',
                    'Positif'=> $positif,
                    'Sembuh'=> $sembuh,
                    'Meninggal'=> $meninggal,
                            ],
                                    'Message' => ' Berhasil!',

                        ]);

    }
    public function provinsi(){
        $allday = DB::table('provinsis')
        ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('kotas','provinsis.id','=','kotas.id_provinsi')
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('desas','kecamatans.id','=','desas.id_kecamatan')
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->groupBy('provinsis.id')
        ->get();

        $today = DB::table('provinsis')
        ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('kotas','provinsis.id','=','kotas.id_provinsi')
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('desas','kecamatans.id','=','desas.id_kecamatan')
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->whereDate('kasuses.tanggal',Carbon::today())
        ->groupBy('provinsis.id')
        ->get();

            $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'Success' => true,
            'Data' => [
                        'Hari Ini' => $today,
            'Data' => [
                        'Provinsi' => $allday,
            'Total' =>[
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
                    'essage' => ' Berhasil!',
                ],
            ],
        ]);

    }

    public function provinsis($id){

        $provinsi = DB::table('provinsis') ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('kotas','provinsis.id','=','kotas.id_provinsi')
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('desas','kecamatans.id','=','desas.id_kecamatan')
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->where('provinsis.id',$id)
        ->groupBy('provinsis.id')
        ->first();
            $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'Success' => true,
            'Data' => $provinsi,
            'Total' =>[
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
                    'message' => ' Berhasil!',

        ]);
    }
    public function kota(){
        $allday = DB::table('kotas')
        ->select('kotas.kode_kota','kotas.nama_kota',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('desas','kecamatans.id','=','desas.id_kecamatan')
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->groupBy('kotas.id')
        ->get();

        $today = DB::table('kotas')
        ->select('kotas.kode_kota','kotas.nama_kota',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('desas','kecamatans.id','=','desas.id_kecamatan')
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->whereDate('kasuses.tanggal',Carbon::today())
        ->groupBy('provinsis.id')
        ->get();

            $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'Success' => true,
            'Data' => [
                        'Hari Ini' => $allday,
            'Data' => [
                        'Kota' => $today,            
            'Total' =>[
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
                    'message' => ' Berhasil!',
                ],
            ],
        ]);

    }
    public function kotas($id){
        $kota = DB::table('kotas')
        ->select('kotas.kode_kota','kotas.nama_kota',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('desas','kecamatans.id','=','desas.id_kecamatan')
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->where('kotas.id',$id)
        ->groupBy('kotas.id')
        ->first();
            $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'Success' => true,
            'Data' => $kota,
            'Total' =>[
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
                    'message' => ' Berhasil!',
        ]);

    }
    public function kecamatan(){
        $allday = DB::table('kecamatans')
        ->select('kecamatans.nama_kecamatan',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('desas','kecamatans.id','=','desas.id_kecamatan')
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->groupBy('kecamatans.id')
        ->get();

        $today = DB::table('kecamatans')
        ->select('kecamatans.nama_kecamatan',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('desas','kecamatans.id','=','desas.id_kecamatan')
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->whereDate('kasuses.tanggal',Carbon::today())
        ->groupBy('kecamatans.id')
        ->get();

            $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'Success' => true,
            'Data' => [
                        'Hari Ini' => $today,
            'Data' => [
                        'Kecamatan' => $allday,            
            'Total' =>[
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
                    'message' => ' Berhasil!',
                ],
            ],
        ]);

    }
    public function kecamatans($id){
        $kecamatan = DB::table('kecamatans')
        ->select('kecamatans.nama_kecamatan',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('desas','kecamatans.id','=','desas.id_kecamatan')
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->where('kecamatans.id',$id)
        ->groupBy('kecamatans.id','tanggal')
        ->first();
            $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'success' => true,
            'data' => $kecamatan,
            'Total' =>[
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
                    'message' => ' Berhasil!',
        ]);

    }
    public function desa(){
        $allday = DB::table('desas')
        ->select('desas.nama_desa',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->groupBy('desas.id')
        ->get();

        $today = DB::table('desas')
        ->select('desas.nama_desa',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->whereDate('kasuses.tanggal',Carbon::today())
        ->groupBy('desas.id')
        ->get();

            $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'Success' => true,
            'Data' => [
                        'Hari Ini' => $today,
            'Data' => [
                        'Kecamatan' => $allday,      
            'Total' =>[
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
                    'message' => ' Berhasil!',
                ],
            ],
        ]);

    }
    public function desas($id){
        $desa = DB::table('desas')
        ->select('desas.nama_desa',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->where('desas.id',$id)
        ->groupBy('desas.id','tanggal')
        ->first();
            $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'Success' => true,
            'Data'  => $desa,
            'Total' =>[
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
                    'message' => ' Berhasil!',
        ]);

    }
    public function rw(){
        $allday = DB::table('rws')
        ->select('rws.nama_rw',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->groupBy('rws.id','tanggal')
        ->get();

        $today = DB::table('rws')
        ->select('rws.nama_rw',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->whereDate('kasuses.tanggal',Carbon::today())
        ->groupBy('rws.id','tanggal')
        ->get();

            $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'Success' => true,
            'Data' => [
                        'Hari Ini' => $today,
            'Data' => [
                        'Rw' => $allday,
            'Total' =>[
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
                    'Message' => ' Berhasil!',
                ],
            ],
        ]);

    }
    public function rws($id){
        $rw = DB::table('rws')
        ->select('rws.nama_rw',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->where('rws.id',$id)
        ->groupBy('rws.id','tanggal')
        ->first();
            $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'Success' => true,
            'Data' => $rw,
            'Total' =>[
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
                    'Message' => ' Berhasil!',
        ]);

    }

        public function positif(){
        $positif = DB::table('kasuses')->select('kasuses.positif')->sum('kasuses.positif');
        return response([
            'Success' => true,
            'Data' => [
                'Name' => 'Total Positif',
                'Value' => $positif,
            ],
                    'Message' => ' Berhasil!',

        ]);
    }
    public function sembuh(){
        $sembuh = DB::table('kasuses')->select('kasuses.sembuh')->sum('kasuses.sembuh');
        return response([
            'Success' => true,
            'Data' => [
                        'Name' => 'Total Sembuh',
                        'Value' => $sembuh,
            ],
                    'Message' => ' Berhasil!',

        ]);
    }
    public function meninggal(){
        $meninggal = DB::table('kasuses')->select('kasuses.meninggal')->sum('kasuses.meninggal');
        return response([
            'Success' => true,
            'Data' => [
                        'Name' => 'Total Meninggal',
                        'Value' => $meninggal,
            ],
                    'Message' => ' Berhasil!',

        ]);
    }
}
