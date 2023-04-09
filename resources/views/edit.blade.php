@section('adminHeader')
    @include('adminHeader')
@show

<body>

    @section('nav-bar')
        @include('nav-bar')
    @show

    <main id="main">
        <section id="counts" class="counts">
            <div class="container mt-4" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-6 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-cash"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Total Hutang</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-calculator" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Hutang Belum Lunas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section id="about" class="counts">
            <div class="container mt-4" data-aos="fade-up">
                <div class="col-lg-12 col-md-12">
                    <div class="container-fluid mt-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <header class="section-header">
                                    <p>Daftar Transaksi</p>
                                    <h2>Data Total Transaksi Pelanggan</h2>
                                </header>
                                <div class="table-responsive">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab"
                                                aria-controls="home" aria-selected="true">Pencatatan</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">Bayar</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-responsive">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <a href="{{ url('dashboard/create') }}" class="btn btn-primary"
                                                type="submit">
                                                Tambah
                                            </a>
                                            <input class="form-control-sm border rounded-pill mt-3 mb-3" type="text"
                                                id="myInput" onkeyup="myFunction()"
                                                placeholder="Cari berdasarkan nama..." title="Type in a name">
                                            <table class="uk-table uk-table-hover uk-table-striped" id="pencatatan">
                                                <thead class="header">
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Tanggal Transaksi</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td>{{ $item->nama }}</td>
                                                            <td>{{ $item->tanggal }}</td>
                                                            <td>{{ $item->total_transaksi }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{ $data->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade mt-4" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <table class="uk-table uk-table-hover uk-table-striped" id="tagihan">
                                    <a href="{{ url('TotalTagihan/create') }}" class="btn btn-warning" type="submit">
                                        Bayar
                                    </a>
                                    <thead class="header">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Total Transaksi</th>
                                            <th>Bayar</th>
                                            <th>Sisa</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->total_tagihan }}</td>
                                                <td>{{ $item->bayar }}</td>
                                                <td>{{ $item->sisa_tagihan }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section> --}}
        @include('sweetalert::alert')
        <section id="counts" class="counts">
            <div class="container mt-4" data-aos="fade-up">
                {{-- <div class="row gy-4"> --}}
                <div class="col-lg-12 col-md-12">
                    <div class="container-fluid mt-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <header class="section-header">
                                    <p>Daftar Transaksi</p>
                                    <h2>Data Total Transaksi Pelanggan</h2>
                                </header>
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a href="{{ url('Pencatatan') }}" class="nav-link active" id="nav-home-tab"
                                            data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
                                            role="tab" aria-controls="nav-home" aria-selected="true">Pencatatan</a>
                                        <a href="{{ url('TotalTagihan') }}" class="nav-link" id="nav-profile-tab"
                                            data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                                            role="tab" aria-controls="nav-profile" aria-selected="false">Total
                                            Tagihan</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">

                                        <div class="table-responsive">
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                                    aria-labelledby="home-tab">
                                                    <a href="{{ url('Pencatatan/create') }}" class="btn btn-primary"
                                                        type="submit">
                                                        Tambah
                                                    </a>
                                                    <input class="form-control-sm border rounded-pill mt-3 mb-3"
                                                        type="text" id="myInput" onkeyup="myFunction()"
                                                        placeholder="Cari berdasarkan nama..." title="Type in a name">
                                                    <table class="uk-table uk-table-hover uk-table-striped"
                                                        id="pencatatan">
                                                        <thead class="header">
                                                            <tr>
                                                                <th>Nama</th>
                                                                <th>Tanggal Transaksi</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data as $item)
                                                                <tr>
                                                                    <td>{{ $item->nama }}</td>
                                                                    <td>{{ $item->tanggal }}</td>
                                                                    <td>{{ $item->total_transaksi }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    {{ $data->links() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>
                <section id="counts" class="counts">
                    <div class="container mt-4" data-aos="fade-up">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-md-4">
                                <div class="count-box">
                                    <div>
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Address</h3>
                                        <p>A108 Adam Street,<br>New York, NY 535022</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="count-box">
                                    <div>
                                        <i class="bi bi-telephone"></i>
                                        <h3>Call Us</h3>
                                        <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="count-box">
                                    <div>
                                        <i class="bi bi-clock"></i>
                                        <h3>Open Hours</h3>
                                        <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
    <!-- End Contact Section -->
    <!-- End #main -->
    @section('footer')
        @include('footer')
    @show
