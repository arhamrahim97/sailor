@push('style')
    <style>
        input {
            text-transform: uppercase;
        }

        #email {
            text-transform: lowercase !important;
        }

    </style>
@endpush

<div class="row g-4">
    <div class="col-md-6">
        @component('dashboard.components.formElements.input',
            [
                'label' => 'Nomor Induk Kependudukan (NIK)',
                'type' => 'text',
                'id' => 'nik',
                'name' => 'nik',
                'class' => 'angka',
                'value' => $profil->nik ?? null,
                'wajib' => '<sup class="text-danger">*</sup>',
            ])
        @endcomponent
    </div>
    <div class="col-md-6">
        @component('dashboard.components.formElements.input',
            [
                'label' => 'Nama Lengkap',
                'type' => 'text',
                'id' => 'nama-lengkap',
                'name' => 'nama_lengkap',
                'class' => '',
                'value' => $profil->nama_lengkap ?? null,
                'wajib' => '<sup class="text-danger">*</sup>',
            ])
        @endcomponent
    </div>
    <div class="col-md-6">
        <label for="" class="mb-1">Jenis Kelamin <sup class="text-danger">*</sup></label>
        <div class="d-flex flex-row">
            <div class="p-2">
                @component('dashboard.components.formElements.radio',
                    [
                        'id' => 'jenis-kelamin-laki-laki',
                        'name' => 'jenis_kelamin',
                        'value' => 'LAKI-LAKI',
                        'label' => 'LAKI-LAKI',
                        'checked' => isset($profil) && $profil->jenis_kelamin == 'LAKI-LAKI' ? 'checked' : '',
                    ])
                @endcomponent
            </div>
            <div class="p-2">
                @component('dashboard.components.formElements.radio',
                    [
                        'id' => 'jenis-kelamin-perempuan',
                        'name' => 'jenis_kelamin',
                        'value' => 'PEREMPUAN',
                        'label' => 'PEREMPUAN',
                        'checked' => isset($profil) && $profil->jenis_kelamin == 'PEREMPUAN' ? 'checked' : '',
                    ])
                @endcomponent
            </div>
        </div>
        <span class="text-danger error-text jenis_kelamin-error"></span>
    </div>
    <div class="col-md-6">
        @component('dashboard.components.formElements.input',
            [
                'label' => 'Tempat Lahir',
                'type' => 'text',
                'id' => 'tempat-lahir',
                'name' => 'tempat_lahir',
                'class' => '',
                'value' => $profil->tempat_lahir ?? null,
                'wajib' => '<sup class="text-danger">*</sup>',
            ])
        @endcomponent
    </div>
    <div class="col-md-6">
        @component('dashboard.components.formElements.input',
            [
                'label' => 'Tanggal Lahir',
                'type' => 'text',
                'id' => 'tanggal-lahir',
                'name' => 'tanggal_lahir',
                'class' => 'tanggal',
                'placeholder' => 'dd-mm-yyyy',
                'value' => isset($profil) ? Carbon\Carbon::parse($profil->tanggal_lahir)->isoFormat('DD-MM-YYYY') : '',
                'wajib' => '<sup class="text-danger">*</sup>',
            ])
        @endcomponent
    </div>
    <div class="col-md-6">
        @component('dashboard.components.formElements.select',
            [
                'label' => 'Agama',
                'name' => 'agama',
                'id' => 'agama',
                'class' => 'select2 agama',
                'attribute' => '',
                'wajib' => '<sup class="text-danger">*</sup>',
            ])
            @slot('options')
                @foreach ($agama as $row)
                    <option value="{{ $row->id }}"
                        {{ isset($profil) && $row->id == $profil->agama_id ? 'selected' : '' }}>
                        {{ $row->agama }}</option>
                @endforeach
            @endslot
        @endcomponent
    </div>
    @if (Auth::user()->role != 'admin')
        <div class="col-md-6">
            @component('dashboard.components.formElements.input',
                [
                    'label' => '7 Angka Terakhir STR / Tanggal Lahir',
                    'type' => 'text',
                    'id' => 'tujuh-angka-terakhir-str',
                    'name' => 'tujuh_angka_terakhir_str',
                    'class' => 'angka',
                    'value' => $profil->tujuh_angka_terakhir_str ?? null,
                    'wajib' => '<sup class="text-danger">*</sup>',
                ])
            @endcomponent
        </div>
    @endif
    <div class="col-md-6" id="col-nomor-hp">
        @component('dashboard.components.formElements.input',
            [
                'label' => 'Nomor HP',
                'type' => 'text',
                'id' => 'nomor-hp',
                'name' => 'nomor_hp',
                'class' => 'angka',
                'value' => $user->nomor_hp ?? null,
                'wajib' => '<sup class="text-danger">*</sup>',
            ])
        @endcomponent
    </div>
    <div class="col-md-6">
        @component('dashboard.components.formElements.input',
            [
                'label' => 'Email',
                'type' => 'text',
                'id' => 'email',
                'name' => 'email',
                'class' => '',
                'value' => $profil->email ?? null,
                // 'wajib' => '<sup class="text-danger">*</sup>',
            ])
        @endcomponent
    </div>
    <div class="col-md-6">
        @component('dashboard.components.formElements.select',
            [
                'label' => 'Provinsi',
                'name' => 'provinsi',
                'id' => 'provinsi',
                'class' => 'select2 provinsi',
                'attribute' => '',
                'wajib' => '<sup class="text-danger">*</sup>',
            ])
            @slot('options')
                @foreach ($provinsi as $prov)
                    <option value="{{ $prov->id }}"
                        {{ isset($profil) && $prov->id == $profil->provinsi_id ? 'selected' : '' }}>
                        {{ $prov->nama }}
                    </option>
                @endforeach
            @endslot
        @endcomponent
    </div>
    <div class="col-md-6">
        @component('dashboard.components.formElements.select',
            [
                'label' => 'Kabupaten / Kota',
                'name' => 'kabupaten_kota',
                'id' => 'kabupaten-kota',
                'class' => 'select2 kabupaten-kota',
                'attribute' => '',
                'wajib' => '<sup class="text-danger">*</sup>',
            ])
            @slot('options')
                @if (isset($profil))
                    @foreach ($kabupatenKota as $kab)
                        <option value="{{ $kab->id }}"
                            {{ isset($profil) && $kab->id == $profil->kabupaten_kota_id ? 'selected' : '' }}>
                            {{ $kab->nama }}</option>
                    @endforeach
                @endslot
            @endif
        @endcomponent
    </div>
    <div class="col-md-6">
        @component('dashboard.components.formElements.select',
            [
                'label' => 'Kecamatan',
                'name' => 'kecamatan',
                'id' => 'kecamatan',
                'class' => 'select2 kecamatan',
                'attribute' => '',
                'wajib' => '<sup class="text-danger">*</sup>',
            ])
            @slot('options')
                @if (isset($profil))
                    @foreach ($kecamatan as $kec)
                        <option value="{{ $kec->id }}"
                            {{ isset($profil) && $kec->id == $profil->kecamatan_id ? 'selected' : '' }}>
                            {{ $kec->nama }}</option>
                    @endforeach
                @endslot
            @endif
        @endcomponent
    </div>
    <div class="col-md-6">
        @component('dashboard.components.formElements.select',
            [
                'label' => 'Desa / Kelurahan',
                'name' => 'desa_kelurahan',
                'id' => 'desa-kelurahan',
                'class' => 'select2 desa-kelurahan',
                'attribute' => '',
                'wajib' => '<sup class="text-danger">*</sup>',
            ])
            @slot('options')
                @if (isset($profil))
                    @foreach ($desaKelurahan as $des)
                        <option value="{{ $des->id }}"
                            {{ isset($profil) && $des->id == $profil->desa_kelurahan_id ? 'selected' : '' }}>
                            {{ $des->nama }}</option>
                    @endforeach
                @endslot
            @endif
        @endcomponent
    </div>
    <div class="col-md-6">
        @component('dashboard.components.formElements.input',
            [
                'label' => 'Alamat',
                'type' => 'text',
                'id' => 'alamat',
                'name' => 'alamat',
                'class' => '',
                'value' => $profil->alamat ?? null,
                'wajib' => '<sup class="text-danger">*</sup>',
            ])
        @endcomponent
    </div>
    <div class=" col-md-6">
        <label class="col-md-3 col-sm-4 col-form-label">Foto Profil</label>
        <div class="col-md-9 col-sm-8">
            <div class="image-input avatar xxl rounded-4"
                style="background-image: url({{ isset($profil) && $profil->foto_profil != null ? $foto_profil : asset('assets/dashboard/images/avatar.png') }});">
                <div class="avatar-wrapper rounded-4"
                    style="background-image: url({{ isset($profil) && $profil->foto_profil != null ? $foto_profil : asset('assets/dashboard/images/avatar.png') }});">
                </div>
                <div class="file-input"
                    style="background: var(--card-color); text-align: center; height: 24px; width: 24px; line-height: 24px; border-radius: 24px; background-position: center !important;">
                    <input type="file" class="form-control" name="foto_profil" id="foto-profil"
                        style="z-index: 999999" value="" accept="image/*">
                    <label for="file-input2" class="fa fa-pencil shadow"></label>
                </div>
            </div>
        </div>
        <span class="text-danger error-text foto_profil-error"></span>
    </div>
    <div class="col-12 text-end">
        @component('dashboard.components.buttons.submit',
            [
                'id' => 'proses-pertumbuhan-anak',
                'type' => 'submit',
                'class' => 'text-white text-uppercase',
                'label' => $titleSubmit ?? 'Simpan',
            ])
        @endcomponent
    </div>
