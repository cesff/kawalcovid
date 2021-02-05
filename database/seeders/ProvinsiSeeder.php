<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsis')->insert([
            ['id' => 1,'kode_provinsi' => 10001,'nama_provinsi' => 'ACEH'],
            ['id' => 2,'kode_provinsi' => 10002,'nama_provinsi' => 'SUMATERA UTARA'],
            ['id' => 3,'kode_provinsi' => 10003,'nama_provinsi' => 'SUMATERA BARAT'],
            ['id' => 4,'kode_provinsi' => 10004,'nama_provinsi' => 'RIAU'],
            ['id' => 5,'kode_provinsi' => 10005,'nama_provinsi' => 'JAMBI'],
            ['id' => 6,'kode_provinsi' => 10006,'nama_provinsi' => 'SUMATERA SELATAN'],
            ['id' => 7,'kode_provinsi' => 10007,'nama_provinsi' => 'BENGKULU'],
            ['id' => 8,'kode_provinsi' => 10008,'nama_provinsi' => 'LAMPUNG'],
            ['id' => 9,'kode_provinsi' => 10009,'nama_provinsi' => 'KEPULAUAN BANGKA BELITUNG'],
            ['id' => 10,'kode_provinsi' => 10010,'nama_provinsi' => 'KEPULAUAN RIAU'],
            ['id' => 11,'kode_provinsi' => 10011,'nama_provinsi' => 'DKI JAKARTA'],
            ['id' => 12,'kode_provinsi' => 10012,'nama_provinsi' => 'JAWA BARAT'],
            ['id' => 13,'kode_provinsi' => 10013,'nama_provinsi' => 'JAWA TENGAH'],
            ['id' => 14,'kode_provinsi' => 10014,'nama_provinsi' => 'DI YOGYAKARTA'],
            ['id' => 15,'kode_provinsi' => 10015,'nama_provinsi' => 'JAWA TIMUR'],
            ['id' => 16,'kode_provinsi' => 10016,'nama_provinsi' => 'BANTEN'],
            ['id' => 17,'kode_provinsi' => 10017,'nama_provinsi' => 'BALI'],
            ['id' => 18,'kode_provinsi' => 10018,'nama_provinsi' => 'NUSA TENGGARA BARAT'],
            ['id' => 19,'kode_provinsi' => 10019,'nama_provinsi' => 'NUSA TENGGARA TIMUR'],
            ['id' => 20,'kode_provinsi' => 10020,'nama_provinsi' => 'KALIMANTAN BARAT'],
            ['id' => 21,'kode_provinsi' => 10021,'nama_provinsi' => 'KALIMANTAN TENGAH'],
            ['id' => 22,'kode_provinsi' => 10022,'nama_provinsi' => 'KALIMANTAN SELATAN'],
            ['id' => 23,'kode_provinsi' => 10023,'nama_provinsi' => 'KALIMANTAN TIMUR'],
            ['id' => 24,'kode_provinsi' => 10024,'nama_provinsi' => 'KALIMANTAN UTARA'],
            ['id' => 25,'kode_provinsi' => 10025,'nama_provinsi' => 'SULAWESI UTARA'],
            ['id' => 26,'kode_provinsi' => 10026,'nama_provinsi' => 'SULAWESI TENGAH'],
            ['id' => 27,'kode_provinsi' => 10027,'nama_provinsi' => 'SULAWESI SELATAN'],
            ['id' => 28,'kode_provinsi' => 10028,'nama_provinsi' => 'SULAWESI TENGGARA'],
            ['id' => 29,'kode_provinsi' => 10029,'nama_provinsi' => 'GORONTALO'],
            ['id' => 30,'kode_provinsi' => 10030,'nama_provinsi' => 'SULAWESI BARAT'],
            ['id' => 31,'kode_provinsi' => 10031,'nama_provinsi' => 'MALUKU'],
            ['id' => 32,'kode_provinsi' => 10032,'nama_provinsi' => 'MALUKU UTARA'],
            ['id' => 33,'kode_provinsi' => 10033,'nama_provinsi' => 'PAPUA BARAT'],
            ['id' => 34,'kode_provinsi' => 10034,'nama_provinsi' => 'PAPUA']

        ]);
    }
}
