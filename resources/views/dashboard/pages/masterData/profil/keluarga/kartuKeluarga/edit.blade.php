@extends('dashboard.layouts.main')

@section('title')
    Ubah Data Kartu Keluarga
@endsection

@push('style')
    <style>
        input {
            text-transform: uppercase;
        }

        #email {
            text-transform: lowercase !important;
        }

        #file-kartu-keluarga {
            text-transform: lowercase !important;
        }

        #file-domisili {
            text-transform: lowercase !important;
        }

    </style>
@endpush

@section('breadcrumb')
    <div class="col">
        <ol class="breadcrumb bg-transparent mb-0">
            <li class="breadcrumb-item"><a class="text-secondary" href="{{ url('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profil</li>
            <li class="breadcrumb-item active" aria-current="page">Keluarga</li>
            <li class="breadcrumb-item active" aria-current="page">Ubah Kartu Keluarga</li>
        </ol>
    </div>
@endsection

@section('content')
    <section>
        <div class="row justify-content-center mb-4">
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card p-4 pt-3">
                            <form id="update-kartu-keluarga" action="#" method="POST" enctype="multipart/form-data"
                                autocomplete="off">
                                @csrf
                                @method('PUT')
                                @component('dashboard.components.forms.masterData.kartuKeluarga')
                                    @slot('form_id', 'form_add_kepala_keluarga')
                                    @slot('kartuKeluarga', isset($kartuKeluarga) ? $kartuKeluarga : null)
                                    @slot('provinsi', $provinsi)
                                    @slot('kabupatenKota', $kabupatenKota)
                                    @slot('kecamatan', $kecamatan)
                                    @slot('desaKelurahan', $desaKelurahan)


                                    @slot('action', route('keluarga.store'))
                                    @slot('method', 'POST')
                                @endcomponent
                                <div class="col-12 mt-3 text-end">
                                    @component('dashboard.components.buttons.submit',
                                        [
                                            'id' => '',
                                            'type' => 'submit',
                                            'class' => 'text-white text-uppercase',
                                            'label' => 'Simpan',
                                        ])
                                    @endcomponent
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $('#m-link-profil').addClass('active');
        $('#menu-profil').addClass('collapse show')
        $('#ms-link-master-data-profil-keluarga').addClass('active')

        $('#update-kartu-keluarga').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            Swal.fire({
                title: 'Perbarui Data?',
                text: "Apakah anda yakin ingin memperbarui data ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya, Perbarui'
            }).then((result) => {
                if (result.value) {
                    $('.error-text').text('');
                    $.ajax({
                        type: "POST",
                        url: "{{ route('keluarga.update', $kartuKeluarga->id) }}",
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
                                Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: 'Data berhasil diperbarui.',
                                    })
                                    .then((result) => {
                                        window.location.href = "{{ url()->previous() }}";
                                    })

                            } else {
                                Swal.fire(
                                    'Terjadi Kesalahan!',
                                    'Periksa kembali data yang anda masukkan',
                                    'error'
                                )
                                printErrorMsg(data.error);
                            }
                        },
                        error: function(data) {
                            alert(data.responseJSON.message)
                        },

                    });
                }
            })
        })

        const printErrorMsg = (msg) => {
            $.each(msg, function(key, value) {
                $('.' + key + '-error').text(value);
            });
        }
    </script>
@endpush
