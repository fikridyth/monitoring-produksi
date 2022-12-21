-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 04:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring-produksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_npwp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cust_id`, `cust_name`, `no_npwp`, `alamat1`, `alamat2`, `alamat3`, `no_telp`, `co_person`, `terms`, `created_at`, `updated_at`) VALUES
(1, 1001, 'PT.INTERNATIONAL FURNITURE INDUSTRIES', '02.192.849.6-058.000', 'JL.IRIAN RAYA Blok E No.23', 'KBN CAKUNG Kec.CILINCING - JAKARTA UTARA', 'DKI JAKARTA 14140', NULL, NULL, '60', '2022-04-01 13:10:25', '2022-12-19 13:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salesorder_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `shiptoaddress_id` bigint(20) UNSIGNED NOT NULL,
  `no_delivery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_jalan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_delivery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_delivery` date NOT NULL,
  `qty_delivery` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `salesorder_id`, `driver_id`, `shiptoaddress_id`, `no_delivery`, `surat_jalan`, `code_delivery`, `date_delivery`, `qty_delivery`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '900001', '1', '9000011', '2022-04-17', 1010, '2022-08-15 10:15:03', '2022-12-19 13:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_transport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inconterm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `driver`, `vehicle`, `no_transport`, `inconterm`, `created_at`, `updated_at`) VALUES
(1, 'Ade Hardiyana', 'Truk Box', 'B 9623 FCG', 'Karawang', '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `groupmastercards`
--

CREATE TABLE `groupmastercards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mastercard_id` bigint(20) UNSIGNED NOT NULL,
  `mc_induk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groupmastercards`
--

INSERT INTO `groupmastercards` (`id`, `mastercard_id`, `mc_induk`, `created_at`, `updated_at`) VALUES
(1, 1, 'DN 0788A', '2022-08-15 10:15:03', '2022-08-15 10:15:03'),
(2, 1, 'DN 0788B', '2022-08-15 10:15:03', '2022-08-15 10:15:03'),
(3, 2, 'FA 0788', '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `inquiryproducts`
--

CREATE TABLE `inquiryproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slipfinishgood_id` bigint(20) UNSIGNED NOT NULL,
  `slitter_product` int(11) DEFAULT NULL,
  `slitter_reject` int(11) DEFAULT NULL,
  `printing_product` int(11) DEFAULT NULL,
  `printing_reject` int(11) DEFAULT NULL,
  `slotter_product` int(11) DEFAULT NULL,
  `slotter_reject` int(11) DEFAULT NULL,
  `glue_product` int(11) DEFAULT NULL,
  `glue_reject` int(11) DEFAULT NULL,
  `pond_product` int(11) DEFAULT NULL,
  `pond_reject` int(11) DEFAULT NULL,
  `qty_finish` int(11) NOT NULL,
  `waste_product` int(11) NOT NULL,
  `qty_product` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiryproducts`
--

