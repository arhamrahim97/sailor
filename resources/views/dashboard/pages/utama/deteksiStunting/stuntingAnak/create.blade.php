@extends('dashboard.layouts.main')

@section('title')
    Tambah Stunting Anak
@endsection

@push('style')
@endpush

@section('breadcrumb')
    <div class="col">
        <ol class="breadcrumb bg-transparent mb-0">
            <li class="breadcrumb-item"><a class="text-secondary" href="{{ url('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Deteksi Stunting</li>
            <li class="breadcrumb-item active" aria-current="page">Stunting Anak</li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Stunting Anak</li>
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
                        @component('dashboard.components.forms.utama.stunting_anak')
                            @slot('kartuKeluarga', $kartuKeluarga)
                            @slot('form_id', 'form_add_stunting_anak')
                            @slot('proses', url('proses-stunting-anak'))
                            @slot('action', url('stunting-anak'))
                            @slot('method', 'POST')
                            @slot('back_url', url('stunting-anak'))
                        @endcomponent

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $('#m-link-deteksi-stunting').addClass('active');
        $('#menu-deteksi-stunting').addClass('collapse show')
        $('#ms-link-stunting-anak').addClass('active')
    </script>
@endpush
