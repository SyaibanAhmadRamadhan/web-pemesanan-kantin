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
                                        <input type="text" class="form-control" value="soto daging" id="nama_menu"
                                            name="nama_menu" placeholder="Ex : soto daging">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="price" class="col-sm-3 col-form-label">Harga Menu</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="soto daging" name="price"
                                            id="price" placeholder="Ex : 200000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <input type="hidden" name="oldPic" value="profile.svg">
                                    <label for="picture" class="col-sm-3 col-form-label">Gambar Menu</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{ asset('assets/img/profile.svg') }}"
                                            class="img-show mb-3 img-fluid rounded d-block" style="height: 200px"
                                            id="foto" alt=""><br><br>
                                        <input type="file" name="picture" class="form-control-file" id="picture"
                                            onchange="previewImage()">
                                        <input type="hidden" name="action" id="action">
                                        <span id="lblError" style="color: red;"></span>
                                    </div>
                                </div>
                                <div class="form-group row" id="divHapusFoto" style="display: none">
                                    <label for="picture" class="col-sm-3 col-form-label"></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label class="css-control css-control-primary css-checkbox" for="hapusPic">
                                            <a style="cursor: pointer" id="hapusPic" name="hapusPic"
                                                onclick="hapusImage()">
                                                <span class="css-control-indicator"></span> ckls jika ingin menghapus
                                            </a>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button id="btnSubmit" class="btn-info btn">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function previewImage() {
            $("#divHapusFoto").css('display', '');
            const image = document.querySelector('#picture');
            const imageShow = document.querySelector('.img-show');
            const oldPic = document.querySelector('[name="oldPic"]').value;
            if (image.value) {
                document.getElementById('picture').disabled = false;
                let action = document.querySelector('#action')
                action.value = "false"
                imageShow.style.display = 'block';
                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);
                oFReader.onload = function(oFREvent) {
                    if (image.value) {
                        imageShow.src = oFREvent.target.result;
                    }
                }
            } else if (!image.value) {
                $("#divHapusFoto").css('display', 'none');
                imageShow.src = "{{ asset('assets/img/profile.svg') }}";
                image.value = '';
            }
        }

        function hapusImage() {
            $("#divHapusFoto").css('display', 'none');
            const imageShow = document.querySelector('.img-show');
            const image = document.querySelector('#picture');
            image.value = '';
            imageShow.src = "{{ asset('assets/img/profile.svg') }}";
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