INSERT INTO `inquiryproducts` (`id`, `slipfinishgood_id`, `slitter_product`, `slitter_reject`, `printing_product`, `printing_reject`, `slotter_product`, `slotter_reject`, `glue_product`, `glue_reject`, `pond_product`, `pond_reject`, `qty_finish`, `waste_product`, `qty_product`, `created_at`, `updated_at`) VALUES
(1, 1, 1015, 5, 0, 0, 0, 0, 0, 0, 0, 0, 1010, 5, 1015, '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `invoicepos`
--

CREATE TABLE `invoicepos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchaseorder_id` bigint(20) UNSIGNED NOT NULL,
  `dibuat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoicepos`
--

INSERT INTO `invoicepos` (`id`, `purchaseorder_id`, `dibuat`, `created_at`, `updated_at`) VALUES
(1, 1, 'Fikri', '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `invoiceprs`
--

CREATE TABLE `invoiceprs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchaseorder_id` bigint(20) UNSIGNED NOT NULL,
  `dibuat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoiceprs`
--

INSERT INTO `invoiceprs` (`id`, `purchaseorder_id`, `dibuat`, `created_at`, `updated_at`) VALUES
(1, 1, 'Fikri', '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `invoiceraws`
--

CREATE TABLE `invoiceraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rawmaterial_id` bigint(20) UNSIGNED NOT NULL,
  `salesorder_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoiceraws`
--

INSERT INTO `invoiceraws` (`id`, `rawmaterial_id`, `salesorder_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_deliveries`
--

CREATE TABLE `invoice_deliveries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `delivery_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_deliveries`
--

INSERT INTO `invoice_deliveries` (`id`, `delivery_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_slips`
--

CREATE TABLE `invoice_slips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slipfinishgood_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_slips`
--

INSERT INTO `invoice_slips` (`id`, `slipfinishgood_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturingorders`
--

CREATE TABLE `manufacturingorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salesorder_id` bigint(20) UNSIGNED NOT NULL,
  `no_mo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_urut` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty_shortage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacturingorders`
--

INSERT INTO `manufacturingorders` (`id`, `salesorder_id`, `no_mo`, `no_urut`, `keterangan`, `qty_shortage`, `created_at`, `updated_at`) VALUES
(1, 1, '22040000001', 1, 'SHORTAGE', '10', '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `mastercards`
--

CREATE TABLE `mastercards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `no_mc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komposisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_box` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `substance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joint` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_warna` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_proses` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mastercards`
--

INSERT INTO `mastercards` (`id`, `customer_id`, `no_mc`, `komposisi`, `deskripsi`, `model_box`, `panjang`, `lebar`, `tinggi`, `substance`, `flute`, `joint`, `jumlah_warna`, `kode_proses`, `other`, `created_at`, `updated_at`) VALUES
(1, 1, 'DN 0788A', '1', 'KARTON BOX TOP IT-130970 HW-LW-OY-XX', 'F (TOP)', 1700, 860, 260, 'K200/M150X3/K200', 'CB', 'Lepas', '1', 'P2', '', '2022-08-15 10:15:03', '2022-08-15 10:15:03'),
(2, 1, 'FA 0788', '1', 'KARTON BOX TOP IT-130970 HW-LW-OY-XX', 'F (TOP)', 1000, 500, 150, 'K200/M150X3/K200', 'CB', 'Lepas', '1', 'P2', NULL, '2022-08-15 10:15:03', '2022-12-19 13:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_04_13_155811_create_customers_table', 1),
(4, '2022_04_13_164348_create_shiptoaddresses_table', 1),
(5, '2022_04_13_165116_create_mastercards_table', 1),
(6, '2022_04_13_191400_create_groupmastercards_table', 1),
(7, '2022_04_17_114536_create_salesorders_table', 1),
(8, '2022_04_17_220445_create_deliveries_table', 1),
(9, '2022_04_19_102249_create_invoice_deliveries_table', 1),
(10, '2022_04_19_163322_create_slipfinishgoods_table', 1),
(11, '2022_04_19_212803_create_invoice_slips_table', 1),
(12, '2022_04_29_133446_create_drivers_table', 1),
(13, '2022_05_01_164929_create_suppliers_table', 1),
(14, '2022_05_02_133913_create_purchaseorders_table', 1),
(15, '2022_05_02_225014_create_invoicepos_table', 1),
(16, '2022_05_02_225027_create_invoiceprs_table', 1),
(17, '2022_05_11_060742_create_rekaporders_table', 1),
(18, '2022_05_11_063030_create_rekapsuppliers_table', 1),
(19, '2022_05_11_070453_create_manufacturingorders_table', 1),
(20, '2022_05_12_094950_create_inquiryproducts_table', 1),
(21, '2022_05_19_094333_create_rawmaterials_table', 1),
(22, '2022_05_19_143117_create_invoiceraws_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorders`
--

CREATE TABLE `purchaseorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `no_sales` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_po` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_pr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panjang` int(11) NOT NULL,
  `lebar` int(11) NOT NULL,
  `lebar_paper` int(11) NOT NULL,
  `out_paper` int(11) NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `substance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` int(11) NOT NULL,
  `disc` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date_delivery` date NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchaseorders`
--

INSERT INTO `purchaseorders` (`id`, `supplier_id`, `no_sales`, `no_po`, `no_pr`, `no_item`, `date`, `desc`, `panjang`, `lebar`, `lebar_paper`, `out_paper`, `score`, `substance`, `flute`, `index`, `disc`, `qty`, `date_delivery`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, '2100001', 'WSL/PO/CMI/300001', 'WSL/PR/CMI/100001', '1', '2022-04-17', 'NETTO', 2080, 906, 1850, 2, '223-460-223', 'K150/M125X3/K150', 'CB', 7728, 15, 1000, '2022-04-25', 15545, '2022-08-15 10:15:03', '2022-12-19 10:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterials`
--

CREATE TABLE `rawmaterials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rekaporder_id` bigint(20) UNSIGNED NOT NULL,
  `slip_no` int(11) NOT NULL,
  `qty_perbundle` int(11) NOT NULL,
  `qty_bundle` int(11) NOT NULL,
  `last_bundle` int(11) DEFAULT NULL,
  `qty_pallet` int(11) NOT NULL,
  `pallet_no` int(11) NOT NULL,
  `total_received` int(11) DEFAULT NULL,
  `gr_date` date NOT NULL,
  `dibuat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rawmaterials`
--

INSERT INTO `rawmaterials` (`id`, `rekaporder_id`, `slip_no`, `qty_perbundle`, `qty_bundle`, `last_bundle`, `qty_pallet`, `pallet_no`, `total_received`, `gr_date`, `dibuat`, `created_at`, `updated_at`) VALUES
(1, 1, 9000001, 20, 50, 10, 1010, 1, 1010, '2022-04-25', 'Fikri', '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `rekaporders`
--

CREATE TABLE `rekaporders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchaseorder_id` bigint(20) UNSIGNED NOT NULL,
  `qty_po` int(11) DEFAULT NULL,
  `qty_kirim` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outstanding` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekaporders`
--

INSERT INTO `rekaporders` (`id`, `purchaseorder_id`, `qty_po`, `qty_kirim`, `status`, `keterangan`, `outstanding`, `created_at`, `updated_at`) VALUES
(1, 1, 1000, 1010, 'CLOSE', 'LEBIH KIRIM', -10, '2022-08-15 10:15:03', '2022-12-19 13:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `rekapsuppliers`
--

CREATE TABLE `rekapsuppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchaseorder_id` bigint(20) UNSIGNED NOT NULL,
  `qty_kirim` int(11) NOT NULL,
  `no_suratjalan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekapsuppliers`
--

INSERT INTO `rekapsuppliers` (`id`, `purchaseorder_id`, `qty_kirim`, `no_suratjalan`, `created_at`, `updated_at`) VALUES
(1, 1, 1010, '2204-10001/DO/STG', '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `salesorders`
--

CREATE TABLE `salesorders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mastercard_id` bigint(20) UNSIGNED NOT NULL,
  `no_mc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sales` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `po_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_kirim` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `date` date NOT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `total_datang` int(11) DEFAULT NULL,
  `kurang_datang` int(11) DEFAULT NULL,
  `masuk_barang` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salesorders`
--

INSERT INTO `salesorders` (`id`, `mastercard_id`, `no_mc`, `no_sales`, `po_customer`, `jadwal_kirim`, `quantity`, `harga_barang`, `date`, `total_harga`, `total_datang`, `kurang_datang`, `masuk_barang`, `created_at`, `updated_at`) VALUES
(1, 2, 'FA 0788', '2204001', '22.03/WSL/2100043978', '2022-04-25', 1000, 12185, '2022-04-20', 12185000, 1000, 0, 400, '2022-08-15 10:15:03', '2022-12-19 13:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `shiptoaddresses`
--

CREATE TABLE `shiptoaddresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `ship_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kirim1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kirim2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kirim3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shiptoaddresses`
--

INSERT INTO `shiptoaddresses` (`id`, `customer_id`, `ship_id`, `alamat_kirim1`, `alamat_kirim2`, `alamat_kirim3`, `created_at`, `updated_at`) VALUES
(1, 1, '2001', 'JL.IRIAN RAYA Blok E No.23', 'KBN CAKUNG Kec.CILINCING - JAKARTA UTARA', 'DKI JAKARTA 14140', '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `slipfinishgoods`
--

CREATE TABLE `slipfinishgoods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manufacturingorder_id` bigint(20) UNSIGNED NOT NULL,
  `no_slip` int(11) NOT NULL,
  `no_pallet` int(11) NOT NULL,
  `date_gr` date NOT NULL,
  `qty_order` int(11) NOT NULL,
  `qty_perbundle` int(11) NOT NULL,
  `qty_bundle` int(11) DEFAULT NULL,
  `qty_last` int(11) DEFAULT NULL,
  `qty_pallet` int(11) DEFAULT NULL,
  `dibuat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slipfinishgoods`
--

INSERT INTO `slipfinishgoods` (`id`, `manufacturingorder_id`, `no_slip`, `no_pallet`, `date_gr`, `qty_order`, `qty_perbundle`, `qty_bundle`, `qty_last`, `qty_pallet`, `dibuat`, `created_at`, `updated_at`) VALUES
(1, 1, 8000001, 1, '2022-04-13', 1000, 50, 20, 10, 1010, 'Fikri', '2022-08-15 10:15:03', '2022-08-15 10:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sup_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_npwp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `sup_name`, `no_npwp`, `alamat1`, `alamat2`, `no_telp`, `no_telp2`, `cp_person`, `cp_telp`, `jenis_produk`, `terms`, `created_at`, `updated_at`) VALUES
(1, 'PT.Panca Cipta Bersama', '02.305.792.0-451.000', 'Jl.Aria Jaya Santika KM.3,5 Pasir Nangka', 'Tigaraksa, Tangerang -  Banten', '021-5996853', '021-5990861', 'Bp.Andi', '08159111022', 'Styrofoam', '30', '2022-08-15 10:15:03', '2022-12-19 12:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Staff',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Yudi', 'admin', 'admin@gmail.com', '$2y$10$67MHe.1dMleGLqkO82si2.YKPzQ5dh2wqlvGGVJaPvDqU8knZaf4y', 1, 'Owner', '2022-08-15 10:15:03', '2022-08-15 10:15:03'),
(2, 'Fikri', 'staff', 'fikri@gmail.com', '$2y$10$niM0c/1YGG9MvQa.CmnB0eiUNm4eHaDq6Dx6y1T6tnIlFcIw4vjy2', 0, 'Staff', '2022-08-15 10:15:03', '2022-08-15 10:15:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_cust_id_unique` (`cust_id`),
  ADD UNIQUE KEY `customers_no_npwp_unique` (`no_npwp`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupmastercards`
--
ALTER TABLE `groupmastercards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiryproducts`
--
ALTER TABLE `inquiryproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoicepos`
--
ALTER TABLE `invoicepos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoiceprs`
--
ALTER TABLE `invoiceprs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoiceraws`
--
ALTER TABLE `invoiceraws`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_deliveries`
--
ALTER TABLE `invoice_deliveries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_slips`
--
ALTER TABLE `invoice_slips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturingorders`
--
ALTER TABLE `manufacturingorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mastercards`
--
ALTER TABLE `mastercards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchaseorders`
--
ALTER TABLE `purchaseorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawmaterials`
--
ALTER TABLE `rawmaterials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekaporders`
--
ALTER TABLE `rekaporders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekapsuppliers`
--
ALTER TABLE `rekapsuppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesorders`
--
ALTER TABLE `salesorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shiptoaddresses`
--
ALTER TABLE `shiptoaddresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slipfinishgoods`
--
ALTER TABLE `slipfinishgoods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_no_npwp_unique` (`no_npwp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groupmastercards`
--
ALTER TABLE `groupmastercards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inquiryproducts`
--
ALTER TABLE `inquiryproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoicepos`
--
ALTER TABLE `invoicepos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoiceprs`
--
ALTER TABLE `invoiceprs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoiceraws`
--
ALTER TABLE `invoiceraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_deliveries`
--
ALTER TABLE `invoice_deliveries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice_slips`
--
ALTER TABLE `invoice_slips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manufacturingorders`
--
ALTER TABLE `manufacturingorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mastercards`
--
ALTER TABLE `mastercards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchaseorders`
--
ALTER TABLE `purchaseorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rawmaterials`
--
ALTER TABLE `rawmaterials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rekaporders`
--
ALTER TABLE `rekaporders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rekapsuppliers`
--
ALTER TABLE `rekapsuppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salesorders`
--
ALTER TABLE `salesorders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shiptoaddresses`
--
ALTER TABLE `shiptoaddresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slipfinishgoods`
--
ALTER TABLE `slipfinishgoods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
