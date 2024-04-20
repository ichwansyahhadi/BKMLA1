-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 07:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bakamla1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `email`, `phone`, `birthday`, `address`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@bakamla.com', '', '1991-01-01', 'Rumah aja', '2017-02-22', '2017-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id` int(11) NOT NULL,
  `id_story` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `read` int(11) NOT NULL DEFAULT 0,
  `parent_id` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_comment`
--

INSERT INTO `tb_comment` (`id`, `id_story`, `id_user`, `comment_name`, `comment`, `read`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'eleanor', 'Wonderfull places...', 1, NULL, '2017-02-19 00:00:00', '2017-02-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `id` int(11) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `geo_lang` decimal(10,8) DEFAULT NULL,
  `geo_long` decimal(11,8) DEFAULT NULL,
  `province` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id`, `img_path`, `title`, `description`, `date_start`, `date_end`, `geo_lang`, `geo_long`, `province`, `city`, `created_by`, `created_at`, `updated_at`) VALUES
(14, 'assets/upload/3.JPG', 'coba judul', '<p>coba judulcoba judulcoba judulcoba judulcoba judul</p>', '2024-04-20', '2024-04-20', '0.00000000', '0.00000000', '11|ACEH', NULL, 1, '2024-04-19', '2024-04-20'),
(15, 'assets/upload/testUpload1.png', 'ini judul 2', '<p>ini deskripsi nya</p><p>ini deskripsi nya</p><p>ini deskripsi nya</p><p>ini deskripsi nya</p><p>ini deskripsi nya</p>', '2024-04-20', '2024-04-20', '0.00000000', '0.00000000', '18|LAMPUNG', NULL, 1, '2024-04-20', '2024-04-20'),
(16, 'assets/upload/QHskTXye3IKropr6C9jX.png', 'judul 3', '<p>isi berita ke 3</p>', '2024-04-20', '2024-04-20', '0.00000000', '0.00000000', '11|ACEH', NULL, 1, '2024-04-20', '2024-04-20'),
(17, 'assets/upload/aVm0c0FE524jhhkvxUET.jpg', 'ini judul 4', '<p>berita ke 4</p>', '0000-00-00', '0000-00-00', '0.00000000', '0.00000000', '11|ACEH', NULL, 1, '2024-04-20', '2024-04-20'),
(18, 'assets/upload/IMeOoESZK6luQKJlgywS.png', 'ini judul ke 5', '<p><br></p><p>ini berit ake 5</p><p>ini berit ake 5</p><p>ini berit ake 5</p><p>ini berit ake 5</p><p>ini berit ake 5</p>', '2024-04-20', '2024-04-20', '0.00000000', '0.00000000', '11|ACEH', NULL, 1, '2024-04-20', '2024-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id`, `provinsi`) VALUES
(11, 'ACEH'),
(12, 'SUMATERA UTARA'),
(13, 'SUMATERA BARAT'),
(14, 'RIAU'),
(15, 'JAMBI'),
(16, 'SUMATERA SELATAN'),
(17, 'BENGKULU'),
(18, 'LAMPUNG'),
(19, 'KEPULAUAN BANGKA BELITUNG'),
(21, 'KEPULAUAN RIAU'),
(31, 'DKI JAKARTA'),
(32, 'JAWA BARAT   '),
(33, 'JAWA TENGAH'),
(34, 'DI YOGYAKARTA'),
(35, 'JAWA TIMUR '),
(36, 'BANTEN    '),
(51, 'BALI'),
(52, 'NUSA TENGGARA BARAT'),
(53, 'NUSA TENGGARA TIMUR'),
(61, 'KALIMANTAN BARAT'),
(62, 'KALIMANTAN TENGAH'),
(63, 'KALIMANTAN SELATAN'),
(64, 'KALIMANTAN TIMUR'),
(65, 'KALIMANTAN UTARA'),
(71, 'SULAWESI UTARA'),
(72, 'SULAWESI TENGAH'),
(73, 'SULAWESI SELATAN'),
(74, 'SULAWESI TENGGARA'),
(75, 'GORONTALO'),
(76, 'SULAWESI BARAT'),
(81, 'MALUKU'),
(82, 'MALUKU UTARA'),
(91, 'PAPUA BARAT'),
(94, 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide_items`
--

CREATE TABLE `tb_slide_items` (
  `id` int(11) NOT NULL,
  `headline` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_story`
--

CREATE TABLE `tb_story` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `geo_lang` decimal(10,8) DEFAULT NULL,
  `geo_long` decimal(11,8) DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  `province` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `read` int(11) NOT NULL DEFAULT 0,
  `price` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_story`
--

INSERT INTO `tb_story` (`id`, `id_user`, `img_path`, `title`, `description`, `geo_lang`, `geo_long`, `id_category`, `province`, `city`, `read`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/images/blog/blogTrav2.jpg', 'Surga di Selatan Pulau Jawa', 'Pulau Sempu adalah sebuah pulau kecil yang terletak di sebelah selatan Pulau Jawa secara administratif berada di Desa Tambakrejo, Kecamatan Sumbermanjing Wetan, Kabupaten Malang, Jawa Timur. Pulau yang ditumbuhi pepohonan tropis seluas 877 hektar ini adalah cagar alam yang di kelola oleh Balai Konservasi Sumber Daya Alam Jawa Timur (BBKSDA) dan Departemen Kehutanan Indonesia. Secara resmi tempat ini diakui sebagai cagar alam sejak 1928 pada masa pemerintahan Hindia Belanda.\r\n\r\nSecara geografis, Pulau Sempu terletak di antara 112° 40? 45? - 112° 42? 45? bujur timur dan 8° 27? 24? - 8° 24? 54? lintang selatan. Pulau itu memiliki luas sekitar 877 hektare, berbatasan dengan Selat Sempu (Sendang Biru) dan dikepung Samudera Indonesia di sisi selatan, Timur dan Barat.\r\n\r\nPulau Sempu memiliki berbagai jenis ekosistem mulai dari hutan pantai, hutan bakau, dan hutan tropis dataran rendah yang mendominasi seluruh pulau. Vegetasi yang ditemukan di Pulau Sempu diantaranya adalah bendo (Artocarpus elasticus), triwulan (Terminalia), wadang (Pterocarpus javanicus), ketapang (Terminalia catappa), waru laut (Hibiscus tiliaceus), pandan (Pandanus tectorius), Mangrove (Rhizophora mucronata dan Rhizophora apiculata), dan banyak lagi. Menariknya, nama Sempu dikatakan diambil dari nama salah satu jenis pohon yang ditemukan di pulau itu, namun pohon tersebut hampir sulit ditemukan saat ini.\r\n\r\nSebagai cagar alam, Pulau Sempu terlarang dikunjungi untuk tujuan wisata . Tetapi kenyataannya, Pulau Sempu masih saja diperbolehkan untuk kegiatan wisata oleh pihak pengelola yang tentunya bertolak belakang dengan status Pulau Sempu.', '-8.44067800', '112.69693000', 1, 'East Java', 'Malang', 1, NULL, '2017-02-19 00:00:00', '2017-02-19 00:00:00'),
(2, 1, 'assets/images/slider/bgtrav1.jpg', 'Raja Ampat Islands, Indonesia', 'Raja Ampat or The Four Kings is a famous island located off the northwest tip of Bird\'s Head Peninsula on the island of New Guinea, in Indonesia\'s West Papua Province. It is well known as a diving heaven for people around the world. \r\nRaja Ampat covers 9.8 million acres of land and sea, home to 540 types of corals, 1,000 types of coral fish and 700 types of mollusks. It makes Raja Ampat as the most diverse living library for world’s coral reef and underwater biota. Beside that, Raja Ampat has a beautiful scenery, especially from its underwater corals and its beach. \r\nUnder the water of Raja Ampat Island, we can see many natural coral’s reef that never touched by human. We can also see many fishes that have many colors and types. They usually hide between the coral reefs to take a rest or brood their eggs. Not only that, we can see many war planes and ships that sunken in World War II\r\nBecause of its beautiful underwater scenery, many tourists come to Raja Ampat island. They come from Indonesia or from the other country. They come to Raja Ampat by plane or by ship, but most tourists go to Raja Ampat by plane to shorten their trip time.\r\nThere are many things that you can see also beside the underwater scenery. You can meet many fishermen around the beach, some of them become the tourist guide for the foreign tourists. The fishermen are very friendly and they will offer you “Pinang” (betel nuts) or some sweet candies. ', NULL, NULL, 1, 'West Papua', 'Waisai', 1, NULL, '2017-02-24 00:00:00', '2017-02-24 00:00:00'),
(3, 1, 'assets/images/slider/bgtrav2.jpg', 'Mount Bromo National Park', 'Mount Bromo (Indonesian: Gunung Bromo), is an active volcano and part of the Tengger massif, in East Java, Indonesia. At 2,329 metres (7,641 ft) it is not the highest peak of the massif, but is the most well known. The massif area is one of the most visited tourist attractions in East Java, Indonesia. The volcano belongs to the Bromo Tengger Semeru National Park. The name of Bromo derived from Javanese pronunciation of Brahma, the Hindu creator god.\r\n\r\nMount Bromo sits in the middle of a plain called the \"Sea of Sand\" (Javanese: Segara Wedi or Indonesian: Lautan Pasir), a protected nature reserve since 1919. The typical way to visit Mount Bromo is from the nearby mountain village of Cemoro Lawang. From there it is possible to walk to the volcano in about 45 minutes, but it is also possible to take an organised jeep tour, which includes a stop at the viewpoint on Mount Penanjakan (2,770 m or 9,088 ft) (Indonesian: Gunung Penanjakan). The viewpoint on Mount Penanjakan can also be reached on foot in about two hours.\r\n\r\nDepending on the degree of volcanic activity, the Indonesian Centre for Volcanology and Disaster Hazard Mitigation sometimes issues warnings against visiting Mount Bromo.\r\n\r\nOn the fourteenth day of the Hindu festival of Yadnya Kasada, the Tenggerese people of Probolinggo, East Java, travel up the mountain in order to make offerings of fruit, rice, vegetables, flowers and sacrifices of livestock to the mountain gods by throwing them into the caldera of the volcano. The origin of the ritual lies in the 15th century legend where a princess named Roro Anteng started the principality of Tengger with her husband, Joko Seger. The couple were childless and therefore beseeched the assistance of the mountain gods. The gods granted them 24 children but stipulated that the 25th child, named Kesuma, must be thrown into the volcano as a human sacrifice. The gods\' request was implemented. The tradition of throwing sacrifices into the volcano to appease these ancient deities continues today and is called the Yadnya Kasada ceremony. Though fraught with danger, some locals risk climbing down into the crater in an attempt to recollect the sacrificed goods that they believe could bring them good luck.\r\n\r\nOn the Segara Wedi sand plain sits a Hindu temple called Pura Luhur Poten. The temple holds a significant importance to the Tenggerese scattered across the mountain villages, such as Ngadisari, Wonokitri, Ngadas, Argosari, Ranu Prani, Ledok Ombo and Wonokerso. The temple organises the annual Yadnya Kasada ceremony which lasts for about one month. On the 14th day, the Tenggerese congregate at Pura Luhur Poten to ask for blessings from Ida Sang Hyang Widi Wasa and the God of Mahameru (Mount Semeru). Then the crowd proceeds along the crater edges of Mt Bromo where offerings are thrown into the crater. The major difference between this temple and Balinese ones are the type of stones and building materials. Pura Luhur Poten uses natural black stones from volcanoes nearby, while Balinese temples are mostly made from red bricks. Inside this pura, there are several buildings and enclosures aligned in a mandala zone composition.', NULL, NULL, 1, 'East Java', NULL, 1, NULL, '2017-02-24 00:00:00', '2017-02-24 00:00:00'),
(4, 1, 'assets/images/slider/bgtrav3.jpg', 'Laguna Waterfall, The sister of Iguazu Waterfall', 'Natural attractions can be found in many places in Indonesia. But for those who are in big cities like Jakarta, you might have trouble finding nature because it is in big cities have a bit of nature that can be visited. If you want a tour of nature, you have to get out of town or even out of the island where there are still many various kinds of nature. Good beach, sea, or waterfalls can be visited as a natural attraction that can help you release your tired after a long day of work.One of the islands that still have a wide variety of natural attractions is Sulawesi. The island is located in the eastern part of Indonesia has indeed been well known for a wide variety of beautiful natural attractions. One of the tour\'s most famous Sulawaesi is underwater Bunaken national park near the city of Manado. In addition to the Park, you can visit other natural attractions such as the islands - other small islands are located around the island of Sulawesi. If you want to visit the beach is clean and beautiful, then you must visit Sulawesi because in this place there are lots of beaches are clean and beautiful.One of the tourist attractions in Sulawesi, which has exceptional natural beauty is the Waterfall lagoon. Indeed, the waterfall does have a beauty that is different than the other, especially if the waterfall has a height high enough, the water drops will be more beautiful. This waterfall is located in Sorawolio, about 24 kilometers from Bau-Bau, Southeast Sulawesi and waterfalls even become the most beautiful waterfalls in Indonesia. For those of you who want to hunt for photos, then this is the right place to visit.This waterfall flowing in the middle of dense pine forests and provide a panorama of outstanding natural beauty. In addition, water is also very clear and when dropped from a height provides a cool atmosphere that you can not get in a big city densely populated. Therefore do not be surprised if you want to linger - long at the venue. not infrequently also you can see a wide variety of beautiful birds that are in the pine forest. Therefore if you want a vacation with a different atmosphere then you can visit a waterfall lagoon in Sulawesi.', NULL, NULL, 1, 'Southeast Sulawesi', 'Bau Bau', 1, NULL, '2017-02-24 00:00:00', '2017-02-24 00:00:00'),
(5, 3, './data/3/Bunker_Kaliadem_Merapi_tour.JPG', 'Bunker Kaliadem Merapi tour', '<p>Buker yang bertempat di merapi</p>', NULL, NULL, 1, NULL, NULL, 1, NULL, '2017-04-17 00:00:00', '2017-04-17 00:00:00'),
(6, 3, './data/3/Danau_Buyan.JPG', 'Danau Buyan', '<p>Danau Buyan yang dingin<br></p>', NULL, NULL, 1, NULL, NULL, 1, '100000', '2017-05-21 00:00:00', '2017-05-21 00:00:00'),
(7, 3, './data/3/De_mata_trick_eye_museum.JPG', 'De Mata Trick eye', '<p>Setidaknya 120 gambar tiga dimensi tampak memenuhi dinding area basement &nbsp;Gedung Umar Kayam, Pasar Seni &nbsp;XT-Square, Yogyakarta. Terlihat banyak &nbsp;orang bergantian menunggu giliran untuk dapat berpose di depan &nbsp;gambar-gambar super besar yang mampu membelalakkan mata tersebut. Ada &nbsp;yang memilih untuk memanjat sebatang bambu bersama seekor panda lucu, &nbsp;ada pula yang tiba-tiba menjadi begitu kebal karena berhasil tidur tanpa &nbsp;terluka di atas ratusan paku menganga. Semuanya dapat dilakukan di &nbsp;ruang berlabirin seluas 1600 meter persegi ini.</p>', NULL, NULL, 2, NULL, NULL, 1, '80000', '2017-05-22 00:00:00', '2017-05-22 00:00:00'),
(8, 3, './data/3/Dieng_Plateau.JPG', 'Dieng Plateau', '<p><strong>Dieng Plateau</strong> berada pada ketinggian 2093 mdpl, &nbsp;terletak di antara dua kabupaten Banjarnegara dan Wonosobo. &nbsp;Pemandangannya sangat indah dan sejak dulu sudah menjadi pusat &nbsp;perkembangan kebudayaan di Indonesia. Sekitar akhir abad ke-19, sudah &nbsp;banyak wisatawan berkunjung dan berwisata ke <strong>Dieng Plateau</strong> terutama Bangsa Belanda. Jelajahi wisata Dieng Plateau di Jawa Tengah, &nbsp;Indonesia dan temukan 1001 keunikan alam dan budaya lokal yang paling &nbsp;khas.</p>', NULL, NULL, 1, NULL, NULL, 1, '100.000 - 500.000', '2017-05-22 00:00:00', '2017-05-22 00:00:00'),
(9, 3, './data/3/Jatiluwih.JPG', 'Jatiluwih', '<p>Ingin menikmati suasana pedesaan yang masih tenang, asri, dan alami di &nbsp;pulau Dewata, maka anda bisa dapatkan dengan berkunjung ke sawah &nbsp;terasering Jatiluwih Bali. <a href=\"https://www.rentalmobilbali.net/tempat-wisata-di-bali/\">Tempat wisata di Bali</a> bagian barat memang menjadi tujuan wisata, bagi wisatawan yang ingin &nbsp;menghilangkan kepenatan dengan suasana perkotaan yang penuh keramaian.</p>', NULL, NULL, 1, NULL, NULL, 1, '520.000 - 547.000', '2017-05-22 00:00:00', '2017-05-22 00:00:00'),
(10, 3, './data/3/Kawah_Putih_Ciwidey.JPG', 'Kawah Putih Ciwidey', '<p><a href=\"http://kawahputihciwidey.com/\" target=\"_blank\"><strong>Kawah Putih</strong></a><span>&nbsp;adalah sebuah tempat wisata di Jawa Barat yang terletak di kawasan Ciwidey. Kawah putih merupakan sebuah danau yang terbentuk dari letusan Gunung Patuha. Tanah yang bercampur belerang di sekitar kawah ini berwarna putih, lalu warna air yang berada di kawah ini berwarna putih kehijauan, yang unik dari kawah ini adalah airnya kadang berubah warna. Kawah ini berada pada ketinggian +2434 m dpl dibawah puncak/titik tertinggi Gunung Patuha.</span></p>', NULL, NULL, 1, NULL, NULL, 1, '50.000 - 100.000', '2017-05-22 00:00:00', '2017-05-22 00:00:00'),
(11, 3, './data/3/Merapi_Jeep_tour.JPG', 'Merapi Jeep tour', '<p><em><strong>Wisata Jeep Offroad Merapi Lava Tour saat ini masih menjadi wisata &nbsp;primadona bagi wisatawan yang datang di Jogja. Jam Operasional Paket &nbsp;jeep merapi lava tour jam 07.00 sd 16.00 WIB. Khusus Paket Sunrise &nbsp;Merapi Lava tour dimulai Jam 04.30. WIB. Harga Paket Jeep Lava Tour rute &nbsp;pendek Rp.400.000,-/Jeep, Rp. Rute menengah Rp. 500.000,/Jeep, Rute &nbsp;Panjang Rp. 650.000,- dan Paket Sunrise Merapi Lava Tour Rp. &nbsp;450.000,-/Jeep. 1 jeep kapasitas untuk maksimal 4 orang dewasa. Harag &nbsp;tersebut dapat berubah sewatu waktusesuai situasi dan kondisi. Selain 4 &nbsp;Paket Merapi Lava tour di atas ada Juga Paket Lava tour Merapi khusus &nbsp;untuk kegiatan fun outing perusahan atau Family Gathering Perusahaan. &nbsp;Diantaranya Paket Lava tour Merapi dan Kaliurang Cycling Tours, Paket &nbsp;Merapi Lava tour dan Fun game outbound atau &nbsp;Paket AmazingVillage Tour. &nbsp;Berikut Detail Harga, kegiatan dan Rute Paket Lava Tour Merapi dengan &nbsp;jeep:</strong></em></p>', NULL, NULL, 1, NULL, NULL, 1, '500.000 - 1.000.000', '2017-05-22 00:00:00', '2017-05-22 00:00:00'),
(12, 3, './data/3/Kawah_Sikidang_-_Dieng.JPG', 'Kawah Sikidang - Dieng', '<p>Kawah Sikidang Dieng termasuk obyek wisata unggulan Dieng yang wajib &nbsp;dikunjungi. Di antara kawah-kawah lainnya di Dieng, Kawah Sikidang &nbsp;adalah yang paling mudah dicapai dan dinikmati karena terletak di tanah &nbsp;datar. Kawah Sikidang Dieng juga terkenal dengan fenomena kolam kawahnya &nbsp;yang bisa berpindah atau melompat dalam satu kawasan yang luas. Itulah &nbsp;sebabnya Kawah Sikidang menjadi salah satu dari banyak kawah di kawasan &nbsp;wisata Dataran Tinggi Dieng yang paling diminati. Tiap minggu wisatawan &nbsp;berbondong-bondong menyaksikan aktivitas vulkanik yang dengan mudah bisa &nbsp;disaksikan langsung.</p>', NULL, NULL, 1, NULL, NULL, 1, '10.000 - 50.000', '2017-05-22 00:00:00', '2017-05-22 00:00:00'),
(13, 3, './data/3/Kebun_Raya_Bali_Bedugul.jpg', 'Kebun Raya Bali Bedugul', '<p>Kebun Raya Bali adalah sebuah kebun botani terbesar di Indonesia yang terletak di wilayah Kabupaten Tabanan, Bali, Indonesia. Kebun ini merupakan kebun raya pertama yang didirikan oleh putra bangsa Indonesia.<span>&nbsp;<a data-ved=\"0ahUKEwjpur-6moPUAhUKrY8KHUVkBOcQmhMInAEwEg\" href=\"https://id.wikipedia.org/wiki/Kebun_Raya_Bali\">Wikipedia</a></span></p>', NULL, NULL, 1, NULL, NULL, 1, '9.000 - 50.000', '2017-05-22 00:00:00', '2017-05-22 00:00:00'),
(14, 3, './data/3/Merapi_mini_museum.JPG', 'Merapi mini museum', '<p>Setelah sisa-sisa harta yang terkumpul cukup banyak dan mampu menarik &nbsp;banyak pengunjung, rumah milik Sriyanto tersebut disulap menjadi sebuah &nbsp;museum sederhana yang dikenal dengan nama Museum Mini Sisa Hartaku.</p>', NULL, NULL, 2, NULL, NULL, 1, '0', '2017-05-22 00:00:00', '2017-05-22 00:00:00'),
(15, 3, './data/3/Mie_Ongklok_Wonosobo.jpg', 'Mie Ongklok Wonosobo', '<p>Mienya sih seperti layaknya olahan mie &nbsp;lain, menggunakan mie kuning. Yang membedakan adalah campurannya. Kalau &nbsp;olahan mie lain biasa menggunakan tauge atau sawi sebagai campurannya, &nbsp;Mie Ongklok mencampur kubis dan kucai sebagai sayurannya. Mie dan &nbsp;potongan sayuran ditata sedemikian rupa sehingga membentuk kerucut lalu &nbsp;diguyur kuah kental. Nah, kuah inilah yang membuat Mie Ongklok terasa &nbsp;istimewa, lezat membuai lidah. Olahan mie lain gak ada deh yang nyamain.</p><p>Setelah saya cari tahu sana sini, &nbsp;ternyata yang membuat kuah Mie Ongklok ini terasa nikmat adalah karena &nbsp;terbuat dari campuran saripati singkong, gula merah dan udang kering, &nbsp;yang disempurnakan dengan bumbu kacang, juga taburan lada dan bawang &nbsp;goreng. Cara membuat Mie Ongklok juga unik. Mie beserta sayuran &nbsp;dimasukkan ke dalam wadah berupa saringan bambu, lalu dicelup-celupkan &nbsp;saja ke dalam air mendidih. Beda, kan, dengan olahan mie lain yang biasa &nbsp;diolah dengan cara direbus begitu saja?!</p>', NULL, NULL, 1, NULL, NULL, 1, '10.000', '2017-05-22 12:11:17', '2017-05-22 12:11:17'),
(16, 5, './data/5/Borobudur_2.JPG', 'Borobudur Temple', '<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p><p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p><p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p>', NULL, NULL, 2, NULL, NULL, 1, '500000', '2017-05-24 03:25:15', '2017-05-24 03:25:15'),
(17, 5, './data/5/kalibiru2.JPG', 'The Wonderfull Kalibiru', '<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p><p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p>', NULL, NULL, 1, NULL, NULL, 1, '500000', '2017-05-24 03:29:21', '2017-05-24 03:29:21'),
(18, 5, './data/5/Hutan_Pinus_Mangunan_1.jpg', 'Pinus Forest Magunan', '<p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p><p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p><p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p>', NULL, NULL, 1, NULL, NULL, 1, '700000', '2017-05-24 03:33:36', '2017-05-24 03:33:36'),
(19, 5, './data/5/Candi_2_Gedong_Songo.jpg', 'Gedong Songo Temple', '<p><span style=\"font-size: 12px;\"><span style=\"font-family: Arial,Helvetica,sans-serif;\">On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</span></span></p><p><span style=\"font-size: 12px;\"><span style=\"font-family: Arial,Helvetica,sans-serif;\">You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</span></span></p><p><span style=\"font-size: 12px;\"><span style=\"font-family: Arial,Helvetica,sans-serif;\">To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</span></span></p><p><span style=\"font-size: 12px;\"><span style=\"font-family: Arial,Helvetica,sans-serif;\">On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</span></span></p><p><span style=\"font-size: 12px;\"><span style=\"font-family: Arial,Helvetica,sans-serif;\">You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</span></span></p>', NULL, NULL, 2, NULL, NULL, 1, '10000', '2017-05-24 03:35:34', '2017-05-24 03:35:34'),
(20, 5, './data/5/Ayam_Ingkung.jpg', 'Delicious Ayam Ingkung', '<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p><p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p><p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p>', NULL, NULL, 3, NULL, NULL, 1, '100000', '2017-05-24 07:18:31', '2017-05-24 07:18:31'),
(21, 5, './data/5/empal_gentong-krucut.jpg', 'Empal Gentong Krucut', '<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p><p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p><p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p>', NULL, NULL, 3, NULL, NULL, 1, '100000', '2017-05-24 07:21:40', '2017-05-24 07:21:40'),
(22, 5, './data/5/Gudeg_Yu_Sum_2.JPG', 'The Legendary Gudeg ', '<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p><p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p><p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p>', NULL, NULL, 3, NULL, NULL, 1, '100000', '2017-05-24 07:28:14', '2017-05-24 07:28:14'),
(23, 5, './data/5/Lawang_Sewu3.jpg', 'Mystical Place Called \"Lawang Sewu\"', '<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p><p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p><p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p>', NULL, NULL, 2, NULL, NULL, 1, '0', '2017-05-24 07:43:32', '2017-05-24 07:43:32'),
(24, 5, './data/5/sam_poo_kong3.jpg', 'Sam Poo Kong', '<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p><p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p><p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p>', NULL, NULL, 2, NULL, NULL, 1, '0', '2017-05-24 07:47:24', '2017-05-24 07:47:24'),
(25, 5, './data/5/Sri_Gethuk.JPG', 'Sri Gethuk Waterfall', '<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p><p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p><p>To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p>', NULL, NULL, 1, NULL, NULL, 1, '0', '2017-05-24 07:51:21', '2017-05-24 07:51:21'),
(26, 7, './data/7/L9993879.jpg', 'Labuan Bajo', '<p>Pemandangan yang luar biasa dan tanpa editan, membuat diri engga beranjak dari tempat yang dulunya adalah bagian dari sebuah kelurahan sekaligus ibukota kecamatan Komodo juga merupakan ibukota Kabupaten Manggarai Barat, Nusa Tenggara Timur, Indonesia. Sekarang telah dikembangkan menjadi Kota Labuan Bajo.</p>', NULL, NULL, 1, '11|ACEH', NULL, 1, '900000000', '2017-06-10 04:15:35', '2017-06-12 05:51:24'),
(27, 7, './data/7/L9993966.JPG', 'Labuan Bajo', '<p>labuan bajo yang sekarang menjadi labuan bagi bangsa bangsa, hamparan laut biru dan bentangan pulau pulau kecil salah satunya adalah pulau komodo yang memiliki daya tarik tersendiri.<br></p>', NULL, NULL, 1, '11|ACEH', NULL, 1, '500000', '2017-06-10 04:23:09', '2017-07-03 07:09:59'),
(28, 7, './data/7/Gili_Nanggu_boat.jpg', 'Gili Nanggu boat', '<p>Untuk mencapai Gili Nanggu, Anda dapat menyewa boat dari pelabuhan &nbsp;Lembar dengan tarif yang disesuaikan dengan durasi waktu penyewaan dan jumlah penumpang yang akan menyebrang. Penyewaan boat ini &nbsp;dapat dipesan setiap saat. Tidak ada angkutan (kapal) umum ke sana &nbsp;mengingat lokasi Gili Nanggu adalah pulau pribadi.</p>', NULL, NULL, 1, '11|ACEH', NULL, 1, '6000', '2017-06-10 04:29:34', '2017-07-03 03:19:23'),
(29, 7, './data/7/YRS_6166.jpg', 'Gili Nanggu boat - Sunset Beach Villas', '<p>Gili Nanggu boat - Sunset Beach Villas</p>', NULL, NULL, 1, NULL, NULL, 1, '80000', '2017-06-10 04:37:12', '2017-06-10 04:37:12'),
(30, 7, './data/7/YRS_6171.jpg', 'Crystal Clear Water at Gili Nanggu', '<p>Untuk dapat menikmati pemandangan menakjubkan ini kita dapat menyebrang menggunakan kapal warga dari Pelabuhan Tawun Sekotong, dengan memesan tiket disana memalui petugas Pelabuhan.</p><p><br></p><p><br></p><p><br></p><p>Harga tiket bervariasi dan bisa juga disesuaikan dengan jumlah penumpang,</p>', NULL, NULL, 1, '11|ACEH', NULL, 1, '900000000', '2017-06-10 04:40:08', '2017-06-12 05:52:57'),
(31, 6, './data/6/L9994063(1).JPG', 'Sunset at Labuan Bajo', '<p>Labuan Bajo adalah kota nelayan yang terletak di ujung barat Flores di wilayah Nusa Tenggara dari timur <a href=\"http://anekatempatwisata.com/10-tempat-wisata-di-indonesia-yang-wajib-dikunjungi/\" target=\"_blank\">Indonesia</a>.</p><p>Yang sangat menarik dari Labuan Bajo adalah saat sunset mulai mengubah warna langit menjadi jingga.<br></p>', NULL, NULL, 1, NULL, NULL, 1, '000', '2017-06-10 04:40:10', '2017-06-10 04:40:10'),
(32, 6, './data/6/lombok_pantai_mawun_2.jpg', 'Pantai Mawun Lombok', '<p>Salah satu panorama alam daerah pantai yang ada pada Pulau Lombok yang &nbsp;belum banyak tersentuh oleh modernisasi yaitu Pantai Mawun.</p><p>Pantai yang berada di Desa Tumpak, Kecamatan Pujuk, Kabupaten Pulau &nbsp;Lombok Tengah tersebut cukup tersembunyi juga cukup jauh kalau harus ditempuh dari kota Mataram. Wisatawan harus menempuh perjalanan &nbsp;selama lebih kurang 2 jam dengan kendaraan bermotor untuk menuju ke &nbsp;lokasi Pantai Mawun.</p><p>Hamparan pasir pantai yang berwarna putih yang jadi ciri khas &nbsp;pantai-pantai pada Pulau Lombok juga bisa Anda temui disini. Keadaan &nbsp;pantai yang bersih dari sampah juga air berwarna biru jernih membuat &nbsp;suasana terasa tetap nyaman. Anda akan betah berlama-lama berada di &nbsp;pinggir pantai.<br></p>', NULL, NULL, 1, '52|NUSA TENGGARA BARAT', NULL, 1, '000', '2017-06-12 02:46:59', '2017-06-12 02:46:59'),
(33, 6, './data/6/Uluwatu_tari_kecak_2.jpg', 'Tari Kecak Uluwatu', '<p>Menonton sendratari Ramayana dan Tari Kecak di komplek Pura Uluwatu, &nbsp;Pecatu, Bali adalah salah satu aktivitas yang patut untuk dijajal saat &nbsp;berlibur ke Pulau Dewata</p><p>Pemilihan hari jadi hal yang penting jika Anda ingin mendapat tempat &nbsp;duduk terbaik, tak terhalang tamu yang lalu lalang karena datang &nbsp;terlambat atau kembali lebih awal.</p><p>Pertujukkan sendratari Ramayana dan Tari Kecak di komplek Pura Uluwatu &nbsp;diselenggarakan tiap hari pukul 18.00. Datanglah sekitar 15 menit acara &nbsp;sebelum dimulai untuk mendapatkan tempat duduk terbaik yang berada di &nbsp;bagian tengah tangga.&nbsp;</p><p><br></p><p><br></p>', NULL, NULL, 2, '51|BALI', NULL, 1, '000', '2017-06-12 02:54:54', '2017-06-12 02:54:54'),
(34, 6, './data/6/tanjung_Aan_2_Lombok.jpg', 'Pantai Tanjung Aan Lombok', '<p>Satu tempat yang harus masuk dalam daftar wisata Lombok Anda adalah <strong>Pantai Tanjung Aan</strong>, tempat asal Sang Puteri Mandalika. Tak seperti Pantai Lombok lainnya, pasir Pantai Tanjung Aan berbentuk bulat seperti merica.</p><p>Pantai Tanjung Aan ini dikelilingi oleh beberapa bukit. Anda bisa dengan &nbsp;mudah mencapai bukit tersebut, bila ingin melihat penamdangan Pantai &nbsp;Aan yang indah dari ketinggian.</p><p>Pantai Tanjung Aan sangat tepat bagi Anda yang gemar ber-snorkling dan &nbsp;berenang. Karena ombaknya yang cukup tenang dengan kedalaman yang &nbsp;relatif dangkal.</p><p><br></p>', NULL, NULL, 1, '52|NUSA TENGGARA BARAT', NULL, 1, '000', '2017-06-12 03:04:39', '2017-06-12 03:04:39'),
(35, 6, './data/6/Pantai_Seger_7.jpg', 'Pantai Seger Lombok', '<p>Lokasi Pantai Seger ini tidak terlalu jauh dari pantai Kuta Lombok. Sekitar 15 menit saja.</p><p>Pantai Seger ini terdiri atas beberapa bagian dimana masing-masing &nbsp;bagiannya dipisahkan oleh semacam bukit tapi tidak terlalu tinggi.</p><p>Dibandingkan pantai-pantai lainnya di Lombok Tengah, pantai Seger (dan &nbsp;juga pantai Kuta) cenderung lebih dikenal wisatawan. Di sekitaran pantai &nbsp;ini juga telah dibangun beberapa fasilitas untuk menunjang pariwisata &nbsp;terutama penginapan. Pantai ini cukup sering dijadikan lokasi surfing<br></p>', NULL, NULL, 1, '52|NUSA TENGGARA BARAT', NULL, 1, '000', '2017-06-12 03:15:58', '2017-06-12 03:15:58'),
(36, 7, './data/7/YRS_4414.jpg', 'Pemandian Air Panas (Aik Kalak) - Gunung Rinjani', '<p><span style=\"font-size: 14px;\">Salah satu yang menarik sekaligus manakjubkan dari Gunung Rinjani adalah Tempat Pemandian Air Panas (Air Kalak dalam bahasa sasak ), lokasi dari air kalak ini adalah disekir lereng Gunung Rinjani. Air Kalak adalah nama dari sumber air panas tersebut. Konon Pemandian ini adalah Tempat Pemandian Adipati Surabaya Raden Mas Jayanegara, tokoh utama dari pewayangan yang popular dikenal dikalangan Gumi Sasak.</span></p>', NULL, NULL, 2, '52|NUSA TENGGARA BARAT', NULL, 1, '900', '2017-06-12 06:29:14', '2017-06-12 06:31:03'),
(37, 7, './data/7/L1000325.jpg', 'Gunung Rinjani - Salah satu trekking terpopuler di Indonesia', '<p>Gunung Rinjani memiliki nilai spiritual tersendiri bagi umat hindu di pulau Bali dan suku sasak, menurut umat hindu Bali, Gunung Rinjani merupakan gunung suci yang dipercaya sebagai tempat tinggal para dewa selain <a href=\"http://www.brobali.com/2015/11/keindahan-di-puncak-gunung-agung.html\">Gunung Agung</a> dan <a href=\"http://www.brobali.com/2016/10/tips-dan-info-lengkap-pendakian-gunung-semeru.html\">semeru</a>.</p>', NULL, NULL, 1, '52|NUSA TENGGARA BARAT', NULL, 1, '900000000', '2017-06-13 07:37:15', '2017-06-13 07:37:15'),
(38, 7, './data/7/L1000323.jpg', 'Gunung Barujari - Danau segara Anak - Gunung Rinjani', '<p>Gunung rinjani merupakan gunung dengan tata letak terbaik di asia tenggara, Rinjani memiliki Segara Anak. Menurut warga setempat, Segara Anak bermakna anak laut. Hal itu karena air danau Segara Anak terlihat &nbsp;kebiru-biruan seperti air laut. Selain itu ada pemandangan luar biasa lainnya yaitu Kemegahan Gunung Batu Jari yang bisa diliat dari pinggiran danau. Gunung yang berada di tengah-tengah Danau Segara Anak ini mengeluarkan &nbsp;sulfur dari kawahnya.</p>', NULL, NULL, 1, '52|NUSA TENGGARA BARAT', NULL, 1, '9000000', '2017-06-19 07:44:21', '2017-06-19 07:45:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_slide_items`
--
ALTER TABLE `tb_slide_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_story`
--
ALTER TABLE `tb_story`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_slide_items`
--
ALTER TABLE `tb_slide_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_story`
--
ALTER TABLE `tb_story`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
