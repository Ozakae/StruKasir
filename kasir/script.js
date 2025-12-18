function tambahBaris() {
    var table = document.getElementById("tabelPesanan").getElementsByTagName('tbody')[0];

    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);

    cell1.innerHTML = '<input type="text" name="item[]" class="form-control" placeholder="Kebab..." required>';

    cell2.innerHTML = '<input type="number" name="harga[]" class="form-control" placeholder="0" required>';

    cell3.innerHTML = '<input type="number" name="jumlah[]" class="form-control" placeholder="0" required>';

    cell4.innerHTML = '<button type="button" class="btn btn-danger btn-sm" onclick="hapusBaris(this)">Hapus</button>';
}

function hapusBaris(btn) {
    var row = btn.parentNode.parentNode;
    var rowCount = document.getElementById("tabelPesanan").rows.length;
    if (rowCount > 2) { 
        row.parentNode.removeChild(row);
    } else {
        alert("Lu belum masukin barang apa apa woi!🤬😡🤬");
    }
}
window.onload = function () {
        const element = document.getElementById('struk-area');
        const opt = {
            margin:       0.5,
            filename:     'Struk_Kebab_<?php echo date("Ymd_His"); ?>.pdf',
            image:        { type: 'jpeg', quality: 0.98 },
            html2canvas:  { scale: 3 },
            jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
        };

        html2pdf().set(opt).from(element).save().then(() => {
            setTimeout(() => { window.close(); }, 12000);
        });
    };