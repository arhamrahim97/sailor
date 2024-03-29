@extends('dashboard.layouts.main')

@section('title')
    Tambah Deteksi Dini
@endsection

@push('style')
@endpush

@section('breadcrumb')
    <div class="col">
        <ol class="breadcrumb bg-transparent mb-0">
            <li class="breadcrumb-item"><a class="text-secondary" href="{{ url('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Moms Care</li>
            <li class="breadcrumb-item active" aria-current="page">Deteksi Dini</li>
        </ol>
    </div>
@endsection

@section('content')
    <section>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card p-0">
                    {{-- <div class="card-header py-3 bg-transparent border-bottom-0">
                        <h6 class="card-title mb-0">Basic example</h6>
                    </div> --}}
                    <div class="card-body">
                        @component('dashboard.components.forms.utama.deteksi_dini')
                            @slot('kartuKeluarga', $kartuKeluarga)
                            @slot('daftarSoal', $daftarSoal)
                            @slot('form_id', 'form_add_deteksi_dini')
                            @slot('proses', url('proses-deteksi-dini'))
                            @slot('action', url('deteksi-dini'))
                            @slot('method', 'POST')
                            @slot('back_url', url('deteksi-dini'))
                        @endcomponent

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $('#m-link-moms-care').addClass('active');
        $('#menu-moms-care').addClass('collapse show')
        $('#ms-link-deteksi-dini').addClass('active')
    </script>
@endpush
