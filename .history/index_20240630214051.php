<!DOCTYPE html>
<html lang="en">
<?php require "layout/head.php"; ?>

<body>
    <div id="app" style="background-color: #f4f4f9;">
        <?php require "layout/sidebar.php"; ?>
        <div id="main">
            <header class="mb-3" style="background-color: #3a3f44; color: white; padding: 10px;">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading" style="padding: 0px;" >
                <h3 style>Dashboard </h3>
            </div>
            <div class="page-content" style="padding: 0px;">
                <section class="row">
                    <div class="col-12">
                        <div class="card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="card-header" style="background-color: #007bff; color: white; border-radius: 10px 10px 0 0;">
                                <h4>Sistem Pendukung Keputusan Manajer IT Terbaik</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body" style="padding: 20px;">
                                    <p class="card-text" style="color: #333;">
                                        <b>Metode Simple Additive Weighting (SAW) sering juga dikenal istilah metode
                                            penjumlahan terbobot. Konsep dasar metode SAW adalah mencari penjumlahan
                                            terbobot dari rating kinerja pada setiap alternatif pada semua atribut
                                            (Fishburn 1967). SAW dapat dianggap sebagai cara yang paling mudah dan
                                            intuitif untuk menangani masalah Multiple Criteria Decision-Making MCDM,
                                            karena fungsi linear additive dapat mewakili preferensi pembuat keputusan
                                            (Decision-Making, DM). Hal tersebut dapat dibenarkan, namun, hanya ketika
                                            asumsi preference independence (Keeney & Raiffa 1976) atau preference
                                            separability (Gorman 1968) terpenuhi.
                                    </p>
                                    <hr>
                                    <p class="card-text" style="color: #333;">
                                        Langkah Penyelesaian Simple Additive Weighting (SAW) adalah sebagai berikut:
                                    </p>
                                    <ol type="1" style="color: #333; padding-left: 20px;">
                                        <li>Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan
                                            keputusan, yaitu Ci.</li>
                                        <li>Menentukan rating kecocokan setiap alternatif pada setiap kriteria (X).</li>
                                        <li>Membuat matriks keputusan berdasarkan kriteria (Ci), kemudian melakukan
                                            normalisasi matriks berdasarkan persamaan yang disesuaikan dengan jenis
                                            atribut (atribut keuntungan ataupun atribut biaya) sehingga diperoleh
                                            matriks ternormalisasi R.</li>
                                        <li>Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari
                                            perkalian matriks ternormalisasi R dengan vektor bobot sehingga
                                            diperoleh nilai terbesar yang dipilih sebagai alternatif terbaik (Ai)sebagai
                                            solusi.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php require "layout/footer.php"; ?>
        </div>
    </div>
    <?php require "layout/js.php"; ?>
</body>

</html>
