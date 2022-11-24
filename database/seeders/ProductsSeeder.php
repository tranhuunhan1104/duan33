<?php

namespace Database\Seeders;

use App\Models\Product;
// use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Product();
        $item->id = 1;
        $item->name = "Tủ lạnh LG Inverter 613 lít GR-B247JDS";
        $item->slug = "tu-lanh-lg-inverter";
        $item->price = 206900;
        $item->description = "Ngăn chứa rau củ quả của Tủ lạnh LG Inverter 613 lít GR-B247JDS có diện tích rộng rãi giúp mang lại không gian dự trữ đồ lên đến 28 lít. ";
        $item->status = 0;
        $item->quantity = 100;
        $item->category_id = 8;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
        // $item = new Product();
        // $item->id = 2;
        // $item->name = "Smart Tivi Samsung 4K 43 inch";
        // $item->slug = "smart-tivi-samsung";
        // $item->price = 99000;
        // $item->description = "Smart Tivi Samsung 4K 43 inch UA43NU7100 là dòng sản phẩm chất lượng cao của samsung ra mắt không phụ lòng người dùng.";
        // $item->status = 0;
        // $item->category_id = 15;
        // $item->created_at = "2021-09-25 23:19:08";
        // $item->updated_at  = "2021-09-25 23:19:08";
        // $item->save();

        $item = new Product();
        $item->id = 2;
        $item->name = "Điện Thoại Di Động iPhone 11 64GB ";
        $item->slug = "dien-thoai-apple-11";
        $item->price = 99000;
        $item->description = "Apple chính thức ra mắt Điện Thoại Di Động iPhone 11 64GB Purple vào ngày 11/9 với nhiều điểm nhấn đến từ thiết kế. Có rất";
        $item->status = 0;
        $item->quantity = 100;

        $item->category_id = 4;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Product();
        $item->id = 3;
        $item->name = "PC HP 22-b201d AIO (Z8F51AA)  ";
        $item->slug = "pc-hp";
        $item->price = 69930;
        $item->description = "N/A";
        $item->status = 0;
        $item->quantity = 100;

        $item->category_id = 5;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Product();
        $item->id = 4;
        $item->name = "RAM desktop Apacer Panther Golden";
        $item->slug = "ram-pc";
        $item->price = 17900;
        $item->description = "Bộ nhớ DDR4 Apacer 8GB (2400) Panther Golden Heatsink (EK.08G2T.GEC)";
        $item->status = 0;
        $item->quantity = 100;

        $item->category_id = 6;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Product();
        $item->id = 5;
        $item->name = "Máy Hút Bụi (VACUUM) XIAOMI MI";
        $item->slug = "may-hut-bui-vacum";
        $item->price = 179000;
        $item->description = "Máy Hút Bụi (VACUUM) XIAOMI MI";
        $item->status = 0;
        $item->quantity = 100;

        $item->category_id = 7;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

        $item = new Product();
        $item->id = 6;
        $item->name = "Bàn Chải Đánh Răng ELECTRIC TOOTHBRUSH";
        $item->slug = "ban-chai-danh-rang";
        $item->price = 17900;
        $item->description = "Bộ nhớ DDR4 Apacer 8GB (2400) Panther Golden Heatsink (EK.08G2T.GEC)";
        $item->status = 0;
        $item->quantity = 100;

        $item->category_id = 7;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
    }
}
