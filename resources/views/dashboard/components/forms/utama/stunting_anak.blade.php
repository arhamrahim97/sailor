<form id="{{ $form_id }}" action="#" method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($method) && $method == 'PUT')
        @method('PUT')
    @endif
    <div class="row g-4">
        @if (Auth::user()->role != 'keluarga')
            <div class="col-sm-12 col-lg">
                @component('dashboard.components.formElements.select',
                    [
                        'label' => 'Nama Kepala Keluarga / Nomor KK',
                        'id' => 'nama-kepala-keluarga',
                        'name' => 'nama_kepala_keluarga',
                        'class' => 'select2',
                        'wajib' => '<sup class="text-danger">*</sup>',
                    ])
                    @slot('options')
                        @foreach ($kartuKeluarga as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kepala_keluarga }} / {{ $item->nomor_kk }}
                            </option>
                        @endforeach
                    @endslot
                @endcomponent
            </div>
        @endif
        <div class="col-sm-12 col-lg">
            @component('dashboard.components.formElements.select',
                [
                    'label' => 'Nama Anak (Tanggal Lahir)',
                    'id' => 'nama-anak',
                    'name' => 'nama_anak',
                    'class' => 'select2',
                    'attribute' => 'disabled',
                    'wajib' => '<sup class="text-danger">*</sup>',
                ])
            @endcomponent
        </div>
        @if (Auth::user()->role == 'admin' && $method == 'POST')
            <div class="col-sm-12 col-lg">
                @component('dashboard.components.formElements.select',
                    [
                        'label' => 'Bidan sesuai lokasi anak',
                        'id' => 'nama-bidan',
                        'name' => 'nama_bidan',
                        'class' => 'select2',
                        'attribute' => 'disabled',
                        'wajib' => '<sup class="text-danger">*</sup>',
                    ])
                @endcomponent
            </div>
        @endif
        <div class="col-sm-12 col-lg">
            @component('dashboard.components.formElements.input',
                [
                    'label' => 'Tinggi Badan (Cm)',
                    'type' => 'number',
                    'id' => 'tinggi_badan',
                    'name' => 'tinggi_badan',
                    'class' => '',
                    'wajib' => '<sup class="text-danger">*</sup>',
                ])
            @endcomponent
        </div>
        <div class="col-12 text-end">
            @component('dashboard.components.buttons.process',
                [
                    'id' => 'proses-stunting-anak',
                    'type' => 'submit',
                ])
            @endcomponent
        </div>
    </div>
    <div class="modal fade" id="modal-hasil" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-body custom_scroll p-lg-4 pb-3">
                    <div class="d-flex w-100 justify-content-between mb-1">
                        <div>
                            <h5>Hasil Stunting Anak</h5>
                            <p class="text-muted" id="tanggal-proses"> - </p>
                        </div>
                        <button type="button" class="btn-close float-end" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="alert kategori-alert rounded-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar rounded no-thumbnail kategori-bg text-light"><i id="kategori-emot"
                                    class=""></i></div>
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div class="h6 mb-0" id="modal-kategori" style="margin-left: 5px"> - </div>
                                <div class="float-end" id="modal-zscore"><span class="badge kategori-bg"> - </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card fieldset border border-dark my-4">
                        <span class="fieldset-tile text-dark ml-5 bg-white">Info Anak:</span>
                        <div class="card-body p-0 py-1 px-1">
                            <ul class="list-unstyled mb-0">
                                <li class="justify-content-between mb-2">
                                    <label><i class="fa-solid fa-child"></i> Nama Anak:</label>
                                    <span class="badge bg-info float-end text-uppercase" id="modal-nama-anak"> - </span>
                                </li>
                                <li class="justify-content-between mb-2">
                                    <label><i class="bi bi-calendar2-event-fill"></i> Tanggal Lahir</label>
                                    <span class="badge bg-info float-end text-uppercase" id="modal-tanggal-lahir"> -
                                    </span>
                                </li>
                                <li class="justify-content-between mb-2">
                                    <label><i class="fa-solid fa-cake-candles"></i> Usia</label>
                                    <span class="badge bg-info float-end text-uppercase" id="modal-usia"> - </span>
                                </li>
                                <li class="justify-content-between mb-2">
                                    <label><i class="fas fa-ruler-vertical"></i> Tinggi Badan</label>
                                    <span class="badge bg-info float-end text-uppercase" id="modal-tinggi_badan"> -
                                    </span>
                                </li>
                                <li class="justify-content-between">
                                    <label><i class="fa-solid fa-venus-mars"></i> Jenis Kelamin</label>
                                    <span class="badge bg-info float-end text-uppercase"
                                        id="modal-jenis-kelamin">Laki-laki</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-sm-6 col-lg-4">
                            <button class="btn btn-outline-dark text-uppercase w-100" data-bs-dismiss="modal"
                                aria-label="Close"><i class="bi bi-x-circle"></i> Batal</button>
                        </div>
                        <div class="col-sm-6 col-lg-8">
                            {{-- <a href="#" class="btn btn-info text-white text-uppercase w-100" id="simpan-pertumbuhan-anak"><i class="fa-solid fa-floppy-disk"></i> Simpan</a> --}}
                            @component('dashboard.components.buttons.submit',
                                [
                                    'id' => 'proses-pertumbuhan-anak',
                                    'type' => 'submit',
                                    'class' => 'text-white text-uppercase w-100',
                                    'icon' => Auth::user()->role == 'keluarga' ? '<i class="fa-solid fa-paper-plane"></i>' : null,
                                    'label' => Auth::user()->role == 'keluarga' ? 'Kirim Data' : 'Simpan',
                                ])
                            @endcomponent
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>


