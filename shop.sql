-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2026 at 04:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `judul`, `harga`, `gambar`, `deskripsi`) VALUES
(1, 'Bumi', 95000, 'https://cdn.gramedia.com/uploads/items/9786020332956_Bumi-New-Cover.jpg', 'Awal mula petualangan Raib, Seli, dan Ali. Raib yang bisa menghilang bertemu Tamus.'),
(2, 'Bulan', 95000, 'https://cdn.gramedia.com/uploads/items/img20220905_11324048.jpg', 'Petualangan diplomasi di Klan Bulan. Menghadapi kompetisi yang mematikan.'),
(3, 'Matahari', 95000, 'https://cdn.gramedia.com/uploads/items/img20220905_11433462.jpg', 'Ali memimpin perjalanan ke Klan Matahari. Menemukan rahasia kaum Bintang.'),
(4, 'Bintang', 95000, 'https://cdn.gramedia.com/uploads/items/9786020351179_Bintang.jpg', 'Melawan sekretaris dewan kota di Klan Bintang. Pasak bumi terancam runtuh.'),
(5, 'Ceros dan Batozar', 85000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/yu4kvjos6yw2qru9skgsuf.jpg', 'Spin-off: Bertemu dua makhluk kuat yang terkurung di bawah laut.'),
(6, 'Komet', 95000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/9/20/dnvtkacwfcyq3ds5g9lpqq.jpg', 'Mencari pulau dengan tumbuhan aneh. Siapa cepat dia dapat.'),
(7, 'Komet Minor', 95000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/9/2/gtwhopbph3gdpjwku5ck9o.jpg', 'Pertarungan final melawan Si Tanpa Mahkota. Ali melakukan pengorbanan besar.'),
(8, 'Selena', 85000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/2/6/bcekrdxnwcemqhgkreithj.jpg', 'Masa lalu Miss Selena dan persahabatannya dengan Mata di Akademi Bayangan.'),
(9, 'Nebula', 85000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/6/10/3rqshdjjq6rvpxfczrefl8.jpg', 'Rahasia Klan Nebula dan siapa orang tua Raib sebenarnya.'),
(10, 'Si Putih', 85000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/sqew3j5qexpsolyjghtrom.jpg', 'Kisah masa lalu kucing Raib saat wabah melanda klan Polaris.'),
(11, 'Lumpu', 95000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/6/10/eqmb5k4ysvkb9znlbjwsj7.jpg', 'Raib dan kawan-kawan lumpuh kekuatannya oleh musuh yang membenci pemilik kekuatan.'),
(12, 'Bibi Gill', 89000, 'https://cdn.gramedia.com/uploads/items/bibi_gill.jpeg', 'Masa lalu Bibi Gill, petarung terkuat Klan Matahari.'),
(13, 'Sagaras', 95000, 'https://cdn.gramedia.com/uploads/items/sagaras.jpeg', 'Akhirnya, misteri orang tua Ali dan Klan Sagaras terungkap.'),
(14, 'Matahari Minor', 99000, 'https://cdn.gramedia.com/uploads/items/img20221028_14101540.jpg', 'Ali, Raib, dan Seli kembali bertualang. Kali ini tentang persahabatan sejati.'),
(15, 'Ily', 99000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/12/10/guesit79ilow3qmbwbrqrq.jpeg', 'Tentang Ily, sahabat mereka yang gugur di Klan Matahari.'),
(16, 'Aldebaran', 105000, 'https://cdn.gramedia.com/uploads/products/edaz0vzgbn.jpg', 'Petualangan baru menuju bintang Aldebaran. Skala pertempuran makin besar.'),
(17, 'Hana-Tara-Hata', 105000, 'https://cdn.gramedia.com/uploads/product-metas/7-14ata5h3.jpg', 'Kisah tiga sahabat baru atau mungkin legenda kuno dunia paralel?'),
(18, 'Negeri Para Bedebah', 89000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/hwwjhrajpbdc4ctutxpzxa.jpg', 'Thomas, konsultan keuangan yang harus menyelamatkan bank pamannya.'),
(19, 'Negeri di Ujung Tanduk', 89000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/basfpfnrkm6z7f7y63btba.jpg', 'Thomas bertarung di ring politik dan mafia hukum.'),
(20, 'Pulang', 89000, 'https://cdn.gramedia.com/uploads/items/pulang_tere_liye.jpeg', 'Bujang, tukang pukul yang takut salat, mencari makna pulang.'),
(21, 'Pergi', 89000, 'https://cdn.gramedia.com/uploads/items/pergi_tere_liye.jpeg', 'Bujang menemukan masa lalu ayahnya dan berhadapan dengan Shadow Economy.'),
(22, 'Pulang-Pergi', 99000, 'https://cdn.gramedia.com/uploads/items/pulang-pergi_tere_liye.jpeg', 'Crossover epik! Bujang dan Thomas bersatu di satu novel.'),
(23, 'Bedebah di Ujung Tanduk', 99000, 'https://cdn.gramedia.com/uploads/items/9786239726218.jpg', 'Petualangan Thomas dan Bujang berlanjut melawan para bedebah.'),
(24, 'Tanah Para Bandit', 99000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/2op5kuxbxmq8zvhdu8sqr8.jpg', 'Kisah Padma, gadis yang tumbuh di tengah kelompok bandit.'),
(25, 'Bandit-Bandit Berkelas', 105000, 'https://cdn.gramedia.com/uploads/picture_meta/2024/5/11/chuapgpganzdsznjnqcbcv.jpg', 'Lanjutan kisah Padma. Para bandit ini punya kelas tersendiri.'),
(26, 'Si Anak Kuat', 85000, 'https://cdn.gramedia.com/uploads/items/9786239554590.jpg', 'Amelia. Tentang mimpi-mimpi yang kuat dan keteguhan hati.'),
(27, 'Si Anak Spesial', 85000, 'https://cdn.gramedia.com/uploads/items/cats_J1AMava.jpg', 'Burlian. Anak bandel yang punya pemikiran \"spesial\".'),
(28, 'Si Anak Pintar', 85000, 'https://cdn.gramedia.com/uploads/items/9786239554583.jpg', 'Pukat. Anak jenius yang penuh akal di kampungnya.'),
(29, 'Si Anak Pemberani', 85000, 'https://cdn.gramedia.com/uploads/items/9786239607401.jpg', 'Eliana. Membela hak tanah kampungnya dari para penambang pasir.'),
(30, 'Si Anak Cahaya', 85000, 'https://cdn.gramedia.com/uploads/items/9786239607418.jpg', 'Nurmas. Petualangan masa kecil zaman dulu yang penuh nostalgia.'),
(31, 'Si Anak Badai', 85000, 'https://cdn.gramedia.com/uploads/items/9786239607425.jpg', 'Za. Anak pesisir yang tangguh menghadapi badai kehidupan.'),
(32, 'Si Anak Pelangi', 85000, 'https://cdn.gramedia.com/uploads/items/9786239607432.jpg', 'Ras. Tentang keberagaman dan warna-warni kehidupan anak-anak.'),
(33, 'Si Anak Savana', 85000, 'https://cdn.gramedia.com/uploads/items/abe66e055046e2b5e1c451f1d2655fb1.jpg', 'Petualangan seru di padang rumput yang luas.'),
(34, 'Hujan', 98000, 'https://cdn.gramedia.com/uploads/items/9786020324784_Hujan-Cover-Baru-2018.jpg', 'Lail dan Esok. Kisah cinta di tengah bencana masa depan.'),
(35, 'Rindu', 89000, 'https://cdn.gramedia.com/uploads/items/9786239554552.jpg', 'Perjalanan haji masa lalu yang penuh makna kehidupan.'),
(36, 'Tentang Kamu', 99000, 'https://cdn.gramedia.com/uploads/items/9786239554569.jpg', 'Zaman Zulkarnaen mencari jejak Sri Ningsih di Paris dan London.'),
(37, 'Rembulan Tenggelam di Wajahmu', 85000, 'https://cdn.gramedia.com/uploads/items/REMBULAN_TENGGELAM_DIWAJAHMU.jpg', 'Rehan bertanya 5 pertanyaan besar pada Tuhan tentang hidupnya.'),
(38, 'Ayahku (Bukan) Pembohong', 85000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/2/6/ee8wt7s2thupknxj7tmk6f.jpg', 'Tentang seorang anak yang dibesarkan dengan dongeng-dongeng ayahnya.'),
(39, 'Selamat Tinggal', 95000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/2/13/wmvbuyceobknwql3shqs4d.jpg', 'Sintong Tinggal. Pergulatan batin penjaga toko buku bajakan.'),
(40, 'Janji', 89000, 'https://cdn.gramedia.com/uploads/items/WhatsApp_Image_2021-07-08_at_11.46.49_AM.jpeg', 'Kisah tentang janji-janji yang harus ditepati, walau sulit.'),
(41, 'Sesuk', 89000, 'https://cdn.gramedia.com/uploads/items/sesuk.jpg', 'Horor keluarga. Rumah baru yang ternyata ada \"penghuni\" lain.'),
(42, 'Hello', 95000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/5cavrpibsar2kwtnhhbh7p.jpg', 'Kisah cinta yang rumit tapi manis.'),
(43, 'Rasa', 95000, 'https://cdn.gramedia.com/uploads/items/Rasa.jpg', 'Tentang rasa yang tak pernah tersampaikan.'),
(44, 'Hafalan Shalat Delisa', 65000, 'https://cdn.gramedia.com/uploads/items/Hafalan_Shalat_Delisa.jpg', 'Delisa yang berusaha menghafal bacaan salat saat Tsunami Aceh.'),
(45, 'Moga Bunda Disayang Allah', 69000, 'https://cdn.gramedia.com/uploads/items/moga_bunda.jpg', 'Kisah haru tentang anak buta, tuli, dan bisu.'),
(46, 'Daun yang Jatuh Tak Pernah Membenci Angin', 75000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/keptpseujhk7alng3chxo3.jpg', 'Tania dan Danar. Cinta yang tak harus memiliki.'),
(47, 'Sunset Bersama Rosie', 75000, 'https://cdn.gramedia.com/uploads/items/img20210420_14424010.jpg', 'Tegar, Rosie, dan takdir yang mengubah segalanya dalam sekejap.'),
(48, 'Sepotong Hati yang Baru', 75000, 'https://cdn.gramedia.com/uploads/items/9786239554545.jpg', 'Kumpulan cerpen tentang patah hati dan move on.'),
(49, 'Berjuta Rasanya', 65000, 'https://cdn.gramedia.com/uploads/items/9786239554538.jpg', 'Kumpulan cerita pendek tentang berbagai rasa cinta.'),
(50, 'Harga Sebuah Percaya', 75000, 'https://cdn.gramedia.com/uploads/items/HARGA_SEBUAH_PERCAYA.jpg', 'Kisah Jim si Penandai. Tentang move on dari masa lalu.'),
(51, 'Dia Adalah Kakakku', 75000, 'https://cdn.gramedia.com/uploads/items/img20210420_14440176.jpg', 'Perjuangan seorang kakak untuk adik-adiknya yang menyentuh hati.'),
(52, 'Teruslah Bodoh Jangan Pintar', 89000, 'https://www.gramedia.com/blog/content/images/2024/03/Teruslah-Bodoh-Jangan-Pintar.jpg', 'Kritik sosial yang dikemas dalam cerita yang menohok.'),
(53, 'Yang Telah Lama Pergi', 89000, 'https://cdn.gramedia.com/uploads/picture_meta/2023/8/12/qxt63qkjxklcjyfcfbwr8w.jpg', 'Tentang rindu dan kenangan yang akhirnya kembali.'),
(54, 'Cinta Antara Jakarta & Kuala Lumpur', 94500, 'https://cdn.gramedia.com/uploads/product-metas/90l7158tmu.jpg', 'Awal mula petualangan Raib, Seli, dan Ali. Raib yang bisa menghilang bertemu Tamus.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `role`) VALUES
(1, 'faishalfn1', '$2y$10$qmrmunLVyipa.IBcag70reGicUbkg/aGpgt0p88NrdZZKu3RJwOqq', 'Faiz Faishal Nugroho', 'user'),
(2, 'fikri', '$2y$10$/oCVpqL5H/MlrG2fNmFTeenOBdH1dtnL5XCossLpa1B62TZtFxaFu', 'Fikri Ibnu Fajar', 'user'),
(3, 'faishal admin', '$2y$10$8jbkgDc8hIYVkNGT1SJ4X.Ksx1LbEC2VynnZRonvn8osFZuZE4nlW', 'Faishal Admin', 'admin'),
(4, 'user', '$2y$10$yv65FKqpK9KS1Mfk1GwSZO6N5awJzNAlfwjNdyOFzxM03zHR.k51C', 'user123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `book_id`, `created_at`) VALUES
(6, 1, 23, '2026-02-06 07:37:45'),
(7, 1, 21, '2026-02-09 01:36:05'),
(8, 1, 31, '2026-02-09 01:36:17'),
(9, 1, 11, '2026-02-10 01:10:20'),
(10, 2, 1, '2026-02-10 01:20:34'),
(11, 3, 2, '2026-02-10 02:40:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
