<div class="sidebar">
<div class="sidebar">
        <div class="logo">
            <a class="simple-text logo-mini h4 text-white">{{ __('[SP]') }}</a>
            <a class="simple-text logo-normal h4 text-white">{{ __('Settlement Plate') }}</a>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p class="h4 text-white">{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    
                    <i class="tim-icons icon-book-bookmark" ></i>
                    <span class="nav-link-text h4 text-white" >{{ __('Daftar Proyek') }}</span>
                    <span class="caret mt-2"></span>
                </a>

                <div class="collapse" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li>
                            <a class="simple-text logo-normal" href="{{ route('proyek1')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p class="h5 text-white">{{ __('Proyek 1') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="collapse" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li>
                            <a class="simple-text logo-normal" href="{{ route('proyek2')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p class="h5 text-white">{{ __('Proyek 2') }}</p>
                            </a>
                            
                        </li>
                    </ul>
                </div>
            </li>
            
        </ul>
    </div>
</div>
            <!--li>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            
            <li>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li-->