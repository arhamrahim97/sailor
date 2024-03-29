<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 admin template and web Application ui kit.">
    <meta name="keyword"
        content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects">
    <title>SI GERCEP STUNTING | Login</title>
    <link rel="shortcut icon" href="{{ asset('assets/favicon') }}/favicon.ico" type="image/x-icon" />

    <!-- project css file  -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard') }}/css/luno.style.min.css">
    <link rel="stylesheet" href="{{ asset('assets/dashboard') }}/font-awesome/css/all.min.css">

    <style>
        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100000;
            width: 100%;
            height: 100%;
            display: none;
            background: rgba(0, 0, 0, 0.6);
        }

        .cv-spinner {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border: 4px #ddd solid;
            border-top: 4px #2e93e6 solid;
            border-radius: 50%;
            animation: sp-anime 0.8s infinite linear;
        }

        @keyframes sp-anime {
            100% {
                transform: rotate(360deg);
            }
        }

    </style>
</head>

<body id="layout-1" data-luno="theme-blue">
    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
    <!-- start: body area -->
    <div class="wrapper">
        <!-- start: page body -->
        <div class="page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8 d-flex justify-content-center align-items-center">

                        <div class="card shadow-sm w-100 p-4 p-md-5 px-md-3" style="max-width: 35rem;">
                            <div class="justify-content-center text-center">
                                <h1>MASUK</h1>
                                <span class="text-muted text-center px-2">Pilih ingin masuk sebagai
                                    Keluarga (Kepala Keluarga/Remaja)
                                    <br>/ Bidan / Penyuluh</span>
                            </div>
                            <div class="card-header justify-content-center py-4 pt-3">
                                <ul class="nav nav-tabs tab-page-toolbar rounded d-inline-flex" role="tablist">
                                    <li class="nav-item" id="keluarga"><a class="nav-link border-0 active"
                                            data-bs-toggle="tab" id="nav-link-keluarga" href="#nav-keluarga"
                                            role="tab"><i class="fa-solid fa-people-roof"></i> Keluarga</a></li>
                                    <li class="nav-item" id="bidan"><a class="nav-link border-0"
                                            data-bs-toggle="tab" id="nav-link-bidan" href="#nav-bidan" role="tab"><i
                                                class="fa-solid fa-user-doctor"></i> Bidan</a></li>
                                    <li class="nav-item" id="penyuluh"><a class="nav-link border-0"
                                            data-bs-toggle="tab" id="nav-link-penyuluh" href="#nav-penyuluh"
                                            role="tab"><i class="fa-solid fa-people-group"></i> Penyuluh</a></li>
                                    <li class="nav-item" id="admin"><a class="nav-link border-0"
                                            data-bs-toggle="tab" id="nav-link-admin" href="#nav-admin" role="tab"><i
                                                class="fa-solid fa-user-shield"></i> Admin</a></li>
                                </ul>
                            </div>
                            <div class="card-body py-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav-keluarga" role="tabpanel">
                                        <form class="row g-3 w-100 justify-content-center form-login" action="/cekLogin"
                                            method="POST">
                                            {{-- <ul class="nav nav-tabs tab-page-toolbar rounded d-inline-flex" role="tablist">
                                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#btn-normal" role="tab" aria-selected="true">Buttons</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#btn-group" role="tab" aria-selected="false">Buttons Groups</a></li>
                                            </ul> --}}
                                            <span class="text-center text-muted mt-2">Login sebagai Kepala Keluarga /
                                                Remaja</span>
                                            <input type="hidden" id="role" class="form-control form-control" name="role"
                                                value="keluarga">
                                            @csrf
                                            @if (session()->has('loginError'))
                                                <div class="alert alert-danger">
                                                    {{ session('loginError') }}
                                                </div>
                                            @endif
                                            <div class="col-12 mt-3">
                                                <div class="mb-3">
                                                    <label class="form-label">Nomor HP / NIK</label>
                                                    <input type="text" id="nomor-hp" name="nomor_hp"
                                                        class="form-control form-control-lg angka"
                                                        placeholder="0812.........">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <div class="form-label">
                                                        <span class="d-flex justify-content-between align-items-center">
                                                            Kata Sandi
                                                            <a class="text-primary lupa-kata-sandi" data-role="keluarga"
                                                                href="#">Lupa Kata
                                                                Sandi?</a>
                                                        </span>
                                                    </div>
                                                    <input type="password" id="kata_sandi" name="password"
                                                        class="form-control form-control-lg"
                                                        placeholder="***************">
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-4">
                                                <button type="submit"
                                                    class="btn btn-lg btn-outline-primary lift text-uppercase"
                                                    href="index.html" title=""><i class="bi bi-box-arrow-in-right"></i>
                                                    MASUK</button>
                                            </div>
                                            <div class="col-12 text-center mt-4">
                                                <span class="text-muted">Belum memiliki akun keluarga? <a
                                                        href="{{ route('registrasi') }} ">Daftar disini</a></span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="nav-bidan" role="tabpanel">
                                        <form class="row g-3 w-100 justify-content-center form-login" action="/cekLogin"
                                            method="POST">
                                            <input type="hidden" id="role" class="form-control form-control" name="role"
                                                value="bidan">
                                            @csrf
                                            @if (session()->has('loginError'))
                                                <div class="alert alert-danger">
                                                    {{ session('loginError') }}
                                                </div>
                                            @endif
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Nomor HP / NIK</label>
                                                    <input type="text" id="nomor-hp" name="nomor_hp"
                                                        class="form-control form-control-lg angka"
                                                        placeholder="0812.........">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <div class="form-label">
                                                        <span class="d-flex justify-content-between align-items-center">
                                                            Kata Sandi
                                                            <a class="text-primary lupa-kata-sandi" data-role="bidan"
                                                                href="#">Lupa Kata Sandi?</a>
                                                        </span>
                                                    </div>
                                                    <input type="password" id="password" name="password"
                                                        class="form-control form-control-lg"
                                                        placeholder="***************">
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-4">
                                                <button type="submit"
                                                    class="btn btn-lg btn-outline-primary lift text-uppercase"
                                                    href="index.html" title=""><i class="bi bi-box-arrow-in-right"></i>
                                                    MASUK</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="nav-penyuluh" role="tabpanel">
                                        <form class="row g-3 w-100 justify-content-center form-login" action="/cekLogin"
                                            method="POST">
                                            <input type="hidden" id="role" class="form-control form-control" name="role"
                                                value="penyuluh">
                                            @csrf
                                            @if (session()->has('loginError'))
                                                <div class="alert alert-danger">
                                                    {{ session('loginError') }}
                                                </div>
                                            @endif
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Nomor HP / NIK</label>
                                                    <input type="text" id="nomor-hp" name="nomor_hp"
                                                        class="form-control form-control-lg angka"
                                                        placeholder="0812.........">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <div class="form-label">
                                                        <span class="d-flex justify-content-between align-items-center">
                                                            Kata Sandi
                                                            <a class="text-primary lupa-kata-sandi" data-role="penyuluh"
                                                                href="#">Lupa Kata Sandi?</a>
                                                        </span>
                                                    </div>
                                                    <input type="password" id="password" name="password"
                                                        class="form-control form-control-lg"
                                                        placeholder="***************">
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-4">
                                                <button type="submit"
                                                    class="btn btn-lg btn-outline-primary lift text-uppercase"
                                                    href="index.html" title=""><i class="bi bi-box-arrow-in-right"></i>
                                                    MASUK</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="nav-admin" role="tabpanel">
                                        <form class="row g-3 w-100 justify-content-center form-login" action="/cekLogin"
                                            method="POST">
                                            <input type="hidden" id="role" class="form-control form-control" name="role"
                                                value="admin">
                                            @csrf
                                            @if (session()->has('loginError'))
                                                <div class="alert alert-danger">
                                                    {{ session('loginError') }}
                                                </div>
                                            @endif
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Nomor HP / NIK</label>
                                                    <input type="text" id="nomor-hp" name="nomor_hp"
                                                        class="form-control form-control-lg angka"
                                                        placeholder="0812.........">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <div class="form-label">
                                                        <span class="d-flex justify-content-between align-items-center">
                                                            Kata Sandi
                                                        </span>
                                                    </div>
                                                    <input type="password" id="password" name="password"
                                                        class="form-control form-control-lg"
                                                        placeholder="***************">
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-4">
                                                <button type="submit"
                                                    class="btn btn-lg btn-outline-primary lift text-uppercase"
                                                    href="index.html" title=""><i class="bi bi-box-arrow-in-right"></i>
                                                    MASUK</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Row -->
            </div>
        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/dashboard') }}/font-awesome/js/all.min.js"></script>
    <script src="{{ asset('assets/dashboard') }}/bundles/sweetalert2.bundle.js"></script>
    <script src="{{ asset('assets/dashboard') }}/bundles/libscripts.bundle.js"></script>
    <script src="{{ asset('assets/dashboard') }}/js/jquery.mask.min.js"></script>

    <!-- Jquery Page Js -->

    <script>
        $('.angka').mask('00000000000000000000');
        // if nav-item change
        $('.nav-item').click(function() {
            $('.nav-item').removeClass('active');
            $(this).addClass('active');

        });

        $('.lupa-kata-sandi').click(function() {
            const role = $(this).data('role')
            if (role == 'keluarga') {
                Swal.fire({
                    text: 'Silahkan hubungi bidan terdekat apabila lupa kata sandi',
                    icon: 'info',
                })
            } else {
                Swal.fire({
                    text: 'Silahkan hubungi admin apabila lupa kata sandi',
                    icon: 'info',
                })
            }
        });

        document.getElementById("nomor-hp").focus();

        $('.form-login').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var data = form.serialize();
            $.ajax({
                url: url,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: data,
                success: function(response) {
                    console.log(response);
                    if (response.res == 'inputan_tidak_lengkap') {
                        Swal.fire(
                            'Inputan tidak lengkap',
                            'Harap isi semua inputan',
                            'error',
                        )
                    }
                    if (response.res == 'berhasil') {
                        window.location.href = "{{ url('/dashboard') }}";
                    }
                    if (response.res == 'tidak_valid') {
                        Swal.fire(
                            'Data anda belum divalidasi',
                            response.mes,
                            'error',
                        )
                    }
                    if (response.res == 'ditolak') {
                        Swal.fire({
                            title: 'Data anda ditolak',
                            text: response.mes,
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Perbarui Data'

                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "{{ url('registrasi-ulang/') }}" +
                                    "/" +
                                    response.id;

                            }
                        })

                    }

                    if (response.res == 'tidak_ada_profil') {
                        window.location.href = "{{ route('lengkapiProfil') }}";
                    }

                    if (response.res == 'tidak_aktif') {
                        Swal.fire(
                            'Tidak dapat masuk!',
                            response.mes,
                            'error'
                        )
                    }
                    if (response.res == 'gagal') {
                        console.log(response)
                        Swal.fire(
                            'Terjadi Kesalahan!',
                            response.mes,
                            'error'
                        )
                    }
                }
            });
        });

        var overlay = $('#overlay').hide();
        $(document)
            .ajaxStart(function() {
                overlay.show();
            })
            .ajaxStop(function() {
                overlay.hide();
            });
    </script>

</body>

</html>
