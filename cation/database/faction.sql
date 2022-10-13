-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2021 pada 17.30
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facation`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@site.com', 1),
(9, 'denaya-TI', 'pnGGprZC', 'Denaya Pramudya', 'denaya@contoh.com', 2),
(10, 'saya', '5a8dccb220de5c6775c873ead6ff2e43', 'saya', 'saya@gigi.com', 2),
(11, 'saya', '202cb962ac59075b964b07152d234b70', 'saya', 'saya.km24@gmail.com', 2),
(12, 'm.afifanars', 'a24f1162d3a698189c6307a32e2a7851', 'Mhd Afifan Aly Rahman Saragih', 'sm.afifanaly@gmail.com', 2),
(13, 'aku', '89ccfac87d8d06db06bf3211cb2d69ed', 'aku', 'aku@gmail.com', 2),
(14, 'ineztri-TI', 'aL7vBOdq', 'Ineztri Situmeang', 'ineztri@contoh.com', 2),
(15, 'meizar-TI', 'yDjG3T68', 'Meizar Fachriza', 'meizar@contoh.com', 2),
(16, 'indah-TI', 'opahD$PF', 'Indah Mariana Nainggolan', 'indah@contoh.com', 2),
(17, 'jefry-TI', 'HjB@yQCA', 'Jefry Lianto', 'jefry@contoh.com', 2),
(18, 'annisa-TI', 'l@6N0Rdf', 'Annisa Putri Daulay', 'annisa@contoh.com', 2),
(19, 'anggia-TI', 's#pxwKDJ', 'Anggia Sari Siregar', 'anggia@contoh.com', 2),
(20, 'bella-TI', 'zDmr@3bb', 'Bella Fransiska Rejeki Simamora', 'bella@contoh.com', 2),
(21, 'nanda-TI', '92ogMg5h', 'Nanda Ambiya', 'nanda@contoh.com', 2),
(22, 'putri-TI', 'Ajj6bsIX', 'Putri Laura Latersia Br L Tobing', 'putri@contoh.com', 2),
(23, 'sri-TI', 'M82EXgW*', 'Sri Wahyuni', 'sri@contoh.com', 2),
(24, 'tritia-TI', 'f5LvsZCv', 'Tritia Mutiara', 'tritia@contoh.com', 2),
(25, 'yohana-TI', 'jeR#q@SM', 'Yohana Fransisca', 'yohana@contoh.com', 2),
(26, 'haiqal-TI', 'GIwNoLwG', 'Haiqal Rizky Ramadhan', 'haiqal@contoh.com', 2),
(27, 'faiz-TI', '9OfDAXDd', 'Faiz Ahmad Asy-Syafiq', 'faiz@contoh.com', 2),
(28, 'willioms-TI', 'fsAVUK2p', 'Willioms Sanjaya', 'willioms@contoh.com', 2),
(29, 'emir-TI', 'h2W*bJvP', 'Emir Hazam Fahmi Harahap', 'emir@contoh.com', 2),
(30, 'mhd.-TI', 'pq@PxJVT', 'Mhd. Arsya Fikri', 'mhd.@contoh.com', 2),
(31, 'rizka-TI', 'IEze8#uM', 'Rizka Annisa Hidayat', 'rizka@contoh.com', 2),
(32, 'hendry-TI', 'b2g@*@5*', 'Hendry Winata', 'hendry@contoh.com', 2),
(33, 'faisal-TI', 'TGu020t0', 'Faisal Lazuardy M', 'faisal@contoh.com', 2),
(34, 'katherin-TI', 'hPcYZ1tW', 'Katherin Anna Patherisia Lesnussa', 'katherin@contoh.com', 2),
(35, 'vincent-TI', 'WuMPYYvi', 'Vincent Sirait', 'vincent@contoh.com', 2),
(36, 'timothy-TI', 'IKimqxTr', 'Timothy Agalliasis', 'timothy@contoh.com', 2),
(37, 'anri-TI', 'yB*qcjfW', 'Anri Anugerah Marpaung', 'anri@contoh.com', 2),
(38, 'cecilia-TI', 'Z$*skW0n', 'Cecilia Vania Putri', 'cecilia@contoh.com', 2),
(39, 'arief-TI', 'JKpPyql8', 'Arief Lindung Nugraha Rg', 'arief@contoh.com', 2),
(40, 'yesaya-TI', 'ZMssRHJy', 'Yesaya Alehandro Silalahi', 'yesaya@contoh.com', 2),
(41, 'nhakchok-TI', '*ynY5C71', 'Nhakchok Gemilang Sibarani', 'nhakchok@contoh.com', 2),
(42, 'sity-TI', 'P44ZbC#0', 'Sity Fadia Al Haya Maswin', 'sity@contoh.com', 2),
(43, 'ridwan-TI', 'X9dgIE7I', 'Ridwan Harta', 'ridwan@contoh.com', 2),
(44, 'irsyad-TI', 'dBRQ40FR', 'Irsyad Fauzi Hadengganan Munthe', 'irsyad@contoh.com', 2),
(45, 'muhammad-TI', '3MwzwcwG', 'Muhammad Dayu Furrahman Lubis', 'muhammad@contoh.com', 2),
(46, 'dolok-TI', 'Q1$8zLgW', 'Dolok Marsaong Asi Malau', 'dolok@contoh.com', 2),
(47, 'christopher-TI', 'O6UWrrp5', 'Christopher Imanuel Manurung', 'christopher@contoh.com', 2),
(48, 'huzaifah-TI', '5e83yr@c', 'Huzaifah Muhammad Lais Lubis', 'huzaifah@contoh.com', 2),
(49, 'kevin-TI', 'ymkPUMD9', 'Kevin Patiogi Manullang', 'kevin@contoh.com', 2),
(50, 'ricky-TI', 'MWPUE#XR', 'Ricky Martin Abdi Negara Purba', 'ricky@contoh.com', 2),
(51, 'faris-TI', 'j9C#gxoM', 'Faris Al Falaq', 'faris@contoh.com', 2),
(52, 'barik-TI', 'k48Rh7Wn', 'Barik Angkasa Ritonga', 'barik@contoh.com', 2),
(53, 'jimy-TI', '4kJMpRBB', 'Jimy March Go Wijaya Saragih', 'jimy@contoh.com', 2),
(54, 'fadhil-TI', '2ZJVbV06', 'Fadhil Zuhairsyah', 'fadhil@contoh.com', 2),
(55, 'fahrul-TI', 'HrU3o#*A', 'Fahrul Rozy Ramadhan', 'fahrul@contoh.com', 2),
(56, 'marcho-TI', '#XsdRzbT', 'Marcho Prayogi Sembiring', 'marcho@contoh.com', 2),
(57, 'utari-TI', 'Aqei2KqR', 'Utari Anggita', 'utari@contoh.com', 2),
(58, 'milpa-TI', '7AJHnTzP', 'Milpa Wahyuni Siregar', 'milpa@contoh.com', 2),
(59, 'dinda-TI', 'DCK4ng#5', 'Dinda Julia Putri', 'dinda@contoh.com', 2),
(60, 'dwiki-TI', 'oJOSnlyD', 'Dwiki Affandi', 'dwiki@contoh.com', 2),
(61, 'margaretha-TI', '@4Uy4SD*', 'Margaretha Gok Asi Naibaho', 'margaretha@contoh.com', 2),
(62, 'adela-TI', 'AC*o33at', 'Adela Nopriana Purba', 'adela@contoh.com', 2),
(63, 'dian-TI', 'mcaOpluh', 'Dian Verina', 'dian@contoh.com', 2),
(64, 'fauzan-TI', 'rn7t9XsV', 'Fauzan Azhari', 'fauzan@contoh.com', 2),
(65, 'aidha-TI', 'PGJx#AZy', 'Aidha Safitri Harahap', 'aidha@contoh.com', 2),
(66, 'dhea-TI', '$N3kkYBz', 'Dhea Novianty Sitompul', 'dhea@contoh.com', 2),
(67, 'meina-TI', 'wjuKLkba', 'Meina Lisa', 'meina@contoh.com', 2),
(68, 'fenni-TI', 'K1HRZXBr', 'Fenni Kristiani Sarumaha', 'fenni@contoh.com', 2),
(69, 'prisicilla-TI', 'XoYxtrul', 'Prisicilla Frederica Br Purba', 'prisicilla@contoh.com', 2),
(70, 'hamdi-TI', 'DpObvJ@T', 'Hamdi Syahputra', 'hamdi@contoh.com', 2),
(71, 'fildzah-TI', 'lI@arhJt', 'Fildzah Alifia Lubis', 'fildzah@contoh.com', 2),
(72, 'alya-TI', 'sxnL7IZq', 'Alya Syafitri', 'alya@contoh.com', 2),
(73, 'muhammad-TI', 'MMM9ASFE', 'Muhammad Zikri Ihsan', 'muhammad@contoh.com', 2),
(74, 'meily-TI', '2IHkV$sB', 'Meily Benedicta Harefa', 'meily@contoh.com', 2),
(75, 'davin-TI', '31tQZo$4', 'Davin Guntur Habibi', 'davin@contoh.com', 2),
(76, 'Michael-TI', 'fsE*Djs8', 'Michael', 'Michael@contoh.com', 2),
(77, 'jason-TI', 'PmPj*BSS', 'Jason Surya Faylim', 'jason@contoh.com', 2),
(78, 'geylfedra-TI', 'C7lianXs', 'Geylfedra Matthew Panggabean', 'geylfedra@contoh.com', 2),
(79, 'vania-TI', 'EmVFcJQl', 'Vania Miranda Emmanuella Br. Siahaan', 'vania@contoh.com', 2),
(80, 'garuda-TI', 'MWeVOJAT', 'Garuda P. Purba', 'garuda@contoh.com', 2),
(81, 'dini-TI', 'eMUxyJE1', 'Dini Mustika', 'dini@contoh.com', 2),
(82, 'brian-TI', 'ibNgDed5', 'Brian Tarihoran', 'brian@contoh.com', 2),
(83, 'sarah-TI', 'Va5fNmgG', 'Sarah Theodora Sinurat', 'sarah@contoh.com', 2),
(84, 'muhammad-TI', 'VrWnl@E7', 'Muhammad Saddam Zikri Dalimunthe', 'muhammad@contoh.com', 2),
(85, 'Felipe-TI', '6RENTo78', 'Felipe', 'Felipe@contoh.com', 2),
(86, 'Christina-TI', 'hhkB9yiv', 'Christina', 'Christina@contoh.com', 2),
(87, 'samuel-TI', '6mA2RjG5', 'Samuel Parlindungan Malau', 'samuel@contoh.com', 2),
(88, 'tomy-TI', 'uNbG1fQl', 'Tomy Risky Parlindungan Tambunan', 'tomy@contoh.com', 2),
(89, 'tri-TI', 'WTo0aPmu', 'Tri Lot Vekry Ananta S', 'tri@contoh.com', 2),
(90, 'fachri-TI', 'g@#tCeKl', 'Fachri Adrian', 'fachri@contoh.com', 2),
(91, 'ratu-TI', 'Jou$@QqX', 'Ratu Crismas Silitonga', 'ratu@contoh.com', 2),
(92, 'naufal-TI', 'LMhFN0HC', 'Naufal Baginda Zuhdii Siregar', 'naufal@contoh.com', 2),
(93, 'rafif-TI', 'R$spKwVr', 'Rafif Pratama', 'rafif@contoh.com', 2),
(94, 'sebastian-TI', 'ATVTla3P', 'Sebastian Belmero Sitorus', 'sebastian@contoh.com', 2),
(95, 'm-TI', 'C3@MyQnG', 'M Adib Mangaraja Syahna', 'm@contoh.com', 2),
(96, 'brillian-TI', 'rRpNwggt', 'Brillian Jonathan Tantri', 'brillian@contoh.com', 2),
(97, 'Vincent-TI', '49bC0ibb', 'Vincent', 'Vincent@contoh.com', 2),
(98, 'nada-TI', 'SD$r8Wzy', 'Nada Salsabila', 'nada@contoh.com', 2),
(99, 'jhuan-TI', 'XRCX38RA', 'Jhuan Avryganda Sitorus', 'jhuan@contoh.com', 2),
(100, 'tengku-TI', 'Zl#7HI8h', 'Tengku Muhammad Javier Albar', 'tengku@contoh.com', 2),
(101, 'yohana-TI', '1qdp$0di', 'Yohana M Beatrice Panjaitan', 'yohana@contoh.com', 2),
(102, 'hilda-TI', 'ck8vR9MV', 'Hilda Safira', 'hilda@contoh.com', 2),
(103, 'daniel-TI', 'f43fdI39', 'Daniel Situmeang', 'daniel@contoh.com', 2),
(104, 'anggi-TI', 'rarOkhUK', 'Anggi Yohanes Pardede', 'anggi@contoh.com', 2),
(105, 'yosepin-TI', 'Jf4R6Kzl', 'Yosepin Kawalta Ginting', 'yosepin@contoh.com', 2),
(106, 'michael-TI', '1i9TAkwd', 'Michael Yafda Marbun', 'michael@contoh.com', 2),
(107, 'philip-TI', 'ZqcQScDs', 'Philip Halomoan Simamora', 'philip@contoh.com', 2),
(108, 'masayu-TI', '0i@mJP@8', 'Masayu Fany Shapura', 'masayu@contoh.com', 2),
(109, 'cici-TI', 'Qyl0F9cU', 'Cici Desi Margaretha', 'cici@contoh.com', 2),
(110, 'zen-TI', 'FSs9Nk9H', 'Zen Petrix Diaz Sentana Tanto', 'zen@contoh.com', 2),
(111, 'nurul-TI', 'sN37FD5u', 'Nurul Atiqah Siregar', 'nurul@contoh.com', 2),
(112, 'muhammad-TI', 'bLeYMNcl', 'Muhammad Syahrizal', 'muhammad@contoh.com', 2),
(113, 'farhan-TI', 'lADP#*Yd', 'Farhan Ahmad Pangistu', 'farhan@contoh.com', 2),
(114, 'sindy-TI', 'OHKAyIfP', 'Sindy Ariani', 'sindy@contoh.com', 2),
(115, 'godblessus-TI', 'm48*aD2M', 'Godblessus Simaremare', 'godblessus@contoh.com', 2),
(116, 'sheren-TI', '75Y7eEI6', 'Sheren Alvionita S', 'sheren@contoh.com', 2),
(117, 'tazrian-TI', '4GYMhtIv', 'Tazrian Husna', 'tazrian@contoh.com', 2),
(118, 'amatul-TI', '2Zt#749T', 'Amatul Noor Damanik', 'amatul@contoh.com', 2),
(119, 'm.-TI', 'uP0WTfLh', 'M. Firdaus Zamzami', 'm.@contoh.com', 2),
(120, 'legi-TI', 'L5WHmf$J', 'Legi Maria Silaban', 'legi@contoh.com', 2),
(121, 'lira-TI', '$SKsySw6', 'Lira Savina', 'lira@contoh.com', 2),
(122, 'intan-TI', 'wMHAY4SC', 'Intan Juwita Manurung', 'intan@contoh.com', 2),
(123, 'riyadh-TI', '*EMPSznY', 'Riyadh Abdur Razak Ridwan', 'riyadh@contoh.com', 2),
(124, 'm.-TI', '84AqWBIX', 'M. Mahdan Lutfiandy H', 'm.@contoh.com', 2),
(125, 'josua-TI', 'Zj$puQjb', 'Josua Ronaldo Pandiangan', 'josua@contoh.com', 2),
(126, 'suryana-TI', 'g7oGYKIV', 'Suryana Meissarah zaini', 'suryana@contoh.com', 2),
(127, 'chrismario-TI', 'mULhSy5N', 'Chrismario Linear', 'chrismario@contoh.com', 2),
(128, 'said-TI', 's0y7SFjv', 'Said Farhan', 'said@contoh.com', 2),
(129, 'muhammad-TI', 'Dyp25rWt', 'Muhammad Taufiq Purba', 'muhammad@contoh.com', 2),
(130, 'm.-TI', 'jywYLh$y', 'M. Ruchyat Siregar', 'm.@contoh.com', 2),
(131, 'andrea-TI', 'vtEC4pEo', 'Andrea Vicalina', 'andrea@contoh.com', 2),
(132, 'randi-TI', 'sz*8gqJb', 'Randi Qodri Pulungan', 'randi@contoh.com', 2),
(133, 'wanda-TI', 'X7CojUe9', 'Wanda Khalishah', 'wanda@contoh.com', 2),
(134, 'bobby-TI', '#f#hCgCL', 'Bobby Berkat Ezra Zebua', 'bobby@contoh.com', 2),
(135, 'monang-TI', '0$LmBh5c', 'Monang Limbong', 'monang@contoh.com', 2),
(136, 'claudia-TI', 'tAKFucN7', 'Claudia Sabrina Wilhelmina S', 'claudia@contoh.com', 2),
(137, 'shirleen-TI', 'pUBReZOb', 'Shirleen Shohan', 'shirleen@contoh.com', 2),
(138, 'brian-TI', 'PJEYqlmL', 'Brian Simanjuntak', 'brian@contoh.com', 2),
(139, 'Franklin-TI', 'xzHgeka4', 'Franklin', 'Franklin@contoh.com', 2),
(140, 'iqbal-TI', 'Cn9iJYOj', 'Iqbal Fakhriza', 'iqbal@contoh.com', 2),
(141, 'erikson-TI', 'SF6vfyvb', 'Erikson Andre', 'erikson@contoh.com', 2),
(142, 'grace-TI', 'zxX6dg0H', 'Grace Ogestin Pasaribu', 'grace@contoh.com', 2),
(143, 'kesia-TI', 'b#W9UucE', 'Kesia Ruth Sandra Purba', 'kesia@contoh.com', 2),
(144, 'aulia-TI', '8LP4duR5', 'Aulia Rahman Patomuan S', 'aulia@contoh.com', 2),
(145, 'andi-TI', '8iGkt4u#', 'Andi Farras Thariq ', 'andi@contoh.com', 2),
(146, 'sinthia-TI', 'EuvvNiaj', 'Sinthia Audrey', 'sinthia@contoh.com', 2),
(147, 'karvin-TI', '11GLBSPl', 'Karvin Halim', 'karvin@contoh.com', 2),
(148, 'annisa-TI', 'r20Ti4@F', 'Annisa Amaliah Nasution', 'annisa@contoh.com', 2),
(149, 'dafa-TI', 'fg@8ZPcl', 'Dafa Al Fitrah', 'dafa@contoh.com', 2),
(150, 'windy-TI', 'RY5n#v4a', 'Windy Artika', 'windy@contoh.com', 2),
(151, 'rizky-TI', 'ytDpnG3p', 'Rizky Alwi Sebayang', 'rizky@contoh.com', 2),
(152, 'gideon-TI', 'Ti75DbeN', 'Gideon Christ Gilberio G', 'gideon@contoh.com', 2),
(153, 'grace-TI', 'xqPvkgJl', 'Grace Patricia Siregar', 'grace@contoh.com', 2),
(154, 'sayid-TI', 'Zj7rbpn*', 'Sayid Farhan', 'sayid@contoh.com', 2),
(155, 'devi-TI', '@aj21VfY', 'Devi Aprilia', 'devi@contoh.com', 2),
(156, 'janstine-TI', 'qVp5Wlh4', 'Janstine Firstiandy', 'janstine@contoh.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
