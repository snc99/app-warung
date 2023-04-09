@section('adminHeader')
    @include('adminHeader')
@show

<body>

    @section('nav-bar')
        @include('nav-bar')
    @show

    <section id="about" class="counts">
        <div class="container mt-4" data-aos="fade-up">
            {{-- <div class="row gy-4"> --}}
            <div class="col-lg-12 col-md-12">
                <div class="container-fluid mt-4">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <header class="section-header">
                                <p>Tambah Data</p>
                                <h2>Masukan Transaksi</h2>
                            </header>
                            <form action='{{ url('Pencatatan') }}' method='post'>
                                @csrf
                                <label for="exampleFormControlInput1" class="form-label">Nama</label><br>
                                <div class="input-group mb-3">
                                    <input
                                        class="form-control form-control-sm @error('nama')
                                        is-invalid
                                    @enderror"
                                        type="text" aria-label=".form-control-sm example" name="nama"
                                        value="{{ Session::get('nama') }}" autofocus>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="exampleFormControlInput1" class="form-label mt-2">Tanggal</label><br>
                                <div class="input-group mb-3">
                                    <input
                                        class="form-control @error('tanggal')
                                        is-invalid
                                    @enderror"
                                        type="datetime-local" aria-label=".form-control-sm example" name="tanggal"
                                        value="{{ Session::get('tanggal') }}">
                                    @error('tanggal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="exampleFormControlInput1" class="form-label">Total
                                    Transaksi</label><br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rp.</span>
                                    <input
                                        class="form-control  @error('tanggal')
                                        is-invalid
                                    @enderror"
                                        type="text" aria-label=".form-control-sm example" name="total_transaksi"
                                        value="{{ Session::get('total_transaksi') }}">
                                    @error('total_transaksi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit" name="submit">
                                    Simpan
                                </button>
                                <a href="{{ url('dashboard') }}" class="btn btn-success" type="submit">
                                    kembali
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    @section('footer')
        @include('footer')
    @show
