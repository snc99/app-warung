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
                                <p>Pembayaran</p>
                                <h2>Masukan Jumlah pembayaran</h2>
                            </header>
                            <form action='{{ url('TotalTagihan') }}' method='post'>
                                @csrf
                                <label for="exampleFormControlInput1" class="form-label">Nama</label><br>
                                <div class="input-group mb-3">
                                    <select
                                        class="form-select @error('pencatatan_id')
                                        is-invalid
                                    @enderror"
                                        aria-label="Default select example" name="pencatatan_id">
                                        <option selected value="">Open this select nama</option>
                                        @foreach ($pencatatan as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('pencatatan_id') == $item->id ? 'selected' : null }}>
                                                {{ $item->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('pencatatan_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="exampleFormControlInput1" class="form-label">Total
                                    Transaksi</label><br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rp.</span>
                                    <input
                                        class="form-control form-control-sm @error('total_tagihan')
                                        is-invalid
                                    @enderror"
                                        type="text" aria-label=".form-control-sm example" name="total_tagihan"
                                        value="{{ Session::get('total_tagihan') }}">
                                    @error('total_tagihan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="exampleFormControlInput1" class="form-label">Bayar</label><br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rp.</span>
                                    <input
                                        class="form-control form-control-sm @error('bayar')
                                        is-invalid
                                    @enderror"
                                        type="text" aria-label=".form-control-sm example" name="bayar"
                                        value="{{ old('bayar') }}">
                                    @error('bayar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <label for="exampleFormControlInput1" class="form-label">Sisa</label><br>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rp.</span>
                                    <input
                                        class="form-control form-control-sm @error('sisa_tagihan')
                                        is-invalid
                                    @enderror"
                                        type="text" aria-label=".form-control-sm example" name="sisa_tagihan">
                                    @error('sisa_tagihan')
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
