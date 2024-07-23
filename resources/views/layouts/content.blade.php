<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">


            <!-- start page title -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title-box">
                        <h4>@yield('page_title')</h4>
                        <ol class="breadcrumb m-0">
                            {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">PAR GTM</a></li> --}}
                            <li class="breadcrumb-item">PAR GTM</li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item">{{ basename(url()->current()) }}</li>
                        </ol>
                    </div>
                </div>


                <div class="col-sm-6">
                    <div class="d-flex justify-content-end align-items-end mb-3">
                        <p class="font-size-15">Selamat Datang, <span class="fw-bold"> {{ Auth::user()->name }}</span>,
                            anda login sebagai
                            <br>
                            @foreach (Auth::user()->roles as $role)
                                <span class="badge bg-warning">{{ $role->name }}</span>
                            @endforeach
                        </p>
                    </div>
                </div>

            </div>
            <!-- end page title -->
            @yield('content')
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
