<?php

namespace App\Http\Livewire;

use App\Models\Rw;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use Livewire\Component;

class HelloLivewire extends Component
{
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $desa;
    public $rw;

    public $selectedProvinsi = null;
    public $selectedKota = null;
    public $selectedKecamatan = null;
    public $selectedDesa = null;
    public $selectedRw = null;

    public function mount($selectedRw = null)
    {
        $this->provinsi = Provinsi::all();
        $this->kota = Kota::with('provinsi')->get();
        $this->kecamatan = Kecamatan::whereHas('kota', function ($query) {
            $query->whereId(request()->input('kota_id', 0));
        })->pluck('nama_kecamatan', 'id');
        $this->desa = Desa::whereHas('kecamatan', function ($query) {
            $query->whereId(request()->input('kecamatan_id', 0));
        })->pluck('nama_kelurahan', 'id');
        $this->rw = Rw::whereHas('desa', function ($query) {
            $query->whereId(request()->input('kelurahan_id', 0));
        })->pluck('nama_rw', 'id');
        $this->selectedRw = $selectedRw;

        if (!is_null($selectedRw)) {
            $rw = Rw::with('desa.kecamatan.kota.provinsi')->find($selectedRw);
            if ($rw) {
                $this->rw = Rw::where('kelurahan_id', $rw->kelurahan_id)->get();
                $this->desa = Desa::where('kecamatan_id', $rw->desa->kecamatan_id)->get();
                $this->kecamatan = Kecamatan::where('kota_id', $rw->desa->kecamatan->kota_id)->get();
                $this->kota = Kota::where('provinsi_id', $rw->desa->kecamatan->kota->provinsi_id)->get();
                $this->selectedProvinsi =$rw->desa->kecamatan->kota->provinsi_id;
                $this->selectedKota = $rw->desa->kecamatan->kota_id;
                $this->selectedKecamatan = $rw->desa->kecamatan_id;
                $this->selectedDesa = $rw->kelurahan_id;
            }
        }
    }

    public function render()
    {
        return view('livewire.hello-livewire');
    }

    public function updatedSelectedProvinsi($provinsi)
    {
        $this->kota = Kota::where('provinsi_id', $provinsi)->get();
        $this->selectedKota = NULL;
        $this->selectedKecamatan = NULL;
        $this->selectedDesa = NULL;
        $this->selectedRw = NULL;
    }
    public function updatedSelectedKota($kota)
    {
        $this->kecamatan = Kecamatan::where('kota_id', $kota)->get();
        $this->selectedKecamatan = NULL;
        $this->selectedDesa = NULL;
        $this->selectedRw = NULL;
    }

    public function updatedSelectedKecamatan($kecamatan)
    {
        $this->desa = Desa::where('kecamatan_id', $kecamatan)->get();
        $this->selectedDesa = NULL;
        $this->selectedRw = NULL;
    }
    public function updatedSelectedKelurahan($desa)
    {
        if (!is_null($desa)) {
            $this->rw = Rw::where('kelurahan_id', $desa)->get();
        }else{
            $this->selectedRw = NULL;
        }
    }
}
