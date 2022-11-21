@extends('layout.main')
@section('container')
    <section id="container">
        <!-- Navbar -->
        @include('partials.navbar')
        <!-- Navbar Akhir -->

        <!-- Search Bar -->
        <section id="search">
            <div class="container py-3">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="input-group rounded-pill bg-white shadow-primary">
                            <input class="form-control border-0 rounded-pill ps-4" type="search" placeholder="Search"
                                aria-label="Search" />
                            <span class="btn" id="basic-addon2"><i class="bi bi-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Search Bar Akhir -->

        <!-- Menu -->
        @if (Auth()->user())
            <section id="menu">
                <div class="container-fluid px-5">
                    <div class="row">
                        <div class="col-lg-12 px-3 py-2 bg-abu">
                            <h3 class="my-0">Soto Sate</h3>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <input type="hidden" value="nasi_sate" id="name_menu1">
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan1"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu2.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <input type="hidden" value="nasi_sate2" id="name_menu2">
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan2"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <input type="hidden" value="nasi_sate3" id="name_menu3">
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan3"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 px-3 py-2 bg-abu">
                            <h3 class="my-0">Kuliner Mandura Nyaman Oggu</h3>
                        </div>
                        @foreach ($menu as $x)
                            <div class="col-lg-3 py-4">
                                <div class="card border-0 rounded-4">
                                    <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $x->name_menu }}</h5>
                                        <a href="#" class="stretched-link" data-bs-toggle="modal"
                                            data-bs-target="#modalmesan{{ $x->id }}"></a>
                                        <input type="hidden" value="{{ $x->id }}" id="menu_id{{ $x->id }}">
                                        <p class="card-text text-danger">Rp. {{ $x->price }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modalmesan{{ $x->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="card border-0 rounded-4">
                                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4"
                                                    alt="..." />
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $x->name_menu }}</h5>
                                                    <p class="card-text text-danger">Rp. {{ $x->price }}</p>
                                                    <div class="row mb-3">
                                                        <div class="col-3 my-auto">
                                                            <p class="my-auto">Qty</p>
                                                        </div>
                                                        <div class="col-1 my-auto">
                                                            <p class="my-auto">:</p>
                                                        </div>
                                                        <div class="col">
                                                            <input type="number" min="1" name="qty"
                                                                id="qty{{ $x->id }}" value="1"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-primary"
                                                id="button_menu{{ $x->id }}" data-bs-dismiss="modal">Pesan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section id="pesanan" class="sticky-bottom bg-white overflow-hidden">
                <div class="container-fluid px-0">
                    <div class="row justify-content-between my-auto">
                        <div class="col my-auto d-flex">
                            <input type="text" class="text-danger pe-2 pb-0 fw-bold border-0 w-25 h4 text-end"
                                id="inc" value="0">
                            <h4>Pesanan</h4></input>
                        </div>
                        <div class="col text-end">
                            <button type="button" id="button_pesan_sekarang" class="btn btn-danger rounded-0 py-3">Pesan
                                Sekarang</button>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <!-- Menu -->
            <section id="menu">
                <div class="container-fluid px-5">
                    <div class="row">
                        <div class="col-lg-12 px-3 py-2 bg-abu">
                            <h3 class="my-0">Soto Sate</h3>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu2.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 px-3 py-2 bg-abu">
                            <h3 class="my-0">Kuliner Mandura Nyaman Oggu</h3>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!-- Menu Akhir -->
    </section>

    <!-- Modal -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        let objectPemesanan = {};
        @foreach ($menu as $x)
            $("#button_menu{{ $x->id }}").click(function() {
                Swal.fire({
                    icon: "success",
                    text: "Pesanan Berhasil Dimasukan",
                    showConfirmButton: false,
                    timer: 1500,
                });
                objectPemesanan['qty{{ $x->id }}'] = $("#qty{{ $x->id }}").val();
                let sum = 0;
                for (var name in objectPemesanan) {
                    let intege = parseInt(objectPemesanan[name]);
                    sum += intege;
                }
                document.getElementById("inc").value = sum;

            })
        @endforeach
        $("#button_pesan_sekarang").click(function() {
            $.ajax({
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('pemesanan.process') }}",
                data: {
                    objectPemesanan: objectPemesanan,
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error) && $.isEmptyObject(data.error500)) {} else {
                        if (data.error500) {
                            if (alert('maaf terjadi kesalah pada server')) {} else window
                                .location.reload();
                        } else {
                            printErrorMsg(data.error);
                        }
                    }
                }
            })
        });
    </script>
@endsection