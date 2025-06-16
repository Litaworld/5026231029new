<html>
<head>
    <title>Kalkulator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function formvalidation() {
        var nrp = document.getElementById("enerp").value;
        var nama = document.getElementById("nam").value;
        
        if(nrp.length !==10 || isNan(10)) //nrp harus ada isinya 
        {
            Swal.fire({
                title: "Pesan Kesalahan",
                text: "NRP harus 10 digit dan harus angka",
                icon: "error"
                });
            document.getElementById("enerp").focus();
            return false;  
        }

        if(nama.length == 0) //nama harus ada isinya 
        {
            Swal.fire({
                title: "Pesan Kesalahan",
                text: "NAMA HARUS DIISI!!!",
                icon: "no"
                });
            document.getElementById("nam").focus();
            return false;  
        }
        //kalau diubah, returnnya true
    }

</script>
</head>
<body>
<div class="container">
<h3>Form Pendaftaran ISE! 2025</h3>
<form id="formpendaftaran" action="https://google.co.id" method="get" onsubmit="return formvalidation();">
    NRP : 
    <input type="text" id="enerp" class="form-control" placeholder="Silakan isi NRP Anda, 10 digit, 
    harus berupa angka, Tidak boleh kosong!" name="nrp">
    <br>
    Nama : 
    <input type="text" id="nam" class="form-control" placeholder="Silakan isi Nama Lengkap Anda, 
    Tidak boleh kosong!" name="nama">
    <br>
    <input type="submit" class="btn btn-primary" value="Daftar">
</form>
</div>
</body>
</html>