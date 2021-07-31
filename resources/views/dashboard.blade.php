@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Monitoring</h5>
                            <h2 class="card-title">Settlement Plate</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('https://www.geosistem.co.id/images/PRODUCT/DINDING/Inclinometer_Kalibaru_Port%2C_Jakarta%2C_2018.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Geotechnical Instrument</h2>
                    <p class="lead">Geotechnical intrument are necessary deemed to control any manageable </p>
                    <p class="lead">problems within the process of reclamation and soil improvement.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://www.geosistem.co.id/images/Settlement-Plate-Bontang-PKT,-East-Kalimantan,-2016.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Settlement Plate</h2>
                    <p class="lead">Settlement Plate Bontang PKT Settlement Plate Bontang PKT, East Kalimantan, 2016</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://www.geosistem.co.id/images/PROJECT/PVD/PELABUHAN-BELAWAN-MEDAN,-SUMATERA-UTARA-PHASE-1,-2019.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4">Prefabricated Vertical Drain</h2>
                    <p class="lead">One of the most popular methods of ground improvement is the use of</p>
                    <p class="lead" style="color">prefabricated vertical drain (PVD) in combination with surchange.</p>
                </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
                </div>
            </div>
        </div>
    </div>

    <!--div class="row">

        <div class="col-lg-12">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Settlement Plate 1</h5>
                    <td>Waktu Update </td>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                         <tr class="text-center">
                            <td>Tinggi Awal</td>
                            <td>Penurunan</td>
                            <td>Tinggi Sekarang</td>
                         </tr>
                         <tr class="text-center">
                            <td>2000 Mdpl</td>
                            <td>100 m</td>
                            <td>1900 Mdpl</td>
                         </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Settlement Plate 2</h5>
                    <td>Waktu Update </td>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                         <tr class="text-center">
                            <td>Tinggi Awal</td>
                            <td>Penurunan</td>
                            <td>Tinggi Sekarang</td>
                         </tr>
                         <tr class="text-center">
                            <td>2000 Mdpl</td>
                            <td>100 m</td>
                            <td>1900 Mdpl</td>
                         </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Settlement Plate 2</h5>
                    <td>Waktu Update </td>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                         <tr class="text-center">
                            <td>Tinggi Awal</td>
                            <td>Penurunan</td>
                            <td>Tinggi Sekarang</td>
                         </tr>
                         <tr class="text-center">
                            <td>2000 Mdpl</td>
                            <td>100 m</td>
                            <td>1900 Mdpl</td>
                         </tr>
                    </table>
                </div>
            </div>
        </div>

    </div-->

    
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
