-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 12:41 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edumu_front`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(300) NOT NULL,
  `blog_image` varchar(100) NOT NULL,
  `blog_content` text NOT NULL,
  `create_date` date NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_image`, `blog_content`, `create_date`, `publish_date`) VALUES
(1, 'Tips Memilih Sekolah yang Sesuai untuk Anak', 'blog-1533030351.jpg', '<p><p style=\"text-align: justify;\">Perkembangan zaman membuat sebagian besar taraf kehidupan manusia berubah. Sekarang masyarakat lebih memiliki pandangan yang maju, dan tidak monoton. Begitupun dengan pandangan Masyarakat akan Pendidikan Sekolah. Mungkin, beberapa dekade sebelum sekarang sekolah masih dianggap tidak terlalu penting. Jika, mau sukses orang tersebut harus bekerja keras. Namun, saat ini persepsi tersebut sedikit terminimalisirkan dengan pola pikir yang semakin berubah. Hal tersebut menjadi faktor terbesar yang membuat berbagai lembaga pendidikan hadir dengan karakter yang pemiliki tonjolkan. Sekarang, yang namanya sekolah bukan hanya bangunan berdinding dengan meja dan bangku berderet untuk para pelajar melakukan proses transfer ilmu. Sekolah semakin memiliki arti luas, dengan hadirnya berbagai sekolah yang menyajikan hal yang berbeda.</p>\r\n\r\n<p style=\"text-align: justify;\">Salah satu contohnya adalah hadirnya Sekolah Alam. Seperti namanya Sekolah semacam ini tidak ada bangunannya. Para Pelajar bebas duduk diatas rumput, sambil mendengarkan seorang mentor membicarakan tema yang masih dibahas. Tidak sampai disitu, akhir-akhir ini Pendidikan Sekolah sedikit di hebohkan dengan sekolah-sekolah yang melebelkan dirinya sebagai sekolah internasional. Biasanya sekolah dengan lebel tersebut mendapat persepsi yang sangat bagus di mata masyarakat. Tidak heran kalau kemudian banyak orang tua yang bergairah untuk memasukan anaknya ke sekolah-sekolah tersebut. Apalagi setiap orang tua menginginkan yang terbaik untuk anaknya. Namun, ada yang lebih penting Anda perhatikan sebelum memutuskan hal tersebut untuk anak.</p>\r\n\r\n<p style=\"text-align: justify;\">Nah, berikut adalah beberapa tips yang bisa Anda ambil dan sebagai bahan pertimbangan untuk memilih Sekolah yang sesuai untuk Anak.</p>\r\n\r\n<p style=\"text-align: justify;\">1. Ketahui kemampuan pengajar. Sekolah yang memiliki reputasi tinggi tentu memiliki pengajar yang berkualitas bagus. Ingat, di sekolah guru adalah orang tua kedua dari anak Anda. Jadi, usahakan guru yang nantinya mendamping anak adalah mereka yang bisa berkomunikasi dengan baik kepada anak-anak.</p>\r\n\r\n<p style=\"text-align: justify;\">2. Karakter anak. Nah, ini dia hal yang paling penting Anda ketahui. Kenali karakter anak Anda, karena inilah point penting dimana anak Anda akan cepat beradaptasi atau tidak. Rasa nyaman adalah modal pertama untuk seorang anak berani. Sebenarnya ada banyak tips yang bisa Anda lakukan untuk mempermudah anak untuk mengenal dunia pendidikan sekolah.</p>\r\n\r\n<p style=\"text-align: justify;\"> </p>\r\n\r\n<p> </p></p>', '2018-08-02', '2018-08-02'),
(2, 'Apa Saja Kelebihan dari Aplikasi Sismart V1.2 di Indonesia ?', 'blog-1532665299.jpg', '<p><p style=\"text-align: justify;\">Secara umum, Indonesia merupakan negara dimana memiliki jumlah penduduk terbanyak ke-4 di dunia setelah Cina, India dan juga Amerika Serikat sehingga tidak menutup kemungkinan apabila tingkat AHH (Angka Harapan Hidup) yang sebagian besar didominasi oleh kalangan mudah yang masih mengenyam pendidikan di bangku sekolah cukup banyak sampai sekarang dan setiap hari akan terus berlanjut. Maka dari itu, untuk menunjangnya maka telah hadir salah satu Aplikasi Sekolah yang bernama Sismart V1.2 dan Saya sebagai salah satu guru di salah satu sekolah sudah berhasil membuktikan jika banyak sekali keistimewaan dan juga kelebihan yang mana hanya bisa ditemukan didalam aplikasi ini daripada jenis serupa lainnya di tanah air.</p>\r\n\r\n<p style=\"text-align: justify;\">Bagaimana tidak, jika dibandingkan secara seksama maka Saya bisa menyimpulkan bahwa Sismart V1.2 merupakan aplikasi terbaik yang mana sangat menunjang dalam Pendidikan Sekolah untuk aspek secara keseluruhan. Mengapa? Pasalnya, biasanya Saya selalu mengalami kesulitan untuk memberi materi dengan metode yang harus berbeda dari biasanya agar siswa/i tidak merasa bosan dan jenuh saat berada didalam kelas. Selain itu, pembahasan dan sistematika yang diberikan dari aplikasi ini terbukti sangat jelas dan ringkas untuk dipelajari serta dipelajari oleh murid maupun guru di sekolah. Saya bisa memberi kesimpulan bahwa Sismart V1.2 adalah aplikasi terbaik dan wajib dijadikan sebagai rekomendasi demi kemajuan sistem pendidikan di Indonesia menjadi jauh lebih baik.</p></p>', '2018-08-02', '2018-08-02'),
(3, 'Hadirnya Perpustakaan Online Untuk Pelajar . . ', 'blog-1532590499.jpg', '<p><p style=\"margin-left: 13.5pt; text-align: justify;\">Duta baca Indonesia Najwa Shihab pernah mengatakan bahwa angka penelitian akan gemar pembaca di Indonesia masih sangat memprihatinkan. Perbadingannya adalah hanya 1 Orang dari 100 0rang yang suka membaca. Biasanya salah satu hal yang menjadi alasan karena akses mereka mendapatkan buku. Perkataan tersebut yang kemudian membuat gerakan literasi di gaungkan diberbagai daerah. Najwa Shihab dan para teamnya bahwa bekerja sama dengan berbagai pihak untuk membuat budaya membaca semakin tumbuh dan mengakar di Indonesia. Nah, salah satunya adalah hadirnya perpustakaan online yang bisa diakses oleh siapapun, termasuk Pelajar. Kabar tersebut tentu menjadi kabar yang menyenangakan untuk Sekolah, yang masih mengembangkan berbagai aplikasi Sekolah berbasis digital.</p>\r\n\r\n<p style=\"margin-left: 13.5pt; text-align: justify;\">Syarat untuk mendapatkan aplikasi perpustakaan online inipun sangat mudah. Pelajar hanya perlu mendownload aplikasinya di Apps Store, dan proses pengunduhan akan berjalan seperti biasa. Setelah terpasang, Anda akan dimintai beberapa data yang harus diisi. Selanjutnya, Anda bebas membaca buku-buku dengan kulitas jempol dari perpustakaan online. Meraiknya lagi, aplikasi ini sudah secara otomatis mencatat tanggal pinjam dan mengembalian buku. Jadi, ketika Anda ingin meminjam buku, namun masih dipinjam Orang lain akan terlihat keterangan bahwa buku itu masih dipinjam. Aplikasi Sekolah membutuhkan hal seperti ini untuk menunjang minat  baca Pelajarnya. Salah satu cara yang bisa dilakukan memberikan ruang khusus literasi online di Sekolah. Bukan hanya membaca, Pelajarpun mendapatkan keahlian digital yang semakin meningkat.</p>\r\n\r\n<p style=\"margin-left: 13.5pt; text-align: justify;\">Banyak Orang mengatakan bahwa buku adalah jendela dunia. Namun, ketika jendela tersebut masih tetap tertutup rapat tentu Anda tidak bisa melihat dunia. Jadi, tidak ada salahnya kalau Anda baik Pelajar ataupun bukan selipkanlah 5 sampai 10 menit waktunya untuk membaca. Kemudahan apa lagi yang dicari? Anda tidak perlu memegang buku kemana-mana, Anda hanya perlu masuk ke aplikasi dan membacanya sambil nunggu bus Sekolah menjemput. Ketika Anda sudah suka membaca, Anda akan ketagihan. Nah, aplikasi Sekolah seperti inilah yang harus dimiliki oleh setiap Sekolah untuk menunjang kepedulian mereka terhadap minat baca anak mudanya.</p>\r\n\r\n<p style=\"margin-left:31.5pt\"> </p>\r\n\r\n<p style=\"margin-left:31.5pt\"> </p></p>', '2018-08-02', '2018-08-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
