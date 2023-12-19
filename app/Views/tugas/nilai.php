<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h2 class="mb-4">Nilai</h2>

    <div class="row">
        <div class="col-4 bg-secondary p-4">
            <form id="formPenghitungan">
                <div class="mb-3">
                    <label for="inputNilai" class="form-label">Nilai</label>
                    <input type="number" class="form-control" id="inputNilai" />
                </div>

                <button type="button" class="btn btn-primary" onclick="hitung()">Kirim</button>
            </form>
        </div>
        <div class="col-sm mx-5 bg-dark text-white p-4">
            <h3>Nilai :</h3>
            <div id="hasilPenghitungan"></div>
        </div>
    </div>
</div>

<script>
    function hitung() {
        var nilai = parseInt(document.getElementById("inputNilai").value);

        var hasil = "<br/>";
        if (nilai <= 20) {
            hasil += "Nilai : " + nilai + "<br/>";
            hasil += "Nilai Kamu E " + "<br/><br/>";
        } else if (nilai <= 30) {
            hasil += "Nilai : " + nilai + "<br/>";
            hasil += "Nilai Kamu DE " + "<br/><br/>";
        } else if (nilai <= 40) {
            hasil += "Nilai : " + nilai + "<br/>";
            hasil += "Nilai Kamu D " + "<br/><br/>";
        } else if (nilai <= 50) {
            hasil += "Nilai : " + nilai + "<br/>";
            hasil += "Nilai Kamu DC " + "<br/><br/>";
        } else if (nilai <= 60) {
            hasil += "Nilai : " + nilai + "<br/>";
            hasil += "Nilai Kamu C " + "<br/><br/>";
        } else if (nilai <= 70) {
            hasil += "Nilai : " + nilai + "<br/>";
            hasil += "Nilai Kamu BC " + "<br/><br/>";
        } else if (nilai <= 80) {
            hasil += "Nilai : " + nilai + "<br/>";
            hasil += "Nilai Kamu B " + "<br/><br/>";
        } else if (nilai <= 90) {
            hasil += "Nilai : " + nilai + "<br/>";
            hasil += "Nilai Kamu AB " + "<br/><br/>";
        } else {
            hasil += "Nilai : " + nilai + "<br/>";
            hasil += "Nilai Kamu A " + "<br/><br/>";
        }

        document.getElementById("hasilPenghitungan").innerHTML = hasil;
    }
</script>

<?= $this->endSection(); ?>