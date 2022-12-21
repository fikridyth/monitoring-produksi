<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Driver;
use App\Models\Customer;
use App\Models\Delivery;
use App\Models\Supplier;
use App\Models\Invoicepo;
use App\Models\Invoicepr;
use App\Models\Invoiceraw;
use App\Models\Mastercard;
use App\Models\Rekaporder;
use App\Models\Salesorder;
use App\Models\InvoiceSlip;
use App\Models\Rawmaterial;
use App\Models\Purchaseorder;
use App\Models\Rekapsupplier;
use App\Models\Shiptoaddress;
use App\Models\Inquiryproduct;
use App\Models\Slipfinishgood;
use App\Models\Groupmastercard;
use App\Models\InvoiceDelivery;
use Illuminate\Database\Seeder;
use App\Models\Manufacturingorder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Yudi',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => '1',
            'jabatan' => 'Owner'
        ]);

        User::create([
            'name' => 'Fikri',
            'username' => 'staff',
            'email' => 'fikri@gmail.com',
            'password' => bcrypt('staff'),
            'role' => '0',
            'jabatan' => 'Staff'
        ]);

        Customer::create([
            'cust_id' => '1001',
            'cust_name' => 'PT.INTERNATIONAL FURNITURE INDUSTRIES',
            'no_npwp' => '02.192.848.6-057.000',
            'alamat1' => 'JL.IRIAN RAYA Blok E No.23',
            'alamat2' => 'KBN CAKUNG Kec.CILINCING - JAKARTA UTARA',
            'alamat3' => 'DKI JAKARTA 14140',
            'no_telp' => '',
            'co_person' => '',
            'terms' => '60'
        ]);

        Mastercard::create([
            'no_mc' => 'DN 0788A',
            'komposisi' => '1',
            'customer_id' => '1',
            'deskripsi' => 'KARTON BOX TOP IT-130970 HW-LW-OY-XX',
            'model_box' => 'F (TOP)',
            'panjang' => '1700',
            'lebar' => '860',
            'tinggi' => '260',
            'substance' => 'K200/M150X3/K200',
            'flute' => 'CB',
            'joint' => 'Lepas',
            'jumlah_warna' => '1',
            'kode_proses' => 'P2',
            'other' => ''
        ]);

        Mastercard::create([
            'no_mc' => 'FA 0788',
            'komposisi' => '1',
            'customer_id' => '1',
            'deskripsi' => 'KARTON BOX TOP IT-130970 HW-LW-OY-XX',
            'model_box' => 'F (TOP)',
            'panjang' => '1700',
            'lebar' => '860',
            'tinggi' => '260',
            'substance' => 'K200/M150X3/K200',
            'flute' => 'CB',
            'joint' => 'Lepas',
            'jumlah_warna' => '1',
            'kode_proses' => 'P2',
            'other' => ''
        ]);

        Shiptoaddress::create([
            'ship_id' => '2001',
            'customer_id' => '1',
            'alamat_kirim1' => 'JL.IRIAN RAYA Blok E No.23',
            'alamat_kirim2' => 'KBN CAKUNG Kec.CILINCING - JAKARTA UTARA',
            'alamat_kirim3' => 'DKI JAKARTA 14140'
        ]);

        Groupmastercard::create([
            'mastercard_id' => '1',
            'mc_induk' => 'DN 0788A'
        ]);

        Groupmastercard::create([
            'mastercard_id' => '1',
            'mc_induk' => 'DN 0788B'
        ]);

        Groupmastercard::create([
            'mastercard_id' => '2',
            'mc_induk' => 'FA 0788'
        ]);

        Salesorder::create([
            'mastercard_id' => '2',
            'no_mc' => 'FA 0788',
            'no_sales' => '2204001',
            'po_customer' => '22.03/WSL/2100043978',
            'jadwal_kirim' => '2022/04/25',
            'quantity' => '1000',
            'harga_barang' => '12185',
            'date' => '2022/04/20',
            'total_harga' => '12185000',
            'total_datang' => '600',
            'kurang_datang' => '400',
            'masuk_barang' => '0'
        ]);

        Driver::create([
            'driver' => 'Ade Hardiyana',
            'vehicle' => 'Truk Box',
            'no_transport' => 'B 9623 FCG',
            'inconterm' => 'Karawang'
        ]);

        Delivery::create([
            'salesorder_id' => '1',
            'driver_id' => '1',
            'shiptoaddress_id' => '1',
            'no_delivery' => '900001',
            'surat_jalan' => '1',
            'code_delivery' => '9000011',
            'date_delivery' => '2022/04/17',
            'qty_delivery' => '600'
        ]);

        InvoiceDelivery::create([
            'delivery_id' => '1'
        ]);

        Manufacturingorder::create([
            'salesorder_id' => '1',
            'no_mo' => '22040000001',
            'no_urut' => '1',
            'keterangan' => 'SHORTAGE',
            'qty_shortage' => '10'
        ]);

        Slipfinishgood::create([
            'manufacturingorder_id' => '1',
            'no_slip' => '8000001',
            'no_pallet' => '1',
            'date_gr' => '2022/04/13',
            'qty_order' => '1000',
            'qty_perbundle' => '50',
            'qty_bundle' => '20',
            'qty_last' => '10',
            'qty_pallet' => '1010',
            'dibuat' => 'Fikri'
        ]);

        InvoiceSlip::create([
            'slipfinishgood_id' => '1'
        ]);

        Supplier::create([
            'sup_name' => 'PT.Panca Cipta Bersama',
            'no_npwp' => '02.305.792.0-451.000',
            'alamat1' => 'Jl.Aria Jaya Santika KM.3,5 Pasir Nangka',
            'alamat2' => 'Tigaraksa, Tangerang -  Banten',
            'no_telp' => '021-5996853',
            'no_telp2' => '021-5990861',
            'cp_person' => 'Bp.Andi',
            'cp_telp' => '08159111022',
            'jenis_produk' => 'Styrofoam',
            'terms' => '30'
        ]);

        Purchaseorder::create([
            'supplier_id' => '1',
            'no_sales' => '2100001',
            'no_po' => 'WSL/PO/CMI/300001',
            'no_pr' => 'WSL/PR/CMI/100001',
            'no_item' => '1',
            'date' => '2022/04/17',
            'desc' => 'NETTO',
            'panjang' => '2080',
            'lebar' => '906',
            'lebar_paper' => '1850',
            'out_paper' => '2',
            'score' => '223-460-223',
            'substance' => 'K150/M125X3/K150',
            'flute' => 'CB',
            'index' => '7728',
            'disc' => '15',
            'qty' => '1000',
            'date_delivery' => '2022/04/25',
            'price' => '15545'
        ]);

        Invoicepo::create([
            'purchaseorder_id' => '1',
            'dibuat' => 'Fikri'
        ]);

        Invoicepr::create([
            'purchaseorder_id' => '1',
            'dibuat' => 'Fikri'
        ]);

        Rekapsupplier::create([
            'purchaseorder_id' => '1',
            'qty_kirim' => '1010',
            'no_suratjalan' => '2204-10001/DO/STG'
        ]);

        Rekaporder::create([
            'purchaseorder_id' => '1',
            'status' => 'CLOSE',
            'keterangan' => 'LEBIH KIRIM',
            'qty_po' => '1000',
            'qty_kirim' => '1010',
            'outstanding' => '-10'
        ]);

        Inquiryproduct::create([
            'slipfinishgood_id' => '1',
            'slitter_product' => '1015',
            'slitter_reject' => '5',
            'printing_product' => '0',
            'printing_reject' => '0',
            'slotter_product' => '0',
            'slotter_reject' => '0',
            'glue_product' => '0',
            'glue_reject' => '0',
            'pond_product' => '0',
            'pond_reject' => '0',
            'qty_finish' => '1010',
            'waste_product' => '5',
            'qty_product' => '1015'
        ]);

        Rawmaterial::create([
            'rekaporder_id' => '1',
            'slip_no' => '9000001',
            'qty_perbundle' => '20',
            'qty_bundle' => '50',
            'last_bundle' => '10',
            'qty_pallet' => '1010',
            'pallet_no' => '1',
            'total_received' => '1010',
            'gr_date' => '2022/04/25',
            'dibuat' => 'Fikri'
        ]);

        Invoiceraw::create([
            'rawmaterial_id' => '1',
            'salesorder_id' => '1'
        ]);
    }
}
