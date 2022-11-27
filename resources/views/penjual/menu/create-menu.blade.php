@extends('layout.main-penjual')

@section('container')
    <div id="wrapper">
        @include('partials.penjual-sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('partials.penjual-navbar')
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Menu</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.view') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Menu</li>
                        </ol>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label for="nama_menu" class="col-sm-3 col-form-label">Nama Menu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_menu" name="nama_menu"
                                            placeholder="Ex : soto daging">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="price" class="col-sm-3 col-form-label">Harga Menu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="price" id="price"
                                            placeholder="Ex : 200000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="picture" class="col-sm-3 col-form-label">Gambar Menu</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img class="img-show mb-3 img-fluid rounded d-block" style="height: 200px"
                                            id="foto" alt=""><br><br>
                                        <input type="file" name="picture" class="form-control-file" id="picture"
                                            onchange="previewImage()">
                                        <input type="hidden" name="action" id="action">
                                        <span id="lblError" style="color: red;"></span>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button id="btnSubmit" class="btn-info btn">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            {{-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> - developed by
                            <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
                        </span>
                    </div>
                </div>
            </footer> --}}
            <!-- Footer -->
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function previewImage() {
            const image = document.querySelector('#picture');
            const imageShow = document.querySelector('.img-show');
            imageShow.src = ''
            if (image.value) {
                let action = document.querySelector('#action')
                action.value = "false"
                console.log(action.value)
                imageShow.style.display = 'block';
                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
                oFReader.onload = function(oFREvent) {
                    if (image.value) {
                        imageShow.src = oFREvent.target.result;
                    }
                }
            }

        }
    </script>

    <script>
        $("body").on("click", "#btnSubmit", function() {
            var allowedFiles = [".png", ".jpg", ".jpeg"];
            var fileUpload = $("#picture");
            var lblError = $("#lblError");
            var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
            let file = document.getElementById("picture").files[0];
            if (file == undefined) {
                let action = document.querySelector('#action')
                action.value = "true"
            } else {
                let action = document.querySelector('#action')
                action.value = "false"
            }
            if (file.size > 2097152) {
                lblError.html("file terlalu besar, max file 2mb");
                return false;
            }
            if (fileUpload.val().toLowerCase()) {
                if (!regex.test(fileUpload.val().toLowerCase())) {
                    lblError.html("Gunakan Extension: <b>" + allowedFiles.join(' ') + "</b> only.");
                    return false;
                }
                lblError.html('');
                return true;
            }
        });
    </script>
@endsection
