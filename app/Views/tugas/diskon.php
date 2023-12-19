<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h2 class="mb-4">Diskon sampai 20%</h2>
    <ul class="text-secondary">
        <li>Dapatkan diskon 10% dengan belanja diatas 100rb</li>
        <li>Dapatkan diskon 20% dengan belanja diatas 1jt</li>
    </ul>

    <div class="row">
        <div class="col-4 bg-secondary p-4">
            <form id="formPenghitungan">
                <div class="mb-3">
                    <label for="inputTotal" class="form-label">Total Belanja</label>
                    <input type="number" class="form-control" id="inputTotal" />
                </div>

                <button type="button" class="btn btn-primary" onclick="hitung()">Kirim</button>
            </form>
        </div>
        <div class="col-sm mx-5 bg-dark text-white p-4">
            <h3>Total :</h3>
            <div id="hasilPenghitungan"></div>
        </div>
    </div>
</div>

<script>
    function hitung() {
        var totalAwal = parseInt(document.getElementById("inputTotal").value);

        var hasil = "<br/>";
        if (totalAwal <= 100000) {
            var i = totalAwal;
            var total = parseInt(i);
            hasil += "Belanja diatas 100rb dapat diskon 10% " + "<br/>";
        } else if (totalAwal > 100000 && totalAwal <= 1000000) {
            var i = totalAwal;
            var total = parseInt(i - i * 0.1);
            hasil += "Anda mendapat diskon 10% " + "<br/>";
            hasil += "Total : " + "<br/>";
            hasil += "<s>Rp." + totalAwal + "</s><br/>";
            hasil += "Rp." + total + "<br/>";
        } else {
            var i = totalAwal;
            var total = parseInt(i - i * 0.2);
            hasil += "Anda mendapat diskon 20% " + "<br/>";
            hasil += "Total : " + "<br/>";
            hasil += "<s>Rp." + totalAwal + "</s><br/>";
            hasil += "Rp." + total + "<br/>";
        }

        document.getElementById("hasilPenghitungan").innerHTML = hasil;
    }
</script>

<?= $this->endSection(); ?>