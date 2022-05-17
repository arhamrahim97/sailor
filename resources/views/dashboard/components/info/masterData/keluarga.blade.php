@if (Auth::user()->role != 'admin')
    <div class="col-12 mt-2">
        <div role="alert" class="alert alert-success">
            <ul class="mx-3 mb-0 p-0">
                <li>
                    @if (Auth::user()->role == 'bidan')
                        Menampilkan keseluruhan data dari berbagai lokasi
                    @elseif (Auth::user()->role == 'penyuluh')
                        Menampilkan keseluruhan data dari berbagai lokasi yang sudah divalidasi (Tervalidasi)
                    @endif
                </li>
                <li>
                    Kolom <span class="fw-bold">Aksi:</span>
                    <ul>
                        @if (Auth::user()->role == 'bidan')
                            <li>
                                Dapat melihat <span class="fw-bold">detail</span> data
                            </li>
                            <li>
                                Hanya dapat <span class="fw-bold">menghapus</span> dan <span
                                    class="fw-bold">mengubah</span> data yang
                                telah anda validasi.
                            </li>
                            <li>Tombol <span class="fw-bold">konfirmasi</span> hanya akan muncul
                                ketika ada data baru dilokasi tugas anda yang berstatus "Belum Divalidasi".</li>
                        @elseif (Auth::user()->role == 'penyuluh')
                            <li>
                                Dapat melihat <span class="fw-bold">detail</span> data
                            </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
@endif
