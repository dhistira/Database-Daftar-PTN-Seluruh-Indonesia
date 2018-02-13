//FORMAT PHP UNTUK INSERT KE DB

<?php 
$servername = ""; // servername. Default localhost
$username = ""; // db username
$password = ""; // db password
$dbname = ""; // db name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$query = mysqli_query($conn,"INSERT INTO data_universitas (id,nama_universitas) VALUES (NULL,'Universitas Syiah Kuala, Banda Aceh
'),(NULL,'Universitas Malikussaleh, Lhokseumawe
'),(NULL,'Politeknik Negeri Lhokseumawe, Lhokseumawe
'),(NULL,'Politeknik Negeri Aceh, Banda Aceh
'),(NULL,'Universitas Samudra, Langsa
'),(NULL,'Universitas Teuku Umar, Meulaboh
'),(NULL,'Politeknik Aceh, Banda Aceh
'),(NULL,'UIN Ar-Raniry, Banda Aceh
'),(NULL,'STAIN Malikussaleh, Lhokseumawe
'),(NULL,'STAIN Zawiyah Cot Kala, Langsa
'),(NULL,'Akademi Komunitas Negeri (AKN) Aceh Barat Daya
'),(NULL,'STAIN Gajah Putih Takengon
'),(NULL,'IAIN Langsa, Langsa
'),(NULL,'STAIN Malikussaleh, Lhokseumawe
'),(NULL,'STAIN Gajah Putih Takengon, Takengon
'),(NULL,'STAIN Teungku Dirundeng, Melabuh
'),(NULL,'Politeknik Kesehatan Banda Aceh
'),(NULL,'Universitas Serambi Mekkah
'),(NULL,'Universitas Sumatera Utara, Medan
'),(NULL,'Universitas Negeri Medan, Medan
'),(NULL,'Politeknik Negeri Medan, Medan
'),(NULL,'Politeknik Negeri Media Kreatif, Medan
'),(NULL,'Institut Agama Islam Negeri Sumatera utara, Medan
'),(NULL,'Poltekes Depkes Medan, Medan
'),(NULL,'STAIN Padang Sidempuan, Padang Sidempuan
'),(NULL,'UIN Sumatera Utara, Medan
'),(NULL,'IAIN Padang Sidempuan, Tapanuli Selatan
'),(NULL,'Akademi Teknik Keselamatan Penerbangan (ATKP) Medan
'),(NULL,'Sekolah Tinggi Agama Kristen Protestan Negeri Tarutung
'),(NULL,'Sekolah Tinggi Penyuluhan Pertanian (STTP) Medan
'),(NULL,'Politeknik Negeri Medan
'),(NULL,'kademi Tek. Kes. Penerbangan (ATKP), Medan
'),(NULL,'Sekolah Tinggi Penyuluhan Pertanian Medan 
'),(NULL,'Universitas Andalas, Padang
'),(NULL,'Universitas Negeri Padang, Padang
'),(NULL,'Politeknik Negeri Padang, Padang
'),(NULL,'Politeknik Pertanian, Payakumbuh
'),(NULL,'STSI (Sekolah Tinggi Seni Indonesia Padang Panjang), Padang Panjang
'),(NULL,'IAIN Imam Bonjol, Padang
'),(NULL,'STAIN Batusangkar
'),(NULL,'STAIN Bukittinggi
'),(NULL,'ISI Padang Panjang
'),(NULL,'IAIN Imam Bonjol, Padang
'),(NULL,'STAIN Sjech M. Djamil Djambek , Bukittinggi
'),(NULL,'Politeknik Negeri Sriwijaya
'),(NULL,'Universitas Riau, Pekanbaru
'),(NULL,'UIN Sultan Syarif Kasim (SUSKA), Pekanbaru
'),(NULL,'Politeknik Negeri Bengkalis
'),(NULL,'Universitas Maritim Raja Ali Haji
'),(NULL,'Politeknik Negeri Batam
'),(NULL,'UIN Sultan Syarif Kasim, Riau
'),(NULL,'STAIN Bengkalis, Riau (Riau)
'),(NULL,'Universitas Jambi, Jambi
'),(NULL,'STAIN Kerinci
'),(NULL,'IAIN Sultan Thaha Saifuddin
'),(NULL,'Politeknik Kesehatan Jambi
'),(NULL,'Universitas Bengkulu, Bengkulu
'),(NULL,'IAIN Bengkulu
'),(NULL,'STAIN CURUP
'),(NULL,'Poltekkes Kemenkes Bengkulu
'),(NULL,'STAIN Curup, Rejang Lebong
'),(NULL,'Universitas Sriwijaya, Palembang
'),(NULL,'Politeknik Negeri Sriwijaya, Palembang
'),(NULL,'Poltekkes depkes Palembang, Palembang
'),(NULL,'Akademi Komunitas Negeri Prabumulih, Prabumulih
'),(NULL,'IAIN Raden Fatah
'),(NULL,'Universitas Lampung, Bandar Lampung
'),(NULL,'Politeknik Negeri Lampung, Bandar Lampung
'),(NULL,'Poltekkes Kemenkes Tanjungkarang, Bandar Lampung
'),(NULL,'STIM (Sekolah Tinggi Olahraga Metro), Kota Metro
'),(NULL,'Institut Agama Islam Negeri Raden Intan, Bandar Lampung
'),(NULL,'STAIN Jurai Siwo Metro
'),(NULL,'IAIN Raden Intan, Bandar Lampung
'),(NULL,'Universitas Bangka Belitung, Bangka Belitung
'),(NULL,'Politeknik Manufaktur, Bangka Belitung
'),(NULL,'Poltekkes Kemenkes Pangkal Pinang, Bangka Belitung
'),(NULL,'STAIN Syekh Abdurrahman Siddik, Bangka Belitung
'),(NULL,'Universitas Sultan Ageng Tirtayasa, Serang
'),(NULL,'Perguruan Tinggi Buddhi, Karawaci
'),(NULL,'IAIN Sultan Maulana Hasanuddin
'),(NULL,'Universitas Pendidikan Indonesia, Kampus Daerah Serang
'),(NULL,'Universitas Terbuka Pondok Cabe
'),(NULL,'Sekolah Tinggi Agama Buddha Negeri Sriwijaya Tangerang
'),(NULL,'Akademi Meteorologi dan Geofisika (AMG) Tangerang
'),(NULL,'Institut Agama Islam Banten (IAIB)
'),(NULL,'Universitas Indonesia
'),(NULL,'Universitas Pertahanan Indonesia (UNHAN)
'),(NULL,'Universitas Negeri Jakarta
'),(NULL,'Universitas Terbuka
'),(NULL,'Politeknik Negeri Jakarta
'),(NULL,'Politeknik Negeri Media Kreatif, Jakarta
'),(NULL,'UIN Syarif Hidayatullah Jakarta‎
'),(NULL,'Sekolah Tinggi Ilmu Pelayaran Jakarta
'),(NULL,'Sekolah Tinggi Manajemen Industri Indonesia
'),(NULL,'Akademi Pimpinan Perusahaan (APP), Jakarta
'),(NULL,'Institut Ilmu Pemerintahan, IIP, Jakarta
'),(NULL,'Sekolah Tinggi Akuntansi Negara, STAN
'),(NULL,'Sekolah Tinggi Hukum Militer, STHM
'),(NULL,'Sekolah Tinggi Ilmu Administrasi, LAN Jakarta
'),(NULL,'Sekolah Tinggi Ilmu Kepolisian (PTIK), Jakarta
'),(NULL,'Sekolah Tinggi Ilmu Pelayaran (STIP), Jakarta
'),(NULL,'Sekolah Tinggi Ilmu Statistik (STIS), Jakarta
'),(NULL,'Sekolah Tinggi Manajemen Industri(STMI), Jakarta
'),(NULL,'Sekolah Tinggi Penerbangan Indonesia (PI), Jakarta
'),(NULL,'Sekolah Tinggi Perikanan (STP), Jakarta
'),(NULL,'Politeknik Kesehatan Jakarta I   
'),(NULL,'Politeknik Kesehatan Jakarta II
'),(NULL,'Politeknik Negeri Jakarta
'),(NULL,'Politeknik Manufaktur Negeri Bandung, Bandung
'),(NULL,'Universitas Pendidikan Indonesia, Bandung
'),(NULL,'Universitas Padjadjaran, Bandung
'),(NULL,'Universitas Jenderal Achmad Yani, Bandung
'),(NULL,'Institut Pertanian Bogor, Bogor
'),(NULL,'Institut Teknologi Bandung, Bandung
'),(NULL,'Politeknik Negeri Bandung, Bandung
'),(NULL,'Politeknik Indramayu, Indramayu
'),(NULL,'Universitas Siliwangi (UNSIL), Tasikmalaya
'),(NULL,'niversitas Singaperbangsa (UNSIKA), Kampus Daerah Karawang
'),(NULL,'Universitas Swadaya Gunung Jati (Unswagati) di Kota Cirebon
'),(NULL,'Universitas Pendidikan Indonesia, Kampus Daerah Cibiru
'),(NULL,'Universitas Pendidikan Indonesia, Kampus Daerah Tasikmalaya
'),(NULL,'Universitas Pendidikan Indonesia, Kampus Daerah Sumedang
'),(NULL,'Universitas Pendidikan Indonesia, Kampus Daerah Purwakarta
'),(NULL,'Akademi Ilmu Pemasyarakatan (AKIP), Depok
'),(NULL,'Akademi Imigrasi (AIM) Depok
'),(NULL,'Akademi Kimia Analis (AKA) Bogor
'),(NULL,'Sekolah Tinggi Ilmu Administrasi, Bandung
'),(NULL,'Sekolah Tinggi Sandi Negara (STSN), Bogor
'),(NULL,'Sekolah Tinggi Seni Indonesia (STSI), Bandung
'),(NULL,'Sekolah Tinggi Transportasi Darat (STTD), Bekasi
'),(NULL,'Sekolah Tinggi Kesejahteraan Sosial (STKS), Bandung
'),(NULL,'Sekolah Tinggi Pemerintahan Dalam Negeri (STPDN), Sumedang
'),(NULL,'Sekolah Tinggi Penyuluhan Pertanian (STTP) Bogor
'),(NULL,'STAIN Cirebon
'),(NULL,'Politeknik Kesehatan Bandung
'),(NULL,'Politeknik Manufaktur Bandung
'),(NULL,'Politeknik Negeri Bali, Badung
'),(NULL,'Universitas Diponegoro, Semarang
'),(NULL,'Universitas Negeri Semarang, Semarang
'),(NULL,'Universitas Jenderal Soedirman, Purwokerto
'),(NULL,'Universitas Negeri Surakarta Sebelas Maret, Surakarta
'),(NULL,'Politeknik Negeri Semarang, Semarang 
'),(NULL,'Politeknik Maritim Negeri Indonesia, Semarang
'),(NULL,'Institut Seni Indonesia Surakarta, Surakarta (ISI Solo, dahulu STSI)
'),(NULL,'Universitas Tidar Magelang, Magelang
'),(NULL,'UIN Walisongo, Semarang
'),(NULL,'IAIN Surakarta, Surakarta
'),(NULL,'STAIN Kudus, Kudus
'),(NULL,'STAIN Pekalongan, Pekalongan
'),(NULL,'IAIN Salatiga, Salatiga
'),(NULL,'IAIN Purwokerto, Purwokerto
'),(NULL,'Akademi Kepolisian (AKPOL),Semarang
'),(NULL,'Akademi Militer (AKMIL) TNI AD, Magelang
'),(NULL,'Akademi Minyak dan Gas Bumi (AKAMIGAS), Blora
'),(NULL,'Akademi Sanitasi dan Kesehatan Lingkungan (ASKK), Purwokerto
'),(NULL,'Sekolah Tinggi Seni Indonesia (STSI), Surakarta
'),(NULL,'Sekolah Tinggi Penyuluhan Pertanian (STTP) Magelang
'),(NULL,'Politeknik Ilmu Pelayaran Semarang
'),(NULL,'Politeknik Kesehatan Semarang
'),(NULL,'Politeknik Kesehatan Surakarta
'),(NULL,'Universitas Gadjah Mada
'),(NULL,'Universitas Negeri Yogyakarta
'),(NULL,'Institut Seni Indonesia Yogyakarta
'),(NULL,'Universita Terbuka  UPBJJ Yogyakarta
'),(NULL,'Akademi Teknologi Kulit Yogyakarta (ATK)
'),(NULL,'Universitas Pembangunan Nasional Veteran (UPN), Yogyakarta
'),(NULL,'UIN Sunan Kalijaga
'),(NULL,'Akademi Angkatan Udara (AAU), Yogyakarta
'),(NULL,'Sekolah Tinggi Pertanahan Nasional (STPN), Yogyakarta
'),(NULL,'Sekolah Tinggi Teknologi Nuklir (STTN), Yogyakarta
'),(NULL,'Politeknik Kesehatan Yogyakarta
'),(NULL,'Universitas Airlangga, Surabaya
'),(NULL,'Universitas Negeri Surabaya, Surabaya
'),(NULL,'Universitas Brawijaya, Malang
'),(NULL,'Universitas Negeri Malang, Malang
'),(NULL,'Universitas Jember, Jember
'),(NULL,'Universitas Trunojoyo, Bangkalan
'),(NULL,'Politeknik Elektronika Negeri Surabaya, Surabaya
'),(NULL,'Politeknik Perkapalan Negeri Surabaya, Surabaya
'),(NULL,'Politeknik Negeri Madura, Sampang
'),(NULL,'Politeknik Negeri Malang, Malang
'),(NULL,'Politeknik Negeri Madiun, Madiun
'),(NULL,'Politeknik Negeri Jember, Jember
'),(NULL,'Institut Teknologi Sepuluh Nopember, Surabaya
'),(NULL,'Akademi Komunitas Negeri, Bojonegoro
'),(NULL,'Akademi Komunitas Negeri, Pacitan
'),(NULL,'Universitas Pembangunan Nasional Veteran (UPN), Surabaya
'),(NULL,'Politeknik Negeri Banyuwangi, Banyuwangi
'),(NULL,'Akademi Komunitas Negeri Lamongan, Lamongan
'),(NULL,'Akademi Komunitas Negeri Sumenep. Sumenep
'),(NULL,'Akademi Komunitas Negeri Bojonegoro, Bojonegoro
'),(NULL,'Universitas Islam Negeri Maulana Malik Ibrahim, Malang
'),(NULL,'STAIN Kediri
'),(NULL,'STAIN Ponorogo
'),(NULL,'UIN Sunan Ampel
'),(NULL,'IAIN Tulungagung
'),(NULL,'UIN Maulana Malik Ibrahim, Malang
'),(NULL,'STAIN Pamekasan, Pamekasan
'),(NULL,'Akademi Angkatan Laut (AAL), Surabaya
'),(NULL,'Teknik Keselamatan Penerbangan (ATKP) Surabaya
'),(NULL,'Sekolah Tinggi Penyuluhan Pertanian (STTP) Malang
'),(NULL,'IAIN Jember, Jember
'),(NULL,'Politeknik Elektronika Negeri Surabaya
'),(NULL,'Politeknik Kesehatan Malang
'),(NULL,'Politeknik Kesehatan Surabaya
'),(NULL,'Politeknik Pertanian Negeri Jember
'),(NULL,'Akademi TKP – Surabaya 
'),(NULL,'Universitas Mataram, Mataram
'),(NULL,'IAIN Mataram, Lombok
'),(NULL,'Sekolah Tinggi Agama Hindu Negeri (STAHN) Gde Puja, Mataram
'),(NULL,'Universitas Nusa Cendana, Kupang
'),(NULL,'Politeknik Negeri Kupang, Kupang
'),(NULL,'Politeknik Pertanian Negeri Kupang, Kupang
'),(NULL,'Universitas Udayana, Denpasar
'),(NULL,'Universitas Pendidikan Ganesha, Singaraja
'),(NULL,'Politeknik Negeri Bali, Kuta-Badung
'),(NULL,'Institut Seni Indonesia Denpasar, Denpasar
'),(NULL,'Politeknik Negeri Tanah Lot
'),(NULL,'Institut Hindu Dharma Negeri (IHDN) Denpasar
'),(NULL,'Akademi Kebidanan Pemprov Bali singaraja
'),(NULL,'Sekolah Tinggi Pariwisata Bali
'),(NULL,'Sekolah Tinggi Agama Kristen Negeri (STAKN) Denpasar
'),(NULL,'Politeknik Kesehatan Denpasar
'),(NULL,'Universitas Tanjungpura, Pontianak
'),(NULL,'Politeknik Negeri Pontianak, Pontianak
'),(NULL,'Politeknik Kesehatan Kementerian Kesehatan, Pontianak
'),(NULL,'Politeknik Terpikat Sambas
'),(NULL,'Politeknik Tonggak Equator
'),(NULL,'Politeknik Ketapang
'),(NULL,'Politeknik Tunas Bangsa
'),(NULL,'IAIN Pontianak sebelumnya STAIN Pontianak
'),(NULL,'Universitas Palangka Raya, Palangka Raya
'),(NULL,'IAIN Palangkaraya, Palangkaraya
'),(NULL,'Sekolah Tinggi Agama Hindu Negeri Tampung Peyang, Palangka Raya
'),(NULL,'Sekolah Tinggi Agama Kristen Negeri (STAKN) Palangkaraya
'),(NULL,'Universitas Lambung Mangkurat, Banjarmasin
'),(NULL,'Politeknik Negeri Banjarmasin, Banjarmasin
'),(NULL,'IAIN ANTASARI, Banjarmasin
'),(NULL,'Poltekkes Banjarmasin
'),(NULL,'Ooliteknik Pertanian Negeri Samarinda
'),(NULL,'Universitas Mulawarman, Samarinda
'),(NULL,'Politeknik Negeri Samarinda, Samarinda
'),(NULL,'Politeknik Pertanian Negeri Samarinda, Samarinda
'),(NULL,'Universitas Borneo Tarakan, Tarakan
'),(NULL,'Politeknik Balikpapan, Balikpapan
'),(NULL,'IAIN Samarinda, Samarinda
'),(NULL,'Universitas Borneo Tarakan
'),(NULL,'Universitas Sam Ratulangi, Manado
'),(NULL,'Universitas Negeri Manado, Manado
'),(NULL,'Politeknik Negeri Manado, Manado
'),(NULL,'Politeknik Negeri Nusa Utara, Tahuna
'),(NULL,'IAIN Manado, Manado (Sulawesi Utara)
'),(NULL,'Politeknik Kesehatan Manado
'),(NULL,'Politeknik Negeri Manado
'),(NULL,'Universitas Negeri Gorontalo, Gorontalo
'),(NULL,'IAIN Sultan Amai, Gorontalo
'),(NULL,'Universitas Tadulako, Palu
'),(NULL,'Sekolah Tinggi Ilmu Ekonomi (YPP Mujahidin), Tolitoli
'),(NULL,'IAIN Dato Karamau, Palu
'),(NULL,'STAIN Datokarama, Palu
'),(NULL,'Politeknik Kesehatan Kemenkes Makassar, Makassar
'),(NULL,'Universitas Hasanuddin, Makassar
'),(NULL,'Universitas Negeri Makassar
'),(NULL,'Politeknik Pertanian Negeri Pangkajene Kepulauan, Pangkajene Kepulauan
'),(NULL,'Politeknik Negeri Ujung pandang, Makassar
'),(NULL,'Universitas Maiwa Enrekang
'),(NULL,'Politeknik Negeri Media Kreatif, Makassar
'),(NULL,'Universitas Islam Negeri Makassar
'),(NULL,'UIN Alauddin, Makassar
'),(NULL,'STAIN Watampone, Bone
'),(NULL,'STAIN Parepare, Parepare
'),(NULL,'IAIN Palopo, Palopo
'),(NULL,'Akademi Teknik Keselamatan Penerbangan (ATKP) Makasar
'),(NULL,'Sekolah Tinggi Ilmu Adm, Ujung Pandang
'),(NULL,'Sekolah Tinggi Seni Indonesia, Padang Panjang
'),(NULL,'Sekolah Tinggi Agama Kristen Negeri (STAKN) Toraja
'),(NULL,'Sekolah Tinggi Penyuluhan Pertanian (STTP) Gowa
'),(NULL,'Akademi Teknik Keselamatan Penerbangan Makasar
'),(NULL,'Universitas Haluoleo, Kendari
'),(NULL,'Sekolah Tinggi Pertanian (STIP) Muna Kampus Baru, Muna
'),(NULL,'STAIN Kendari
'),(NULL,'Universitas 19 November Kolaka
'),(NULL,'Universitas Muhammadiyah Kendari
'),(NULL,'Universitas Lakidende
'),(NULL,'Universitas Dayanu Iksanudin
'),(NULL,'Universitas Muhammadiyah Buton
'),(NULL,'Universitas Sulawesi Tenggara
'),(NULL,'IAIN Kendari, Palu
'),(NULL,'Universitas Negeri Sulawesi Barat
'),(NULL,'Universitas Pattimura, Ambon
'),(NULL,'Universitas Darussalam, Ambon
'),(NULL,'Politeknik Negeri Ambon, Ambon
'),(NULL,'Politeknik Perikanan Negeri Tual, Tual
'),(NULL,'STAKPN Ambon
'),(NULL,'IAIN Ambon
'),(NULL,'Sekolah Tinggi Agama Kristen Protestan Negeri Ambon
'),(NULL,'STAIN Ambon
'),(NULL,'Universitas Khairun, Ternate
'),(NULL,'IAIN Ternate, Ternate
'),(NULL,'Universitas Cendrawasih, Jayapura
'),(NULL,'Universitas Musamus Merauke, Merauke
'),(NULL,'STAIN Al-Fatah, Jayapura
'),(NULL,'Sekolah Tinggi. Agama Kristen Negeri (STAKN) Jayapura
'),(NULL,'Universitas Negeri Papua, Manokwari 
'),(NULL,'STAIN Sorong, Sorong
'),(NULL,'Sekolah Tinggi Penyuluhan Pertanian (STTP) Manokwari')");
