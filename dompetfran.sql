-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for dompetfran
CREATE DATABASE IF NOT EXISTS `dompetfran` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dompetfran`;

-- Dumping structure for table dompetfran.dompet
CREATE TABLE IF NOT EXISTS `dompet` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referensi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `dompet_status_id_foreign` (`status_id`),
  CONSTRAINT `dompet_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `dompet_status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dompetfran.dompet: ~5 rows (approximately)
/*!40000 ALTER TABLE `dompet` DISABLE KEYS */;
INSERT INTO `dompet` (`id`, `nama`, `referensi`, `deskripsi`, `status_id`, `created_at`, `updated_at`) VALUES
	(1, 'Dompet Utama', '5270072502', 'Bank BCAX', '1', NULL, '2021-10-26 00:43:58'),
	(2, 'Dompet Tagihan Saya', '5270072503', 'Bank BCA', '2', NULL, '2021-10-26 00:31:29'),
	(3, 'Dompet Cadangan', '5270072504', 'Bank Permata', '1', NULL, '2021-10-26 01:06:38');
/*!40000 ALTER TABLE `dompet` ENABLE KEYS */;

-- Dumping structure for table dompetfran.dompet_status
CREATE TABLE IF NOT EXISTS `dompet_status` (
  `id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dompetfran.dompet_status: ~2 rows (approximately)
/*!40000 ALTER TABLE `dompet_status` DISABLE KEYS */;
INSERT INTO `dompet_status` (`id`, `nama`, `created_at`, `updated_at`) VALUES
	('1', 'Aktif', NULL, NULL),
	('2', 'Tidak Aktif', NULL, NULL);
/*!40000 ALTER TABLE `dompet_status` ENABLE KEYS */;

-- Dumping structure for table dompetfran.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dompetfran.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table dompetfran.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kategori_status_id_foreign` (`status_id`),
  CONSTRAINT `kategori_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `dompet_status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dompetfran.kategori: ~2 rows (approximately)
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` (`id`, `nama`, `deskripsi`, `status_id`, `created_at`, `updated_at`) VALUES
	(1, 'Pengeluaran', 'Kategori Untuk Pengeluaran', '1', NULL, NULL),
	(2, 'Pemasukan', 'Kategori untuk pemasukan', '1', NULL, NULL),
	(3, 'Lain-lainx', 'Kategori untuk lain-lainx', '2', NULL, '2021-10-26 12:35:08');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;

-- Dumping structure for table dompetfran.kategori_status
CREATE TABLE IF NOT EXISTS `kategori_status` (
  `id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dompetfran.kategori_status: ~0 rows (approximately)
/*!40000 ALTER TABLE `kategori_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `kategori_status` ENABLE KEYS */;

-- Dumping structure for table dompetfran.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dompetfran.migrations: ~10 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2014_10_12_000000_create_users_table', 1),
	(7, '2014_10_12_100000_create_password_resets_table', 1),
	(8, '2019_08_19_000000_create_failed_jobs_table', 1),
	(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(10, '2021_10_25_130948_create_dompet_status_table', 1),
	(11, '2021_10_25_131021_create_dompet_table', 1),
	(14, '2021_10_26_015517_create_kategori_status_table', 2),
	(15, '2021_10_26_015611_create_kategori_table', 2),
	(16, '2021_10_26_123933_create_transaksi_status_table', 3),
	(17, '2021_10_26_123941_create_transaksi_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table dompetfran.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dompetfran.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table dompetfran.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dompetfran.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table dompetfran.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `nilai` bigint(20) NOT NULL,
  `dompet_id` bigint(20) unsigned NOT NULL,
  `kategori_id` bigint(20) unsigned NOT NULL,
  `status_id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaksi_dompet_id_foreign` (`dompet_id`),
  KEY `transaksi_kategori_id_foreign` (`kategori_id`),
  KEY `transaksi_status_id_foreign` (`status_id`),
  CONSTRAINT `transaksi_dompet_id_foreign` FOREIGN KEY (`dompet_id`) REFERENCES `dompet` (`id`),
  CONSTRAINT `transaksi_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`),
  CONSTRAINT `transaksi_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `transaksi_status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dompetfran.transaksi: ~2 rows (approximately)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` (`id`, `kode`, `deskripsi`, `tanggal`, `nilai`, `dompet_id`, `kategori_id`, `status_id`, `created_at`, `updated_at`) VALUES
	(1, 'WIN00000001', 'Saldo Awal', '2019-03-08', 100000, 3, 2, '1', NULL, NULL),
	(2, 'WIN00000002', 'Gaji Bulan Januari', '2019-03-08', 3500000, 1, 2, '1', NULL, NULL),
	(3, 'WOUT00000003', 'Tagihan Listrik', '2019-03-08', -5000, 2, 1, '2', NULL, NULL),
	(4, 'WIN00000002', 'Gaji Bulan Februari', '2021-10-26', 3500000, 1, 2, '1', NULL, NULL),
	(5, 'WOUT00000003', 'Tagihan Udara', '2021-10-26', -9999, 2, 1, '2', NULL, NULL),
	(6, 'WIN00000002', 'Gaji Bulan Februari keluar', '2021-10-26', 3500000, 3, 1, '2', NULL, NULL),
	(7, 'WIN00000002', 'Gaji Bulan Februari samain', '2021-10-26', 3500000, 1, 2, '2', NULL, NULL),
	(8, 'WIN00000002', 'Gaji Bulan Februari samain', '2021-10-26', 3500000, 1, 1, '2', NULL, NULL);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

-- Dumping structure for table dompetfran.transaksi_status
CREATE TABLE IF NOT EXISTS `transaksi_status` (
  `id` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dompetfran.transaksi_status: ~2 rows (approximately)
/*!40000 ALTER TABLE `transaksi_status` DISABLE KEYS */;
INSERT INTO `transaksi_status` (`id`, `nama`, `created_at`, `updated_at`) VALUES
	('1', 'Masuk', NULL, NULL),
	('2', 'Keluar', NULL, NULL);
/*!40000 ALTER TABLE `transaksi_status` ENABLE KEYS */;

-- Dumping structure for table dompetfran.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table dompetfran.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
