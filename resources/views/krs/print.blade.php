<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak KRS Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @media print {
            body { -webkit-print-color-adjust: exact; }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header d-flex align-items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 100px; margin-right: 15px;">
                <div class="text-center w-100">
                    <h5 class="mb-0">STMIK MARDIRA INDONESIA</h5>
                    <p class="mb-0 small">Jl. Soekarno Hatta No.211, Situsaeur, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat, 40233</p>
                    <p class="mb-0 small">Website: stmik-mi.ac.id / e-Mail: info@stmik-mi.ac.id / Telepon: 022 - 5233428</p>
                </div>
            </div>

            <!-- Body -->
            <div class="modal-body">
                <!-- Student Information -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 sm-3">
                            <p><strong>Nama Mahasiswa:</strong> {{ $krs->first()->mahasiswa->nama }}</p>
                            <p><strong>NIM:</strong> {{ $nim }}</p>
                            <p><strong>Prodi:</strong> {{ $krs->first()->mahasiswa->prodi }}</p>
                        </div>
                        <div class="col-md-6 sm-3">
                            <p><strong>Semester:</strong> {{ $krs->first()->mahasiswa->semester }}</p>
                            <p><strong>Jumlah SKS yang Diambil:</strong> {{ $krs->sum('sks') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="mt-3">
                    <h5>Mata Kuliah yang Ditempuh, Antara Lain:</h5>
                    <table class="table table-sm table-bordered" style="font-size: 14px;">
                        <thead class="thead table-active">
                            <tr>
                                <th style="width: 5%;">No</th>
                                <th style="width: 15%;">Kode MK</th>
                                <th style="width: 35%;">Mata Kuliah</th>
                                <th class="text-center" style="width: 7%;">SKS</th>
                                <th style="width: 10%;">Kelas</th>
                                <th style="width: 25%;">Dosen Pengampu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($krs as $index => $entry)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $entry->kode_mk }}</td>
                                    <td>{{ $entry->mataKuliah->mata_kuliah }}</td>
                                    <td>{{ $entry->sks }}</td>
                                    <td>{{ $entry->kelas }}</td>
                                    <td>{{ $entry->dosen_pengampu }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Footer -->
                <div class="mt-4">
                    <div class="text-left">
                        <p><strong>Bandung, {{ date('d F Y') }}</strong></p>
                        <p><strong>Mahasiswa:</strong> {{ $krs->first()->mahasiswa->nama }}</p>
                    </div>
                    <p><strong>Pembimbing Akademik:</strong> ________________________________</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>