@push('script')
    @if (isset($method) && $method == 'PUT')
        <script>
            $(document).ready(function() {
                $('#nama-kepala-keluarga').val(
                    '{{ $dataEdit->anggotaKeluarga->kartuKeluarga->id }}').change();
                $('#tinggi_badan').val(
                    '{{ $dataEdit->tinggi_badan }}').change();
            });

            Swal.fire({
                title: 'Perhatian!',
                text: 'Apabila mengubah data, maka jumlah usia anak tidak lagi berpatokan dari tanggal sekarang dengan tanggal lahir anak. Tetapi jumlah usia anak terhitung dari tanggal data ini dibuat dengan tanggal lahir anak.',
                icon: 'warning',
            })
        </script>
    @endif
    <script>
        $(function() {
            $('.modal').modal({
                backdrop: 'static',
                keyboard: false
            })
            if ($('#nama-kepala-keluarga').val() != '') {
                changeKepalaKeluarga()
            }

            $('#nama-kepala-keluarga').change(function() {
                changeKepalaKeluarga()
            })

            $('#nama-anak').change(function() {
                changeAnak()
            })

            if ('{{ Auth::user()->role }}' == 'keluarga') {
                var textConfirm = 'Jika sudah sesuai, maka data akan dikirim untuk dilakukan Validasi'
                var confirmButtonText = 'Ya, Kirim Data'
                var titleResult = 'Data berhasil dikirim'
                var textResult = 'Data berhasil dikirim dan sedang menunggu proses Validasi.'
            } else {
                var textConfirm =
                    'Jika sudah sesuai, maka data akan disimpan dan dapat oleh Penyuluh BKKBN dan Dinas P2KB'
                var confirmButtonText = 'Ya, Simpan'
                var titleResult = 'Data berhasil disimpan'
                var textResult = 'Data berhasil disimpan dan dapat dilihat oleh Penyuluh BKKBN dan Dinas P2KB.'
            }

            $('#{{ $form_id }}').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                if ($('#modal-hasil').hasClass('show')) {
                    Swal.fire({
                        icon: 'question',
                        title: 'Apakah data sudah sesuai?',
                        text: textConfirm,
                        showCancelButton: true,
                        confirmButtonText: confirmButtonText,
                        cancelButtonText: 'Batal',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "POST",
                                url: "{{ $action }}",
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                data: formData,
                                cache: false,
                                processData: false,
                                contentType: false,
                                success: function(response) {
                                    if (response.status == 'success') {
                                        Swal.fire({
                                            icon: 'success',
                                            title: titleResult,
                                            text: textResult,
                                        }).then((result) => {
                                            // set location
                                            window.location.href =
                                                "{{ $back_url }}";
                                        })
                                    } else if (response.res ==
                                        'sudah_ada_tapi_belum_divalidasi') {
                                        Swal.fire(
                                            'Terjadi kesalahan',
                                            response.mes,
                                            'error',
                                        )
                                        $('#modal-hasil').modal('hide')
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Terjadi kesalahan',
                                            text: 'Data gagal disimpan',
                                        })
                                    }

                                },
                                error: function(response) {
                                    alert(response.responseJSON.message)
                                },

                            });
                        }
                    })

                } else {
                    $("#overlay").fadeIn(100);
                    $('.error-text').text('');
                    $.ajax({
                        type: "POST",
                        url: "{{ $proses }}",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        data: formData,
                        cache: false,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            $("#overlay").fadeOut(100);
                            if ($.isEmptyObject(data.error)) {
                                $('#modal-hasil').modal('show');
                                $('#tanggal-proses').text('Tanggal : ' + moment().format('LL'))
                                $('#modal-nama-anak').text(data.nama_anak);
                                $('#modal-tanggal-lahir').text(moment(data.tanggal_lahir)
                                    .format('LL'));
                                $('#modal-usia').text(data.usia_tahun);
                                $('#modal-jenis-kelamin').text(data.jenis_kelamin);
                                $('#modal-tinggi_badan').text(data.tinggi_badan + ' Cm');
                                $('#modal-kategori').text(data.kategori);
                                $('#modal-zscore').text('ZScore : ' + data.zscore);
                                var kategoriBg = ['bg-danger', 'bg-warning', 'bg-info',
                                    'bg-success', 'bg-primary'
                                ];
                                var kategoriAlert = ['alert-danger', 'alert-warning',
                                    'alert-info', 'alert-success', 'alert-primary'
                                ];
                                var kategoriEmot = ['fa-solid fa-face-frown',
                                    'fa-solid fa-face-meh', 'fa-solid fa-face-smile',
                                    'fa-solid fa-face-surprise'
                                ];
                                $.each(kategoriBg, function(i, v) {
                                    $('.kategori-bg').removeClass(v);
                                });
                                $.each(kategoriAlert, function(i, v) {
                                    $('.kategori-alert').removeClass(v);
                                });
                                $.each(kategoriEmot, function(i, v) {
                                    $('.kategori-emot').removeClass(v);
                                });

                                if (data.kategori == 'Sangat Pendek (Resiko Stunting Tinggi)') {
                                    $('.kategori-bg').addClass('bg-danger');
                                    $('.kategori-alert').addClass('alert-danger');
                                    $('#kategori-emot').addClass('fa-solid fa-face-frown');
                                } else if (data.kategori == 'Pendek (Resiko Stunting Sedang)') {
                                    $('.kategori-bg').addClass('bg-warning');
                                    $('.kategori-alert').addClass('alert-warning');
                                    $('#kategori-emot').addClass('fa-solid fa-face-meh');
                                } else if (data.kategori == 'Normal') {
                                    $('.kategori-bg').addClass('bg-success');
                                    $('.kategori-alert').addClass('alert-success');
                                    $('#kategori-emot').addClass('fa-solid fa-face-smile');
                                } else if (data.kategori == 'Tinggi') {
                                    $('.kategori-bg').addClass('bg-primary');
                                    $('.kategori-alert').addClass('alert-primary');
                                    $('#kategori-emot').addClass('fa-solid fa-face-surprise');
                                }
                            } else {
                                Swal.fire(
                                    'Terjadi Kesalahan!',
                                    'Periksa Kembali Inputan Anda!',
                                    'error'
                                )
                                printErrorMsg(data.error);
                            }
                        }
                    });

                }

            });

            const printErrorMsg = (msg) => {
                $.each(msg, function(key, value) {
                    $('.' + key + '-error').text(value);
                });
            }
        });

        function changeKepalaKeluarga() {
            if ('{{ Auth::user()->role }}' != 'keluarga') {
                var id = $('#nama-kepala-keluarga').val();
            } else {
                var id = '{{ Auth::user()->profil->kartu_keluarga_id }}';
            }
            var rentang_umur = 'balita';
            var id_anak = "{{ isset($dataEdit) ? $dataEdit->anggota_keluarga_id : '' }}";
            var selected = '';
            $('#nama-anak').html('');
            $('#nama-anak').append('<option value="" selected hidden>- Pilih Salah Satu -</option>')
            $.get("{{ route('getAnak') }}", {
                id: id,
                rentang_umur: rentang_umur,
                method: "{{ $method }}",
                id_anak: id_anak
            }, function(result) {
                $.each(result.anggota_keluarga, function(key, val) {
                    var tanggal_lahir = moment(val.tanggal_lahir).format('LL');
                    selected = '';
                    if (val.id == "{{ isset($dataEdit) ? $dataEdit->anggota_keluarga_id : '' }}") {
                        selected = 'selected';
                    }
                    $('#nama-anak').append(
                        `<option value="${val.id}" ${selected}>${val.nama_lengkap} (${tanggal_lahir})</option>`
                    );
                })

                if ("{{ $method }}" == 'PUT') {
                    selected = '';

                    if (result.anggota_keluarga_hapus) {
                        if (result.anggota_keluarga_hapus.id ==
                            "{{ isset($dataEdit) ? $dataEdit->anggota_keluarga_id : '' }}") {
                            selected = 'selected';
                        }

                        $('#nama-anak').append(
                            `<option value="${result.anggota_keluarga_hapus.id}" ${selected}>${result.anggota_keluarga_hapus.nama_lengkap} (${result.anggota_keluarga_hapus.tanggal_lahir})</option>`
                        );

                    }
                }
                $('#nama-anak').removeAttr('disabled');
            });
        }

        function changeAnak() {
            if ('{{ Auth::user()->role }}' == 'admin') {
                var id = $('#nama-anak').val();
                $('#nama-bidan').html('');
                $('#nama-bidan').append('<option value="" selected hidden>- Pilih Salah Satu -</option>')
                $.get("{{ route('getBidan') }}", {
                    id: id,
                }, function(result) {
                    $.each(result, function(key, val) {
                        $('#nama-bidan').append(`<option value="${val.id}">${val.nama_lengkap}</option>`);
                    })
                    $('#nama-bidan').removeAttr('disabled');
                });
            }
        }
    </script>
@endpush
