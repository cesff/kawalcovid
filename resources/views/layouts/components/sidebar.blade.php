<link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-dark" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="{{asset('javascript:void(0)')}}">
            <span class="nav-link text-white" >TRACKING COVID</span>
        </a>
      </div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin')}}">
                <span class="nav-link text-white">Dashboard</span>
              </a>
            </li>
            </ul>
            <br>
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="nav-link">
                    <span class="nav-link text-white"><b>Master Data</b></span>
                </div>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/provinsi')}}">
                <span class="nav-link text-white">Provinsi</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/kota')}}">
                <span class="nav-link text-white">Kota / Kabupaten</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/kecamatan')}}">
                <span class="nav-link text-white">Kecamatan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin/desa')}}">
                <span class="nav-link text-white">Kelurahan / Desa</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/rw')}}">
                  <span class="nav-link text-white">RW</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('admin/kasus')}}">
                  <span class="nav-link text-white">Kasus</span>
                </a>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
