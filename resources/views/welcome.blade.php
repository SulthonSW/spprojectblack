@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-2">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome To Monitoring Settlement Plate!') }}</h1>
                        <img class="card-img-top" src="{{ asset('black') }}/img/geosistem.png" alt="Responsive image"">
                        
                    </div>
                    <p class="text-lead text-light mt-4">
                            {{ __('PT.Teknindo Geosistem Unggul offers a comprehensive range of services that include site investigation, the proposed project design, implementation of soil remediation work, application of geosynthetics, geotechnical and monitoring instrumentation.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
