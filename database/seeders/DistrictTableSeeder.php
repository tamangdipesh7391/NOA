<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `districts` (`id`, `district_name`, `province_id`) VALUES
(1, 'Bhojpur', 1),
(2, 'Dhankuta', 1),
(3, 'Ilam', 1),
(4, 'Jhapa', 1),
(5, 'Khotang', 1),
(6, 'Morang', 1),
(7, 'Okhaldhunga', 1),
(8, 'Panchthar', 1),
(9, 'Sankhuwasabha', 1),
(10, 'Solukhumbu', 1),
(11, 'Sunsari', 1),
(12, 'Taplejung', 1),
(13, 'Terhathum', 1),
(14, 'Udayapur', 1),
(15, 'Saptari', 2),
(16, 'Siraha', 2),
(17, 'Dhanusha', 2),
(18, 'Mahottari', 2),
(19, 'Sarlahi', 2),
(20, 'Bara', 2),
(21, 'Parsa', 2),
(22, 'Rautahat', 2),
(23, 'Sindhuli', 3),
(24, 'Ramechhap', 3),
(25, 'Dolakha', 3),
(26, 'Bhaktapur', 3),
(27, 'Dhading', 3),
(28, 'Kathmandu', 3),
(29, 'Kavrepalanchowk', 3),
(30, 'Lalitpur', 3),
(31, 'Nuwakot', 3),
(32, 'Rasuwa', 3),
(33, 'Sindhupalchok', 3),
(34, 'Chitwan', 3),
(35, 'Makwanpur', 3),
(36, 'Baglung', 4),
(37, 'Gorkha', 4),
(38, 'Kaski', 4),
(39, 'Lamjung', 4),
(40, 'Manang', 4),
(41, 'Mustang', 4),
(42, 'Myagdi', 4),
(43, 'Nawalpur', 4),
(44, 'Parbat', 4),
(45, 'Syangja', 4),
(46, 'Tanahun', 4),
(47, 'Kapilvastu', 5),
(48, 'Parasi', 5),
(49, 'Rupandehi', 5),
(50, 'Arghakhanchi', 5),
(51, 'Gulmi', 5),
(52, 'Palpa', 5),
(53, 'Dang', 5),
(54, 'Pyuthan', 5),
(55, 'Rolpa', 5),
(56, 'Eastern Rukum', 5),
(57, 'Banke', 5),
(58, 'Bardiya', 5),
(59, 'Western Rukum', 6),
(60, 'Salyan', 6),
(61, 'Dolpa', 6),
(62, 'Humla', 6),
(63, 'Jumla', 6),
(64, 'Kalikot', 6),
(65, 'Mugu', 6),
(66, 'Surkhet', 6),
(67, 'Dailekh', 6),
(68, 'Jajarkot', 6),
(69, 'Kailali', 7),
(70, 'Achham', 7),
(71, 'Doti', 7),
(72, 'Bajhang', 7),
(73, 'Bajura', 7),
(74, 'Kanchanpur', 7),
(75, 'Dadeldhura', 7),
(76, 'Baitadi', 7),
(77, 'Darchula', 7)");
    }

}
