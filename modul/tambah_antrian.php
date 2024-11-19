<?php
include '../lib/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nama_pasien = $_POST['nama_pasien'];
$nomor_antrian = $_POST['nomor_antrian'];
$waktu_kedatangan = $_POST['waktu_kedatangan'];
$sql = "INSERT INTO antrian (nama_pasien, nomor_antrian,
waktu_kedatangan) VALUES (:nama_pasien, :nomor_antrian,
:waktu_kedatangan)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nama_pasien', $nama_pasien);
$stmt->bindParam(':nomor_antrian', $nomor_antrian);
$stmt->bindParam(':waktu_kedatangan', $waktu_kedatangan);
if ($stmt->execute()) {
echo "Data antrian berhasil ditambahkan!";
} else {
echo "Error: Gagal menambahkan data.";
}
}
?>
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<section class=" py-1 bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
    <div class="rounded-t bg-white mb-0 px-6 py-6">
      <div class="text-center flex justify-between">
        <h6 class="text-blueGray-700 text-xl font-bold">
          Daftar Disini !!
        </h6>
        <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="submit">
          <a href="http://localhost/APKATRIANRS/"> Kembali</a>
        </button>
      </div>
    </div>
    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
      <form method="POST">
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
         Masukan Data Diri
        </h6>
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Nama Pasien
              </label>
              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="nama_pasien" required>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Nomor Antrian
              </label>
              <input type="number" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="nomor_antrian" required>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Waktu  Kedatangan
              </label>
              <input type="datetime-local" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="waktu_kedatangan" required>
            </div>
          </div>
        </div>
    </div>
    
    <hr class="mt-6 border-b-1 border-blueGray-300">
    <button type="submit" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" >
    submit
  </button>
      </form>
    </div>
  </div>
</div>
</section>