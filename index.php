<?php
$donators = array(
    array(
        "nama" => "Asari",
        "kategori" => "Uang",
        "nominal" => 10000000
    ),
    array(
        "nama" => "Siti",
        "kategori" => "Barang",
        "nominal" => "Emas"
    ),
    array(
        "nama" => "Udin",
        "kategori" => "Uang",
        "nominal" => 750000
    )
);
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="img/logo-wk.png" class="logo-wikrama">
            <p>SMK WIKRAMA BOGOR</p>
        </div>
        <div class="nav-links">
            <a href="#" class="active">Beranda</a>
            <a href="#" data-target=".cara-wakaf-section">Cara Wakaf</a>
            <a href="#" data-target=".data-wakaf-section">Data Wakaf</a>
            <a href="#" data-target=".gallery-section">Gallery</a>
            <a href="https://smkwikrama.sch.id/">Web Wikrama</a>
        </div>
    </div>

    <main>
        <header>
            <div class="header-text">
                <p>Masjid Besar SMK Wikrama Bogor</p>
                <h3>Mari <span>Tingkatkan Keimanan</span> Masyarakat SMK Wikrama Bogor.</h3>

                <a href="404.html"><button class="donasi-button">Beri Bantuan Shodaqoh</button></a>
            </div>

            <div class="header-image">
                <img src="img/masjid-header.png" alt="gambar masjid" class="header-img">

                <div class="cards-container">
                    <div class="card1">
                        <img src="img/leaf.png" alt="leafIcon">
                        <p>Lingkungan Terjaga.</p>
                    </div>
                    <div class="card2">
                        <img src="img/arowAction.png" alt="Arrow">
                        <P>Kapasitas Besar.</P>
                    </div>
                    <div class="card3">
                        <img src="img/bookmark.svg" alt="bookmark">
                        <p>Al-Qur'an Gratis.</p>
                    </div>
                </div>
            </div>

        </header>

        <div class="statusKeuangan">
            <section class="dana-status-container">
                <div class="totalTarget">
                    <p>Total Target Dana</p>
                    <h1>Rp. 40,000.000
                    </h1>
                </div>
                <div class="TotalDanaTerkumpul">
                    <p>Total Dana Terkumpul</p>
                    <h1>Rp.10.0000.000</h1>
                </div>
                <div class="totalDonatur">
                    <p>Total Donatur</p>
                    <h1>28</h1>
                </div>
            </section>
            <hr>
            <div class="progress-bar-container">
                <div class="progress-bar" style="width: 25%"></div>
                <div class="progress-bar-text">
                    <p>30,0% <span class="progress-bar-text-small">Terpenuhi</span></p>
                </div>
            </div>
            <div class="running-text">
                <marquee behavior="scroll" scrollamount="13" direction="right">
                    <?php $a = 0; ?>
                    <?php do { ?>
                        <span class="donator-name">
                            <?php echo $donators[$a]["nama"]; ?> -
                        </span>
                        <span class="donator-kategori">
                            <?php echo $donators[$a]["kategori"]; ?> :
                        </span>
                        <span class="donator-nominal-barang">
                            <?php
                            if (is_numeric($donators[$a]["nominal"])) {
                                echo "Rp." . number_format($donators[$a]["nominal"], 0, ',', '.');
                            } else {
                                echo $donators[$a]["nominal"];
                            } ?>
                        </span>
                        <?php $a++;
                    } while ($a < count($donators)) ?>
                </marquee>
            </div>
        </div>

        <div class="banner-section-container">
            <div class="image-indicator">
                <div class="indicator"></div>
                <div class="indicator"></div>
                <div class="indicator"></div>
            </div>
            <div class="banner-button">
                <div class="previous" onclick="changeImage(-1)">
                    <img src="img/arrowleft.png">
                </div>
                <div class="next" onclick="changeImage(1)">
                    <img src="img/arrowright.png">
                </div>
            </div>
        </div>
        <div class="image-container">
            <img id="image-container" src="img/literasiJumat.JPG" alt="Image">
        </div>

        <div class="frame-1878">
            <div class="frame-18785">
                <div class="manfaat-wakaf-infaq-shodaqoh bevietnampro-bold-white-64px">
                    <span class="bevietnampro-bold-bay-of-many-64px">Manfaat</span>
                    <span class="bevietnampro-bold-eerie-black-64px">Wakaf, infaq shodaqoh.</span>
                </div>
                <p class="berikut-adalah-beber berikut-adalah-1 bevietnampro-medium-gray-30px">Berikut Adalah Beberapa
                    Keutamaan Wakaf, Infaq Shodaqoh Yang Akan Anda Dapatkan.</p>
            </div>
            <div class="frame-18784">
                <div class="frame-18783">
                    <div class="frame-1878-1">
                        <div class="frame-1877">
                            <img class="outline-like-heart" src="img/outline-like-heart.png"
                                alt="Outline / Like / Heart " />
                            <div class="frame-18567">
                                <img class="bold" src="img/bold-like-heart.svg" alt="Bold / Like / Heart " />
                            </div>
                            <div class="frame-18571">
                                <div class="menjadikan-hati-lebih-tenang">Menjadikan hati lebih tenang</div>
                                <p class="kami-memberikan-harg bevietnampro-medium-mountain-mist-23-4px">
                                    Kami memberikan harga yang terbaik dibandingkan dengan Kompetitor kami
                                </p>
                            </div>
                        </div>
                        <div class="frame-1877-1">
                            <div class="frame-18567">
                                <img class="bold" src="img/bold-money-verified-check.svg"
                                    alt="Bold / Money / Verified Check" />
                            </div>
                            <div class="frame-18571">
                                <div class="terbukanya-pintu-rezeki">Terbukanya pintu rezeki</div>
                                <p class="allah-swt-akan-membu bevietnampro-medium-mountain-mist-23-4px">
                                    <span class="bevietnampro-medium-mountain-mist-23-4px">Allah SWT akan membuka pintu
                                        rezeki dari arah yang tidak dikira sebelumnya.
                                    </span>
                                </p>
                            </div>
                            <img class="outline-money-verified-check" src="img/outline-money-verified-check.png"
                                alt="Outline / Money / Verified Check " />
                        </div>
                    </div>
                    <div class="frame-1878-1">
                        <div class="frame-1877">
                            <div class="frame-18567">
                                <img class="bold" src="img/bold-security-shield-check.svg"
                                    alt="Bold / Security / bold-security-shield-check" />
                            </div>
                            <div class="frame-18571">
                                <div class="menjauhkan-dari-bahaya bevietnampro-bold-eerie-black-31-2px">Menjauhkan
                                    Dari Bahaya</div>
                                <p class="rasulullah-saw-perna bevietnampro-medium-mountain-mist-23-4px">Rasulullah SAW
                                    pernah bersabda: "Bersegeralah untuk bersedekah, karena musibah dan bencana tidak
                                    bisa mendahului sedekah."
                                </p>
                            </div>
                            <img class="outline-security-shield-check" src="img/outline-security-shield-check.png"
                                alt="Outine / Security / Shield Check">
                        </div>
                        <div class="frame-1877-1">
                            <div class="frame-18567">
                                <img class="bold" src="img/bold-weather-stars.svg" alt="Bold / Weather / Stars" />
                            </div>
                            <div class="frame-18571">
                                <div class="pahala-yang-tidak-terputus bevietnampro-bold-eerie-black-31-2px">Pahala Yang
                                    Tak Terputus</div>
                                <p class="ini-akan-menolong-ki bevietnampro-medium-mountain-mist-23-4px">
                                    Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api
                                    neraka.
                                </p>
                            </div>
                            <img class="outline-weather-stars" src="img/outline-weather-stars.png"
                                alt="Outline / Weather / Starts" />
                        </div>
                    </div>
                </div>
                <img class="handHold" src="img/handHold.png" alt="handHold" />
            </div>
        </div>
        <div class="frame-18785 cara-wakaf-section">
            <p class="name-1 bevietnampro-bold-white-64px">
                <span class="bevietnampro-bold-bay-of-many-64px">Cara Melakukan</span>
                <span class="bevietnampro-bold-eerie-black-64px">Wakaf, Infaq shodaqoh.</span>
            </p>
            <p class="berikut-adalah bevietnampro-medium-gray-30px">Berikut Adalah Cara Melakukan Wakaf, Infaq Shodaqoh
                Untuk membantu Pembangunan Masjid Besar SMK Bogor</p>
        </div>
        <div class="frame-18787">
            <div class="frame-1">
                <div class="frame-57">
                    <div class="frame-563">
                        <div class="number bevietnampro-semi-bold-bay-of-many-32px">01</div>
                        <div class="frame-569">
                            <div class="isi-form-data-diri bevietnampro-bold-eerie-black-37px">Isi Form Data Diri</div>
                            <p class="isikan-form-pengisia bevietnampro-medium-gray-23-4px">Isikan form pengisian yang
                                disediakan di form data diri, isikan dengan data diri anda dengan teliti.</p>
                        </div>
                    </div>
                </div>
                <div class="frame-57">
                    <div class="frame-563">
                        <div class="number-4 bevietnampro-semi-bold-bay-of-many-32px">03</div>
                        <div class="frame-569">
                            <div class="upload-bukti-pembayaran bevietnampro-bold-eerie-black-37px">Upload Bukti
                                Pembayaran</div>
                            <p class="pilih-metode-pembaya bevietnampro-medium-gray-23-4px">Pilih metode pembayaran dan
                                upload bukti pembayarannya.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="frame-1">
                <div class="frame-57">
                    <div class="frame-563">
                        <div class="number-4 bevietnampro-semi-bold-bay-of-many-32px">02</div>
                        <div class="frame-569">
                            <div class="isikan-nominal-shodaqoh isikan-nominal bevietnampro-bold-eerie-black-37px">
                                Isikan Nominal Shodaqoh</div>
                            <p class="isikan-nominal-yang isikan-nominal bevietnampro-medium-gray-23-4px">Isikan nominal
                                yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan
                                apapun.</p>
                        </div>
                    </div>
                </div>
                <div class="frame-57">
                    <div class="frame-563">
                        <div class="number-4 bevietnampro-semi-bold-bay-of-many-32px">04</div>
                        <div class="frame-569">
                            <div class="verifikasi-pembayaran bevietnampro-bold-eerie-black-37px">Verifikasi Pembayaran
                            </div>
                            <p class="pembayaran-anda-akan bevietnampro-medium-gray-23-4px">Pembayaran anda akan di
                                verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="frame-1878 data-wakaf-section">
            <div class="frame-18785">
                <p class="dana-donatur-wakaf-infaq-shodaqoh bevietnampro-bold-white-64px">
                    <span class="bevietnampro-bold-bay-of-many-64px">Dana dontatur</span>
                    <span class="bevietnampro-bold-eerie-black-64px"> Wakaf, infaq shodaqoh.</span>
                </p>
                <p class="berikut-adalah bevietnampro-medium-gray-30px">Berikut Adalah Data Donatur Wakaf, Infaq
                    Shodaqoh Untuk Masjid Besar SMK Wikrama Bogor</p>
            </div>
            <div class="table">
                <div class="column">
                    <div class="table-header-cell table-header-2">
                        <div class="table-header table-1">
                            <div class="text bevietnampro-medium-gray-14px">Nama Donatur</div>
                        </div>
                    </div>
                    <div class="table-cell table-1 talansKorsGaard">
                        <div class="text-and-supporting-text">
                            <div class="text-1 text-6 bevietnampro-medium-eerie-black-14px">TalanKorsgaard</div>
                        </div>
                    </div>
                    <div class="table-cell table-1">
                        <div class="text-and-supporting-text">
                            <div class="text bevietnampro-medium-eerie-black-14px">Cristofer culhane</div>
                        </div>
                    </div>
                    <div class="table-cell table-1">
                        <div class="text-and-supporting-text">
                            <div class="text-1 text-6 bevietnampro-medium-eerie-black-14px">Giana Saris</div>
                        </div>
                    </div>
                    <div class="table-cell table-1">
                        <div class="text-and-supporting-text">
                            <div class="text bevietnampro-medium-eerie-black-14px">Craig Septimus</div>
                        </div>
                    </div>
                    <div class="table-cell table-1">
                        <div class="text-and-supporting-text">
                            <div class="supporting-text">Lydia Westervelt</div>
                        </div>
                    </div>
                    <div class="table-cell table-1">
                        <div class="text-and-supporting-text">
                            <div class="text bevietnampro-medium-eerie-black-14px">Ashlynn Aminoff</div>
                        </div>
                    </div>
                    <div class="table-cell table-1">
                        <div class="text-and-supporting-text">
                            <div class="text-1 text-6 bevietnampro-medium-eerie-black-14px">Leo Mango</div>
                        </div>
                    </div>
                    <div class="table-cell table-1">
                        <div class="text-and-supporting-text">
                            <div class="text bevietnampro-medium-eerie-black-14px">Erin Bator</div>
                        </div>
                    </div>
                    <div class="table-cell table-1">
                        <div class="text-and-supporting-text">
                            <div class="text bevietnampro-medium-eerie-black-14px">Makenna Herwitz</div>
                        </div>
                    </div>
                    <div class="table-cell table-1">
                        <div class="text-and-supporting-text">
                            <div class="text-1 text-6 bevietnampro-medium-eerie-black-14px">Miracle Baptista</div>
                        </div>
                    </div>
                </div>
                <div class="column-1 column-7">
                    <div class="table-header-cell table-header-2">
                        <div class="table-header table-1">
                            <div class="text bevietnampro-medium-gray-14px">Donatur ID</div>
                        </div>
                    </div>
                    <div class="table-cell-1 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-medium-eerie-black-14px">1938039103</div>
                    </div>
                    <div class="table-cell-1 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-medium-eerie-black-14px">1938039103</div>
                    </div>
                    <div class="table-cell-1 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-medium-eerie-black-14px">1938039103</div>
                    </div>
                    <div class="table-cell-1 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-medium-eerie-black-14px">1938039103</div>
                    </div>
                    <div class="table-cell-1 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-medium-eerie-black-14px">1938039103</div>
                    </div>
                    <div class="table-cell-1 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-medium-eerie-black-14px">1938039103</div>
                    </div>
                    <div class="table-cell-1 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-medium-eerie-black-14px">1938039103</div>
                    </div>
                    <div class="table-cell-1 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-medium-eerie-black-14px">1938039103</div>
                    </div>
                    <div class="table-cell-1 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-medium-eerie-black-14px">1938039103</div>
                    </div>
                    <div class="table-cell-1 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-medium-eerie-black-14px">1938039103</div>
                    </div>
                </div>
                <div class="column-2 column-7">
                    <div class="table-header-cell table-header-2">
                        <div class="table-header table-1">
                            <div class="text bevietnampro-medium-gray-14px">Paket</div>
                        </div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Paket 1</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Paket 1</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Paket 1</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Paket 1</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Paket 1</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Paket 2</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Paket 2</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Paket 2</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Paket 2</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Paket 2</div>
                    </div>
                </div>
                <div class="column-3 column-7">
                    <div class="table-header-cell table-header-2">
                        <div class="table-header table-1">
                            <div class="text bevietnampro-medium-gray-14px">Kategori</div>
                        </div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Barang</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Barang</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Barang</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Barang</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Barang</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Barang</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Barang</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Barang</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Barang</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-2 text-6 bevietnampro-normal-gray-14px">Barang</div>
                    </div>
                </div>
                <div class="column-4 column-7">
                    <div class="table-header-cell table-header-2">
                        <div class="table-header-1 table-header-2">
                            <div class="text bevietnampro-medium-gray-14px">Nominal/Barang</div>
                        </div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-3 text-6 bevietnampro-normal-gray-14px">Emas</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-3 text-6 bevietnampro-normal-gray-14px">Rp. 2,000.000</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-3 text-6 bevietnampro-normal-gray-14px">Rp. 2,000.000</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-3 text-6 bevietnampro-normal-gray-14px">Rp. 2,000.000</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-3 text-6 bevietnampro-normal-gray-14px">Rp. 2,000.000</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-3 text-6 bevietnampro-normal-gray-14px">Rp. 2,000.000</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-3 text-6 bevietnampro-normal-gray-14px">Rp. 2,000.000</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-3 text-6 bevietnampro-normal-gray-14px">Rp. 2,000.000</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-3 text-6 bevietnampro-normal-gray-14px">Rp. 2,000.000</div>
                    </div>
                    <div class="table-cell-2 table-cell-4">
                        <div class="text-3 text-6 bevietnampro-normal-gray-14px">Rp. 2,000.000</div>
                    </div>
                </div>
                <div class="column-5 column-7">
                    <div class="column-6 column-7">
                        <div class="table-header-cell table-header-2">
                            <div class="table-header table-1">
                                <div class="text-5 text-6 hidden">Aksi</div>
                            </div>
                        </div>
                    </div>
                    <div class="table-cell-3 table-cell-4">
                        <div class="dropdown">
                            <img class="more-vertical" src="img/more-vertical.svg" alt="more-vertical" />
                        </div>
                    </div>
                    <div class="table-cell-3 table-cell-4">
                        <div class="dropdown-10">
                            <img class="more-vertical" src="img/more-vertical.svg" alt="more-vertical" />
                        </div>
                    </div>
                    <div class="table-cell-3 table-cell-4">
                        <div class="dropdown-10">
                            <img class="more-vertical" src="img/more-vertical-2.svg" alt="more-vertical" />
                        </div>
                    </div>
                    <div class="table-cell-3 table-cell-4">
                        <div class="dropdown-10">
                            <img class="more-vertical" src="img/more-vertical-2.svg" alt="more-vertical" />
                        </div>
                    </div>
                    <div class="table-cell-3 table-cell-4">
                        <div class="dropdown-10">
                            <img class="more-vertical" src="img/more-vertical-2.svg" alt="more-vertical" />
                        </div>
                    </div>
                    <div class="table-cell-3 table-cell-4">
                        <div class="dropdown-10">
                            <img class="more-vertical" src="img/more-vertical-2.svg" alt="more-vertical" />
                        </div>
                    </div>
                    <div class="table-cell-3 table-cell-4">
                        <div class="dropdown-10">
                            <img class="more-vertical" src="img/more-vertical-2.svg" alt="more-vertical" />
                        </div>
                    </div>
                    <div class="table-cell-3 table-cell-4">
                        <div class="dropdown-10">
                            <img class="more-vertical" src="img/more-vertical-2.svg" alt="more-vertical" />
                        </div>
                    </div>
                    <div class="table-cell-3 table-cell-4">
                        <div class="dropdown-10">
                            <img class="more-vertical" src="img/more-vertical-2.svg" alt="more-vertical" />
                        </div>
                    </div>
                    <div class="table-cell-3 table-cell-4">
                        <div class="dropdown-10">
                            <img class="more-vertical" src="img/more-vertical-2.svg" alt="more-vertical" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="frame-1878 gallery-section">
            <div class="frame-18785">
                <p class="gallery-masjid-besar-smk-wikrama-bogor bevietnampro-bold-white-64px">
                    <span class="bevietnampro-bold-bay-of-many-64px">Gallery</span>
                    <span class="bevietnampro-bold-bay-of-many-64px"> Masjid Besar SMK Wikrama Bogor.</span>
                </p>
                <p class="berikut-adalah-galle berikut-adalah-1 bevietnampro-medium-gray-30px">Berikut Adalah Gallery
                    Masjid Besar SMK Wikrama Bogor.</p>
            </div>
            <div class="frame-18703">
                <div class="frame-18701">
                    <div class="frame-18619"></div>
                    <div class="frame-18620">
                        <div class="group-584"></div>
                    </div>
                    <div class="frame-18621"></div>
                </div>
                <div class="frame-18702">
                    <div class="frame-18616"></div>
                    <div class="group-584-1"></div>
                    <a href="404.html">
                        <div class="frame-18618">
                            <div class="frame-18609"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <div class="footer">
        <div class="frame-18814">
            <div class="frame-18812">
                <div class="frame-558">
                    <img class="unnamed-1-2" src="img/unnamed-1-2.png" alt="unnamed 1" />
                    <div class="smk-wikrama-bogor-1">SMK WIKRAMA BOGOR</div>
                </div>
                <div class="frame-18810">
                    <p class="alamat-jl-raya-wang bevietnampro-bold-white-16px">
                        <span class="span-1 bevietnampro-bold-white-16px">Alamat <br></span>
                        <span class="span-1 bevietnampro-medium-white-16px">Jl. Raya Wangun <br></span>
                        <span class="span-1 bevietnampro-medium-white-16px">Kelurahan Sindangsari <br>Bogor Timur
                            16720</span>
                    </p>
                    <img class="vector" src="img/vector-1.svg" alt="Vector 1">
                    <div class="telepon-0251-824211 bevietnampro-bold-white-16px">
                        <span class="span-1 bevietnampro-bold-white-16px">Telepon <br></span>
                        <span class="span1 bevietnampro-medium-white-16px">0251-8242411 / 082221718035 (Whatsapp)</span>
                    </div>
                    <img class="vector" src="img/vector-1.svg" alt="Vector 2">
                    <img class="frame-18811" src="img/Frame-18811.svg" alt="Frame 18811">
                </div>
            </div>
            <div class="frame-18813">
                <div class="tentang-wikrama bevietnampro-bold-white-16px">Tentang Wikrama</div>
                <div class="flex-container flex">
                    <div class="text-4 text-6 bevietnampro-medium-white-16px">
                        <span class="bevietnampro-medium-white-16px">Sejarah</span>
                    </div>
                    <div class="text-4 text-6 bevietnampro-medium-white-16px">
                        <span class="bevietnampro-medium-white-16px">Peraturan Sekolah</span>
                    </div>
                    <div class="text-4 text-6 bevietnampro-medium-white-16px">
                        <span class="bevietnampro-medium-white-16px">Rencana Strategi</span>
                    </div>
                    <div class="text-4 text-6 bevietnampro-medium-white-16px">
                        <span class="bevietnampro-medium-white-16px">Yayasan</span>
                    </div>
                    <div class="text-4 text-6 bevietnampro-medium-white-16px">
                        <span class="bevietnampro-medium-white-16px">Struktur Organisasi</span>
                    </div>
                    <div class="text-4 text-6 bevietnampro-medium-white-16px">
                        <span class="bevietnampro-medium-white-16px">Cabang</span>
                    </div>
                    <div class="text-4 text-6 bevietnampro-medium-white-16px">
                        <span class="bevietnampro-medium-white-16px">Penghargaan</span>
                    </div>
                    <div class="text-4 text-6 bevietnampro-medium-white-16px">
                        <span class="bevietnampro-medium-white-16px">Kerjasama</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-col flex">
            <div class="kirim-pesan bevietnampro-bold-white-16px">Kirim Pesan</div>
            <div class="overlap-group-2">
                <div class="nama bevietnampro-medium-silver-13px">Nama</div>
            </div>
            <div class="overlap-group-2">
                <div class="email bevietnampro-medium-silver-13px">Email</div>
            </div>
            <div class="overlap-group2">
                <div class="pesan-anda bevietnampro-medium-silver-13px">Pesan Anda</div>
            </div>
            <div class="frame-574-1">
                <div class="submit">Submit</div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p class="copyright-2023-s">Copyright @ 2023 - SMK Wikrama Bogor. All Right Reserved.</p>
    </div>
</body>

</html>
<script>
    var images = ['img/literasiJumat.JPG', 'img/women.jfif', 'img/duha.jfif']; 
    var currentIndex = 0; 

    function changeImage(direction) {
        currentIndex += direction; 
        if (currentIndex < 0) {
            currentIndex = images.length - 1; 
        } else if (currentIndex >= images.length) {
            currentIndex = 0;
        }
        var imageContainer = document.getElementById('image-container');
        imageContainer.src = images[currentIndex];

        updateIndicator(currentIndex);
    }

    function updateIndicator(currentIndex) {
        var indicators = document.getElementsByClassName('indicator');
        for (var i = 0; i < indicators.length; i++) {
            indicators[i].classList.remove('active'); 
        }
        indicators[currentIndex].classList.add('active');
    }

    updateIndicator(currentIndex); 

    $(document).ready(function() {
    $('a[data-target]').on('click', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1000);
    });
});
</script>