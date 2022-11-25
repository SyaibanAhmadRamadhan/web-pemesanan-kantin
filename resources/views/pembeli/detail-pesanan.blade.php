@extends('layout.main-pembeli')

@section('container')
    <section id="container">
        <!-- Navbar -->
        @include('partials.navbar-pembeli')
        <!-- Navbar Akhir -->
        @if ($urlStatus == true)
            <section id="dpesanan">
                <div class="container-fluid p-5">
                    <div class="row">
                        <div class="col-lg px-0">
                            <h3>Detail Pesanan</h3>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-lg-7 mx-auto">
                            <div class="row my-3 px-3 py-4 bg-white">
                                <div class="col-lg">
                                    <p class="text-secondary">Pemesanan</p>
                                    <p class="my-0">{{ Auth()->user()->username }}</p>
                                    <p class="my-0">08128192798</p>
                                </div>
                            </div>
                            <div class="row my-3 px-3 py-4 bg-white">
                                <div class="col-lg-12">
                                    <h5>Soto Sate</h5>
                                </div>
                                <div class="col-lg">
                                    @foreach ($pesanan as $key => $x)
                                        <div class="d-flex border-bottom border-2 py-4">
                                            <img src="./assets/img/menu2.jpg" width="110" alt="" />
                                            <div class="mt-auto ps-3">
                                                <p class="mt-0">{{ $x->name_menu }}</p>
                                                <div class="row mb-3">
                                                    <div class="col-3 my-auto">
                                                        <p class="my-auto">Qty</p>
                                                    </div>
                                                    <div class="col-1 my-auto">
                                                        <p class="my-auto">:</p>
                                                    </div>
                                                    <div class="col">
                                                        <input type="number" min="1" name="qty" value="1"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <p class="text-danger mb-0">1x</p>
                                            </div>
                                            <div class="text-end w-100 mt-auto mb-0">
                                                <p>Rp.13.000</p>
                                                <a href="#!" class="btn btn-danger">hapus</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg mx-auto dtotal">
                            <div class="my-3 px-3 py-4 bg-white">
                                <div class="d-flex border-bottom border-2 py-4">
                                    <h5 class="mb-0 w-100 fw-bold">Total Pesanan</h5>
                                    <h5 class="text-end w-100 mb-0 text-danger">Rp.13.000</h5>
                                </div>
                                <div class="d-flex border-bottom border-2 py-4">
                                    <h5 class="mb-0 w-100 fw-bold">Metode Pembayaran</h5>
                                    <h5 class="text-end w-100 mb-0">Kasir</h5>
                                </div>
                            </div>
                            <div class="text-center pt-4">
                                <button type="button" class="btn btn-danger rounded-pill px-4 py-3">
                                    <h5 class="mb-0">Pesan Sekarang</h5>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <script>
                if (alert(
                        'Beberapa informasi produk pada pesananmu telah diperbarui. Mohon kembali ke halaman keranjang dan coba lagi'
                    )) {} else {
                    window.location.href = "{{ route('menu.view') }}"
                }
            </script>
        @endif

    </section>
@endsection
