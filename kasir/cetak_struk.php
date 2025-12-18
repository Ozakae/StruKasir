<?php
$kasir = $_POST['kasir'] ?? 'Admin';
$items = $_POST['item'] ?? [];
$hargas = $_POST['harga'] ?? [];
$jumlah = $_POST['jumlah'] ?? [];
$total_bayar = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk_Kebab_FineShyt</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div id="struk-area">
    <div class="text-center">
        <p class="brand">KEBAB FINESHYT</p>
        <small>Cita Rasa BonaPetit</small><br>
        <small>Jl. Raya Merayakan No. 67, Surabaya</small>
    </div>

    <div class="divider-bold"></div>
    
    <table style="font-size: 12px; margin-bottom: 5px;">
        <tr>
            <td>Kasir  :  <?php echo htmlspecialchars($kasir); ?></td>
        </tr>
        <tr>
            <td>Tanggal : <?php echo date("d/m/Y H:i:s"); ?></td>
        </tr>
    </table>

    <div class="divider-thin"></div>
    
    <table>
        <thead>
            <tr>
                <th class="col-item" style="text-align: left;">Item</th>
                <th class="col-jumlah">Jumlah</th>
                <th class="col-total">Total</th>
            </tr>
        </thead>
    </table>
    <div class="divider-thin"></div>

    <table>
        <tbody>
            <?php
            for ($i = 0; $i < count($items); $i++) {
                if(!empty($items[$i])){
                    $subtotal = $hargas[$i] * $jumlah[$i];
                    $total_bayar += $subtotal;
                    echo "<tr>";
                    echo "<td class='col-item'>" . strtoupper($items[$i]) . "</td>";
                    echo "<td class='col-jumlah'>" . $jumlah[$i] . "</td>";
                    echo "<td class='col-total'>" . number_format($subtotal) . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

    <div class="divider-thin"></div>
    
    <table>
        <tr style="font-weight: bold; font-size: 15px;">
            <td style="width: 50%;">TOTAL BAYAR</td>
            <td class="text-right">Rp <?php echo number_format($total_bayar); ?></td>
        </tr>
    </table>

    <div class="divider-bold"></div>

    <div class="text-center footer-msg">
        ========================================<br>
        Terima Kasih Atas Kunjungan Anda<br>
        Makasih dah beli kebabfineshyt~<br>
        Balik lagi yh 😘<br>
        ========================================<br>
        <small>fineshyt.com | @kebabfineshyt</small>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>