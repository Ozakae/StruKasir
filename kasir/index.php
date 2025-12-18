<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="bg-light">
    <div class="container mt-5 mb-5">
        <div class="text-center mb-4">
            <h1 style="font-weight: 900; color: #FF7518; text-shadow: 2px 2px #3E1F00;">KEBAB FINESHYT😘</h1>
            <p class="badge bg-dark">PROGRAM KASIR</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h5 class="mb-0">INPUT PESANAN BARU</h5>
                    </div>
                    <div class="card-body bg-white">
                        <form action="cetak_struk.php" method="POST" target="_blank">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="fw-bold">Nama Kasir / Admin</label>
                                    <input type="text" name="kasir" class="form-control" placeholder="Masukkan nama..."
                                        required>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover" id="tabelPesanan">
                                    <thead>
                                        <tr>
                                            <th>NAMA MENU</th>
                                            <th>HARGA (RP)</th>
                                            <th>JUMLAH</th>
                                            <th class="text-center">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="item[]" class="form-control"
                                                    placeholder="Kebab Ireng" required></td>
                                            <td><input type="number" name="harga[]" class="form-control"
                                                    placeholder="10000" required></td>
                                            <td><input type="number" name="jumlah[]" class="form-control"
                                                    placeholder="1" required></td>
                                            <td class="text-center"><button type="button" class="btn btn-danger btn-sm"
                                                    onclick="hapusBaris(this)">X</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-between mt-3">
                                <button type="button" class="btn btn-info" onclick="tambahBaris()">+ Tambah Menu
                                    Lain</button>
                                <button type="submit" class="btn btn-success px-5">PROSES & PRINT STRUK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>