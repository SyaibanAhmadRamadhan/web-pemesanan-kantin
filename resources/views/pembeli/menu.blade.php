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
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu2.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan"></a>
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
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu2.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu2.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-4">
                            <div class="card border-0 rounded-4">
                                <img src="./assets/img/menu2.jpg" class="card-img-top rounded-4" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Nasi Sate</h5>
                                    <a href="#" class="stretched-link" data-bs-toggle="modal"
                                        data-bs-target="#modalmesan"></a>
                                    <p class="card-text text-danger">Rp. 12.000</p>
                                </div>
                            </div>
                        </div>
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
                            <button type="button" class="btn btn-danger rounded-0 py-3">Pesan Sekarang</button>
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
    <div class="modal fade" id="modalmesan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card border-0 rounded-4">
                        <img src="./assets/img/menu1.jpg" class="card-img-top rounded-4" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Nasi Sate</h5>
                            <p class="card-text text-danger">Rp. 12.000</p>
                            <div class="row mb-3">
                                <div class="col-3 my-auto">
                                    <p class="my-auto">Qty</p>
                                </div>
                                <div class="col-1 my-auto">
                                    <p class="my-auto">:</p>
                                </div>
                                <div class="col">
                                    <input type="number" min="1" name="qty" id="qty" value="1"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="#" class="btn btn-primary" id="modal-btn" onclick="buttonClick();"
                        data-bs-dismiss="modal">Pesan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
