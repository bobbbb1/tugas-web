<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h2 class="mb-4">Kalkulator Kuadrat</h2>

    <div class="row">
        <div class="col-4 bg-secondary p-4">
            <form id="formPenghitungan">
                <div class="mb-3">
                    <label for="inputAngka" class="form-label">Angka Awal</label>
                    <input type="number" class="form-control" id="inputAngka" />
                </div>
                <div class="mb-3">
                    <label for="inputFor" class="form-label">Angka Akhir</label>
                    <input type="number" class="form-control" id="inputFor" />
                </div>
                <div class="mb-3">
                    <label for="inputPangkat" class="form-label">Pangkat</label>
                    <input type="number" class="form-control" id="inputPangkat" />
                </div>

                <button type="button" class="btn btn-primary" onclick="hitung()">Kirim</button>
            </form>
        </div>
        <div class="col-sm mx-5 bg-dark text-white p-4">
            <h3>Hasil :</h3>
            <div id="hasilPenghitungan"></div>
        </div>
    </div>
</div>

<script>
    function hitung() {
        var angkaAwal = parseInt(document.getElementById("inputAngka").value);
        var pengulangan = parseInt(document.getElementById("inputFor").value);
        var pangkat = parseInt(document.getElementById("inputPangkat").value);

        var hasil = "<br/>";
        for (var i = angkaAwal; i < pengulangan + 1; i++) {
            var x = Math.pow(i, pangkat);
            hasil += "Hasil dari " + i + " pangkat " + pangkat + " adalah " + x + "<br/>";
        }

        document.getElementById("hasilPenghitungan").innerHTML = hasil;
    }
</script>

<?= $this->endSection(); ?>