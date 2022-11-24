<?php
namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
// use App\Models\Users\Category;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new Category();
        $item->id = 1;
        $item->name = "Điện máy - Điện gia dụng";
        $item->slug = "dien-may-dien-gia-dung";
        $item->description = "Đây là điện máy";
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
        $item = new Category();
        $item->id = 2;
        $item->name = "Laptop & Macbook";
        $item->slug = "laptop-macbook";
        $item->description = "Đây là Laptop - Macbook";
        // $item->parent_id = 0;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
        $item = new Category();
        $item->id = 3;
        $item->name = "Tivi & Màn hình TV";
        $item->slug = "tivi-man-hinh-tivi";
        $item->description = "Đây là TV";
        // $item->parent_id = 0;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
        $item = new Category();
        $item->id = 4;
        $item->name = "Điện thoại - Thiết bị thông minh";
        $item->slug = "dien-thoai-thiet-bi-thong-minh";
        $item->description = "Đây là điện thoại";
        // $item->parent_id = 0;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
        $item = new Category();
        $item->id = 5;
        $item->name = "PC & Máy tính đồng bộ";
        $item->slug = "PC-may-tinh-dong-bo";
        $item->description = "Đây là PC";
        // $item->parent_id = 0;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
        $item = new Category();
        $item->id = 6;
        $item->name = "Linh kiện máy tính";
        $item->slug = "linh-kien-may-tinh";
        $item->description = "Đây là linh kiện máy tính";
        // $item->parent_id = 0;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
        $item = new Category();
        $item->id = 7;
        $item->name = "Máy lọc khí ";
        $item->slug = "dieu-hoa-may-lanh";
        $item->description = "Đây là điều hòa";
        // $item->parent_id = 1;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
        $item = new Category();
        $item->id = 8;
        $item->name = "Tủ lạnh";
        $item->slug = "tủ-lanh";
        $item->description = "Đây là tủ lạnh";
        // $item->parent_id = 1;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();
        $item = new Category();
        $item->id = 9;
        $item->name = "Máy giặt";
        $item->slug = "may-giat";
        $item->description = "Đây là máy giặt";
        // $item->parent_id = 1;
        $item->status = 0;
        $item->created_at = "2021-09-25 23:19:08";
        $item->updated_at  = "2021-09-25 23:19:08";
        $item->save();

    }
}
