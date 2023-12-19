<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h2 class="mb-4">Login</h2>

    <div class="row">
        <div class="col-4 bg-secondary p-4">
            <form id="formLogin" onsubmit="event.preventDefault(); login();">
                <div class="mb-3">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="inputNama" />
                </div>
                <div class="mb-3">
                    <label for="inputDivisi" class="form-label">Divisi</label>
                    <input type="text" class="form-control" id="inputDivisi" />
                </div>
                <div class="mb-3">
                    <label for="inputNpm" class="form-label">NPM</label>
                    <input type="text" class="form-control" id="inputNpm" />
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
                <button type="button" class="btn btn-primary opacity-0" onclick="regist()">Registrasi</button>
                <button type="button" class="btn btn-primary" onclick="list()">Lihat</button>
            </form>
            <form id="formReg" style="display: none;" onsubmit="event.preventDefault(); reg();">
                <h3>Registrasi</h3>
                <div class="mb-3">
                    <label for="addNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="addNama" required />
                </div>
                <div class="mb-3">
                    <label for="addDivisi" class="form-label">Divisi</label>
                    <input type="text" class="form-control" id="addDivisi" required />
                </div>
                <div class="mb-3">
                    <label for="addNpm" class="form-label">NPM</label>
                    <input type="text" class="form-control" id="addNpm" required />
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <form id="formLogout" style="display: none;">
                <button type="button" class="btn btn-primary" onclick="logout()">Logout</button>
            </form>
        </div>
        <div class="col-sm mx-5 bg-dark text-white p-4">
            <div id="hasilLogin"></div>
        </div>
    </div>
</div>

<script>
    var data = [{
            nama: "bobby",
            divisi: "media",
            npm: "21"
        },
        // tambah user 
    ];

    function list() {
        var list = "<br/><h4>User Terdaftar</h4><br/>";
        for (var i = 0; i < data.length; i++) {
            list += " - " + data[i].nama + "<br/>";
        }
        document.getElementById("hasilLogin").innerHTML = list;
    }

    function login() {
        var nama = (document.getElementById("inputNama").value);
        var divisi = (document.getElementById("inputDivisi").value);
        var npm = (document.getElementById("inputNpm").value);

        var valid = false;
        for (var i = 0; i < data.length; i++) {
            if (nama === data[i].nama && divisi === data[i].divisi && npm === data[i].npm) {
                valid = true;
                break;
            }
        }

        var hasil = "<br/>";
        if (!valid) {
            hasil += "Informasi Salah! Harap masukkan informasi yang benar. " + "<br/>";
        } else {
            hasil += "<h4>Selamat Datang!</h4>" + "<br/><br/>";
            hasil += "Nama : " + nama + "<br/>";
            hasil += "Divisi : " + divisi + "<br/>";
            hasil += "NPM    : " + npm + "<br/>";

            document.getElementById("formLogin").style.display = 'none';
            document.getElementById("formLogout").style.display = 'block';
        }

        document.getElementById("hasilLogin").innerHTML = hasil;
    }

    function logout() {
        var hasil = "<br/>" + "<h4>Terima Kasih.</h4>";
        document.getElementById("hasilLogin").innerHTML = hasil;

        document.getElementById("formLogin").style.display = 'block';
        document.getElementById("formLogout").style.display = 'none';
    }

    function regist() {
        document.getElementById("formLogin").style.display = 'none';
        document.getElementById("formLogout").style.display = 'none';
        document.getElementById("formReg").style.display = 'block';
    }

    function reg() {
        var addNama = document.getElementById("addNama").value;
        var addDivisi = document.getElementById("addDivisi").value;
        var addNpm = document.getElementById("addNpm").value;

        // push
        data.push({
            nama: addNama,
            divisi: addDivisi,
            npm: addNpm
        });

        var addResult = "<br/><h4>Pendaftaran Berhasil!</h4><br/>";
        addResult += "Nama : " + addNama + "<br/>";
        addResult += "Divisi : " + addDivisi + "<br/>";
        addResult += "NPM    : " + addNpm + "<br/>";

        document.getElementById("hasilLogin").innerHTML = addResult;

        document.getElementById("formLogin").style.display = 'block';
        document.getElementById("formLogout").style.display = 'none';
        document.getElementById("formReg").style.display = 'none';

        document.getElementById("addNama").value = "";
        document.getElementById("addDivisi").value = "";
        document.getElementById("addNpm").value = "";
    }
</script>

<?= $this->endSection(); ?>