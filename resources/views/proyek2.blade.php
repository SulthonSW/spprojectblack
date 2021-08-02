@extends('layouts.app', ['pageSlug' => 'proyekB'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart background-blue">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Monitoring Settlement Plate</h5>
                            <h1 class="card-title">Proyek 2</h1>
                            <a href="/Proyek1export" class="dropbtn">Download File</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Settlement Plate 1</h5>
                    <td>Waktu Update {{$data->waktu}}</td>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                         <tr class="text-center">
                            <td>Tinggi Awal</td>
                            <td>Penurunan</td>
                            <td>Tinggi Sekarang</td>
                         </tr>
                         <tr class="text-center">
                            <td>{{$data->tinggi_awal1}} Mdpl</td>
                            <td>{{$data->kedalaman1}} m</td>
                            <td>{{$data->tinggi_sekarang1}} Mdpl</td>
                         </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Settlement Plate 2</h5>
                    <td>Waktu Update {{$data->waktu}}</td>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                         <tr class="text-center">
                            <td>Tinggi Awal</td>
                            <td>Penurunan</td>
                            <td>Tinggi Sekarang</td>
                         </tr>
                         <tr class="text-center">
                            <td>{{$data->tinggi_awal2}} Mdpl</td>
                            <td>{{$data->kedalaman2}} m</td>
                            <td>{{$data->tinggi_sekarang2}} Mdpl</td>
                         </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Settlement Plate 3</h5>
                    <td>Waktu Update {{$data->waktu}}</td>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                         <tr class="text-center">
                            <td>Tinggi Awal</td>
                            <td>Penurunan</td>
                            <td>Tinggi Sekarang</td>
                         </tr>
                         <tr class="text-center">
                            <td>{{$data->tinggi_awal3}} Mdpl</td>
                            <td>{{$data->kedalaman3}} m</td>
                            <td>{{$data->tinggi_sekarang3}} Mdpl</td>
                         </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>

    
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
