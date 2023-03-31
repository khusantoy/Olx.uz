<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\Category;
use App\Models\SupCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'Yengil avtomashinalar', 'image' => '', 'category_id' => 1],
            ['title' => 'Yuk avtomashinalar', 'image' => '', 'category_id' => 1],
            ['title' => 'Tirkamalar', 'image' => '', 'category_id' => 1],
            ['title' => 'Suv transporti', 'image' => '', 'category_id' => 1],
            ['title' => 'Havo transporti', 'image' => '', 'category_id' => 1],
            ['title' => 'Extiyot qismlar', 'image' => '', 'category_id' => 1],
            ['title' => 'Aksessuarlar', 'image' => '', 'category_id' => 1],
            ['title' => 'Avtobuslar', 'image' => '', 'category_id' => 1],
            ['title' => 'Qishloq xo\'jalik texnikasi', 'image' => '', 'category_id' => 1],
            ['title' => 'Shinalar,Disklar', 'image' => '', 'category_id' => 1],
            ['title' => 'Moto', 'image' => '', 'category_id' => 1],
            ['title' => 'Sutkalik ijara', 'image' => '', 'category_id' => 2],
            ['title' => 'Kvartiralar', 'image' => '', 'category_id' => 2],
            ['title' => 'Xususiy uylar', 'image' => '', 'category_id' => 2],
            ['title' => 'Yer uchastkasi', 'image' => '', 'category_id' => 2],
            ['title' => 'Garajlar', 'image' => '', 'category_id' => 2],
            ['title' => 'Tijorat binolari', 'image' => '', 'category_id' => 2],
            ['title' => 'Bolalar kiyimi', 'image' => '', 'category_id' => 3],
            ['title' => 'Bolalar oyoq kiyimi', 'image' => '', 'category_id' => 3],
            ['title' => 'Bolalar mebeli', 'image' => '', 'category_id' => 3],
            ['title' => 'Bolalar kolyoskalari', 'image' => '', 'category_id' => 3],
            ['title' => 'Bolalar o\'rindiqlari', 'image' => '', 'category_id' => 3],
            ['title' => 'Bolalar o\'yinchoqlar', 'image' => '', 'category_id' => 3],
            ['title' => 'Bolalar transporti', 'image' => '', 'category_id' => 3],
            ['title' => 'Oziqlantirish', 'image' => '', 'category_id' => 3],
            ['title' => 'Telefonlar', 'image' => '', 'category_id' => 4],
            ['title' => 'Kompyuterlar', 'image' => '', 'category_id' => 4],
            ['title' => 'Foto/video', 'image' => '', 'category_id' => 4],
            ['title' => 'Tv/videotexnika', 'image' => '', 'category_id' => 4],
            ['title' => 'Audiotexnika', 'image' => '', 'category_id' => 4],
            ['title' => 'Uy uchun texnika', 'image' => '', 'category_id' => 4],
            ['title' => 'Oshxona uchun texnika', 'image' => '', 'category_id' => 4],
            ['title' => 'Boshqa elektronika', 'image' => '', 'category_id' => 4],
            ['title' => 'Badiiy kitoblar', 'image' => '', 'category_id' => 5],
            ['title' => 'Detektiv kitoblar', 'image' => '', 'category_id' => 5],
            ['title' => 'Sarguzasht kitoblar', 'image' => '', 'category_id' => 5],
            ['title' => 'Ertak kitoblar', 'image' => '', 'category_id' => 5],
            ['title' => 'Romanlar', 'image' => '', 'category_id' => 5],
            ['title' => 'Dostonlar', 'image' => '', 'category_id' => 5],
            ['title' => 'Allomalarimiz', 'image' => '', 'category_id' => 5],
            ['title' => 'Fan kitoblari', 'image' => '', 'category_id' => 5],
            ['title' => 'Ensiklopedik', 'image' => '', 'category_id' => 5],
            ['title' => 'Tarix', 'image' => '', 'category_id' => 5],
            ['title' => 'Kasbga oid', 'image' => '', 'category_id' => 5],
            ['title' => 'Itlar', 'image' => '', 'category_id' => 6],
            ['title' => 'Mushuklar', 'image' => '', 'category_id' => 6],
            ['title' => 'Baliqlar', 'image' => '', 'category_id' => 6],
            ['title' => 'Qushlar', 'image' => '', 'category_id' => 6],
            ['title' => 'Kemiruvchilar', 'image' => '', 'category_id' => 6],
            ['title' => 'Qishloq xo\'jalik', 'image' => '', 'category_id' => 6],
            ['title' => 'Hayvon mahsulotlari', 'image' => '', 'category_id' => 6],
            ['title' => 'Tekinga hayvonlar', 'image' => '', 'category_id' => 6],
            ['title' => 'Boshqa hayvonlar', 'image' => '', 'category_id' => 6],
            ['title' => 'Qurilish-ta\'mirlash', 'image' => '', 'category_id' => 7],
            ['title' => 'Moliya xizmatlari', 'image' => '', 'category_id' => 7],
            ['title' => 'Transport ijarsi', 'image' => '', 'category_id' => 7],
            ['title' => 'Marketing', 'image' => '', 'category_id' => 7],
            ['title' => 'Enagalar-kasalga qarovchilar', 'image' => '', 'category_id' => 7],
            ['title' => 'Ta\'lim-sport', 'image' => '', 'category_id' => 7],
            ['title' => 'Turizm', 'image' => '', 'category_id' => 7],
            ['title' => 'Biznesni sotish', 'image' => '', 'category_id' => 7],
            ['title' => 'Yuridik xizmatlar', 'image' => '', 'category_id' => 7],
            ['title' => 'Tarjimonlar', 'image' => '', 'category_id' => 7],
            ['title' => 'Avto xizmatlar', 'image' => '', 'category_id' => 7],
            ['title' => 'Texnikaga xizmatlar', 'image' => '', 'category_id' => 7],
            ['title' => 'Xomashyo materiallari', 'image' => '', 'category_id' => 7],
            ['title' => 'Bepul xizmatlar', 'image' => '', 'category_id' => 8],
            ['title' => 'Bepul hayvonlar', 'image' => '', 'category_id' => 8],
            ['title' => 'Bepul turarjoy', 'image' => '', 'category_id' => 8],
            ['title' => 'Bepul qarz', 'image' => '', 'category_id' => 8],
            ['title' => 'Bepul qurilmalar', 'image' => '', 'category_id' => 8],
            ['title' => 'Bepul transport', 'image' => '', 'category_id' => 8],
        ];
        SupCategory::insert($data);
    }
}