</div>

@push('script')
    <script>
        $(document).on('change', '.provinsi', function() {
            $('#kecamatan').html('')
            $('#kecamatan').attr('disabled', true)

            $('#desa-kelurahan').html('')
            $('#desa-kelurahan').attr('disabled', true)

            $('#kabupaten-kota').html('');
            $('#kabupaten-kota').attr('disabled', false)
            $('#kabupaten-kota').append('<option value="">- Pilih Salah Satu -</option>')
            $.get("{{ route('listKabupatenKota') }}", {
                idProvinsi: $("#provinsi").val()
            }, function(result) {
                $.each(result, function(key, val) {
                    $('#kabupaten-kota').append(`<option value="${val.id}">${val.nama}</option>`);
                })
            });
        })

        $(document).on('change', '.kabupaten-kota', function() {
            $('#desa-kelurahan').html('')
            $('#desa-kelurahan').attr('disabled', true)

            $('#kecamatan').html('')
            $('#kecamatan').attr('disabled', false)
            $('#kecamatan').append('<option value="">- Pilih Salah Satu -</option>')
            $.get("{{ route('listKecamatan') }}", {
                idKabupatenKota: $("#kabupaten-kota").val()
            }, function(result) {
                $.each(result, function(key, val) {
                    $('#kecamatan').append(`<option value="${val.id}">${val.nama}</option>`);
                })
            });
        })

        $(document).on('change', '.kecamatan', function() {
            $('#desa-kelurahan').html('');
            $('#desa-kelurahan').attr('disabled', false)
            $('#desa-kelurahan').append('<option value="">- Pilih Salah Satu -</option>')
            $.get("{{ route('listDesaKelurahan') }}", {
                idKecamatan: $("#kecamatan").val()
            }, function(result) {
                $.each(result, function(key, val) {
                    $('#desa-kelurahan').append(`<option value="${val.id}">${val.nama}</option>`);
                })
            });
        })
    </script>
@endpush
