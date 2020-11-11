<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Chính trị – pháp luật.';
        $category->save();

        $category = new Category();
        $category->name = 'Khoa học công nghệ – kinh tế';
        $category->save();

        $category = new Category();
        $category->name = 'Văn hóa xã hội – lịch sử';
        $category->save();

        $category = new Category();
        $category->name = 'Văn học nghệ thuật.';
        $category->save();

        $category = new Category();
        $category->name = 'Truyện – tiểu thuyết.';
        $category->save();

        $category = new Category();
        $category->name = 'Tâm lý – tâm linh và tôn giáo.';
        $category->save();

        $category = new Category();
        $category->name = 'Thiếu nhi.';
        $category->save();
    }
}
