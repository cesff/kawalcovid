<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kawal Corona</title>
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  {{-- <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
         <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="#">Kawal Corona</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li><a href="{{route('index')}}">Home</a></li>
        <li><a  href="#global">Data Global</a></li>
        <li><a href="#indo">Data Indonesia</a></li>
        <li><a  href="#galery">Galery</a></li>

      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h2>Tetap Patuhi Protokol Kesehatan</h2>
      <h1>Dengan Menerapkan Konsep 3M.</h1>
    </div>
  </section><!-- End Hero -->

        <br><br><br>
                        <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                    <div class="card bg-danger">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="text-white">
                                                    <p class="text-white mb-0">TOTAL POSITIF</p>
                                                    <p class="mb-0 number-font"><?php echo $posglobal['value'] ?></p>
                                                    <p class="text-white mb-0">ORANG</p>
                                                </div>
                                                <div class="ml-auto"> <img src="{{asset('assets/img/sad-u6e.png')}}" width="100" height="100"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                        <div class="card bg-success">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="text-white">
                                                        <p class="text-white mb-0">TOTAL SEMBUH</p>
                                                        <p class="mb-0 number-font"><?php echo $semglobal['value'] ?></p>
                                                        <p class="text-white mb-0">ORANG</p>
                                                    </div>
                                                    <div class="ml-auto"> <img src="{{asset('assets/img/happy-Ipm.png')}}" width="100" height="100"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                        <div class="card bg-secondary">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="text-white">
                                                        <p class="text-white mb-0">TOTAL MENINGGAL</p>
                                                        <p class="mb-0 number-font"><?php echo $menglobal['value'] ?></p>
                                                        <p class="text-white mb-0">ORANG</p>
                                                    </div>
                                                    <div class="ml-auto"> <img src="{{asset('assets/img/emoji-LWx.png')}}" width="100" height="100"> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                        <div class="card bg-primary">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="text-white">
                                                        <p class="text-white mb-0">INDONESIA</p>
                                                        <p class="mb-0 number-font">{{$positif}} POSITIF, {{$sembuh}} SEMBUH,{{$meninggal}} MENINGGAL</p>
                                                    </div>
                                                    
                                                    <div class="ml-auto"> <img src="{{asset('assets/img/indonesia-PZq.png')}}" width="100" height="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-center">
                                        <h6><br><p>Update terakhir : {{ $tanggal }}</p></h6>
                                    </div> 
                                  </div>
                        </div>
                        <br><br>
                        <div class="card mb-4" id="global">
                            <div class="card-header">
                                Data Global Coronavirus
                            </div>
                            <div class="card-body">
                              <div style="height:600px;overflow:auto;margin-right:15px;">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NO.</th>
                                                <th>NEGARA</th>
                                                <th>POSITIF</th>
                                                <th>SEMBUH</th>
                                                <th>MENINGGAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $no = 1;
                                          @endphp
                                            @foreach($dunia as $data)
                                                <tr>     
                                                  <th>{{$no++ }}</th>
                                                  <th> <?php echo $data['attributes']['Country_Region'] ?></th>
                                                  <th> <?php echo number_format($data['attributes']['Confirmed']) ?></th>
                                                  <th><?php echo number_format($data['attributes']['Recovered'])?></th>
                                                  <th><?php echo number_format($data['attributes']['Deaths'])?></th>
                                                </tr>
                                              @endforeach
                                        </tbody>
                                    </table>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header" id="indo">
                                    Data Coronavirus Berdasarkan Provinsi di Negara Indonesia
                            </div>
                            <div class="card-body">
                              <div style="height:600px;overflow:auto;margin-right:15px;">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NO.</th>
                                                <th>PROVINSI</th>
                                                <th>POSITIF</th>
                                                <th>SEMBUH</th>
                                                <th>MENINGGAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach($tampil as $tmp)
                                   
                                        <tr>
                                            <th>{{$no++ }}</th>
                                            <th>{{$tmp->nama_provinsi}}</th>
                                            <th>{{number_format($tmp->Positif)}}</th>
                                            <th>{{number_format($tmp->Sembuh)}}</th>
                                            <th>{{number_format($tmp->Meninggal)}}</th>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
     
          <div class="section-title" id="galery">
            <h2>Gallery</h2>
         </div>
        </div>
  
        <div class="container-fluid">
          <div class="row no-gutters">
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                  <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                  <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                  <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                  <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                  <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                  <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                  <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                  <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>
  
          </div>
  
        </div>
  
                </main>
                <footer id="footer">

                    <div class="footer-top">
                      <div class="container">
                        <div class="row">
                
                          <div class="col-lg-3 col-md-6 footer-contact">
                            <h3>Kawal Corona</h3>
                            <p>
                         RS Imanuel<br>
                     Kota Bandung<br><br>
                              <strong>Phone:</strong>+62<br>
                              <strong>Email:</strong> rsimanuel.co.id<br>
                            </p>
                          </div>
                
                          <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                              <li><i class="bx bx-chevron-right"></i> <a href="{{url('frontend.index')}}">Home</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#dataglobal">Data Global</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#dataindonesia">Data Indonesia</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                            </ul>
                          </div>
                
                          <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Our Services</h4>
                            <ul>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                            </ul>
                          </div>
                
                          <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Join Our Newsletter</h4>
                            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                            <form action="" method="post">
                              <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>
                          </div>
                
                        </div>
                      </div>
                    </div>
                
                    <div class="container d-md-flex py-4">
                
                      <div class="mr-md-auto text-center text-md-left">
                        <div class="credits">
                          &copy; Copyright 
                        </div>
                      </div>
                      <div class="social-links text-center text-md-right pt-3 pt-md-0">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                      </div>
                    </div>
                  </footer><!-- End Footer -->
            
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('assets/demo/datatables-demo.js')}}"></script>
    </body>
</html>
