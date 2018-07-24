<?php

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('foods')->truncate();
        \Illuminate\Support\Facades\DB::table('foods')->insert([
            [
                'name' => 'Phở',
                'price' => 30000,
                'categoryId' => 6,
                'description' => 'Phở là một món ăn truyền thống của Việt Nam, cũng có thể xem là một trong những món ăn tiêu biểu cho nền ẩm thực Việt Nam. Thành phần chính của phở là bánh phở và nước dùng (hay nước lèo theo cách gọi miền Nam) cùng với thịt bò hoặc thịt gà cắt lát mỏng. Ngoài ra còn kèm theo các gia vị như: tương, tiêu, chanh, nước mắm, ớt... Những gia vị này được thêm vào tùy theo khẩu vị của từng người dùng. Phở thông thường dùng làm món điểm tâm buổi sáng hoặc ăn đêm, nhưng ở các thành phố lớn món ăn này được thưởng thức trong cả ngày',
                'images' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Ph%E1%BB%9F_b%C3%B2%2C_C%E1%BA%A7u_Gi%E1%BA%A5y%2C_H%C3%A0_N%E1%BB%99i.jpg/250px-Ph%E1%BB%9F_b%C3%B2%2C_C%E1%BA%A7u_Gi%E1%BA%A5y%2C_H%C3%A0_N%E1%BB%99i.jpg'

            ],
            [
                'name' => 'Bún riêu',
                'price' => 30000,
                'categoryId' => '6',
                'description' => 'Bún riêu cua là một món ăn truyền thống Việt Nam được biết đến rộng rãi trong nước và quốc tế [1]. Món ăn này gồm bún (bún rối hoặc bún lá) và \'riêu cua\'. Riêu cua là canh chua được nấu từ gạch cua, thân cua giã và lọc cùng với quả dọc, cà chua, mỡ nước, mẻ ngấu, nước mắm, muối, hành hoa. Bún riêu thường thêm chút mắm tôm để tăng thêm vị đậm đà, thường ăn kèm với rau ghém (rau diếp thái nhỏ hay cọng rau muống chẻ).',
                'images' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/B%C3%BAn_ri%C3%AAu_cua_n%C6%B0%E1%BB%9Bc.jpg/240px-B%C3%BAn_ri%C3%AAu_cua_n%C6%B0%E1%BB%9Bc.jpg'

            ],
            [
                'name' => 'Mỳ Ý',
                'price' => 40000,
                'categoryId' => 2,
                'description' => 'mì Ý, là một loại pasta sợi dài, nhỏ, hình trụ. Nó là một loại thực phẩm thiết yếu của nền ẩm thực Ý truyền thống. Như nhiều loại mì pasta khác, spaghetti được làm từ bột mì xay và nước. Spaghetti của Ý được làm từ bột mì semolina làm từ lúa mì cứng, nhưng ở nhiều nơi nó có thể được làm từ nhiều loại bột mì khác',
                'images' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Spaghettoni.jpg/250px-Spaghettoni.jpg'

            ],
            [
                'name' => 'Sushi',
                'price' => 40000,
                'categoryId' => 1,
                'description' => 'Sushi (すし, 寿司, 鮨, 鮓, 寿斗, 寿し, 壽司?) là một món ăn Nhật Bản gồm cơm trộn giấm (shari) kết hợp với các nguyên liệu khác (neta). Neta và hình thức trình bày sushi rất đa dạng, nhưng nguyên liệu chính mà tất cả các loại sushi đều có là shari. Neta phổ biến nhất là hải sản. Thịt sống cắt lát gọi riêng là sashimi.',
                'images'=>'https://halfoff.adspayusa.com/wp-content/uploads/2018/03/sushi_and_sashimi_for_two.0.jpg'

            ],
            [
                'name' => 'Trà sữa',
                'price' => 40000,
                'categoryId' => 3,
                'description' => 'Trà sữa là loại thức uống đa dạng được tìm thấy ở nhiều nền văn hóa, bao gồm một vài cách kết hợp giữa trà và sữa. Các loại thức uống khác nhau tùy thuộc vào lượng thành phần chính của mỗi loại, phương pháp pha chế, và các thành phần khác được thêm vào (thay đổi từ đường hoặc mật ong thành muối hoặc bạch đậu khấu-thảo quả). Bột trà sữa pha sẵn là một sản phẩm được sản xuất hàng loạt.',
                'images'=>'http://ipos.vn/wp-content/uploads/2017/04/cover-tra-sua-Recovered-2.jpg'

            ],
            [
                'name' => 'Sữa chua mít',
                'price' => 15000,
                'categoryId' => 3,
                'description' => 'sữa chua mít là một món ăn được rất nhiều các bạn trẻ yêu thích. Với mùi thơm của mít kết hợp với sữa chua cùng với vị dẻo dai của những hạt trân châu',
                'images'=>'https://ameovat.com/wp-content/uploads/2016/03/cach-lam-sua-chua-mit.jpg'

            ],
            [
                'name' => 'Pizza',
                'price' => 40000,
                'categoryId' => 2,
                'description' => 'Pizza  là loại bánh dẹt, tròn được chế biến từ nước, bột mỳ và nấm men, sau khi đã được ủ ít nhất 24 tiếng đồng hồ và nhào nặn thành loại bánh có hình dạng tròn và dẹt, và được cho vào lò nướng chín.',
                'images'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Pizza_med_gorgonzola%2C_spinat_og_bacon%2C_March_2010.jpg/240px-Pizza_med_gorgonzola%2C_spinat_og_bacon%2C_March_2010.jpg'

            ],
            [
                'name' => 'Bún thang',
                'price' => 30000,
                'categoryId' => 6,
                'description' => 'Làm bún thang là một quá trình cầu kỳ, từ phần chuẩn bị đến nấu. Ước tính phải cần đến 20 nguyên liệu mới đủ để làm bún thang.Rau răm, mùi tàu, trứng gà rán mỏng, lườn gà xé, giò lụa thái sợi rải đều trên nền bún trắng. Bún phải là loại bún sợi nhỏ. Trên rắc tôm bông và rải vài lát lạp xưởng.',
                'images'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/B%C3%BAn_thang.JPG/250px-B%C3%BAn_thang.JPG'

            ],
            [
                'name' => 'Bún ngan',
                'price' => 300000,
                'categoryId' => 6,
                'description' => 'BÚN NGAN là món bún ngon hấp dẫn với thịt ngan chắc ngọt, măng dai đậm đà hòa trong nước bún thanh nhẹ. ',
                'images'=>'http://vnngon.com/wp-content/uploads/2015/11/pic3683.jpg'

            ],
            [
                'name' => 'Chè thập cẩm',
                'price' => 15000,
                'categoryId' => 3,
                'description' => 'Chè thập cẩm là một món chè dễ nấu, bởi vì các nguyên liệu bạn có thể tùy thích lựa chọn, có thể thêm đỗ đen, đỗ xanh, trân châu, dừa nạo ...',
                'images'=>'https://ameovat.com/wp-content/uploads/2017/03/cach-nau-che-thap-cam-600x400.jpg'

            ],
            [
                'name' => 'Chè bưởi',
                'price' => 15000,
                'categoryId' => 3,
                'description' => 'ón chè bưởi là một món tráng miệng vào những ngày thời tiết nắng nóng rất ngon và dễ thực hiện.',
                'images'=>'https://www.huongnghiepaau.com/images/nauche/che-buoi-an-giang.jpg'

            ],
            [
                'name' => 'Xúc xích',
                'price' => 20000,
                'categoryId' => 1,
                'description' => 'A sausage is a cylindrical meat product usually made from ground meat, often pork, beef, or veal, along with salt, spices and other flavourings, and breadcrumbs, encased by a skin',
                'images'=>'http://sohanews.sohacdn.com/thumb_w/660/2017/an-vat-2-1509092643612-55-0-552-800-crop-1509092648582.jpg'

            ],
            [
                'name' => 'Gà rán',
                'price' => 30000,
                'categoryId' => 2,
                'description' => 'Fried chicken is a dish consisting of chicken pieces usually from broiler chickens which have been floured or battered and then pan-fried, deep fried, or pressure fried. The breading adds a crisp coating or crust to the exterior of the chicken.',
                'images'=>'https://agiadinh.net/wp-content/uploads/2016/09/maxresdefault-3-600x338.jpg'

            ],
            [
                'name' => 'Bánh gạo hàn quốc',
                'price' => 60000,
                'categoryId' => 1,
                'description' => 'Tteok-bokki or stir-fried rice cakes is a popular Korean food made from small-sized garae-tteok called tteokmyeon or commonly tteok-bokki-tteok. Fish cakes, boiled eggs, and scallions are some of the most commonly added ingredients',
                'images'=>'https://www.bepgiadinh.com/wp-content/uploads/2017/02/12/tokbokki-2.jpg'

            ],
            [
                'name' => 'Kimbap',
                'price' => 30000,
                'categoryId' => 1,
                'description' => 'Gimbap is a Korean dish made from cooked rice and other ingredients that are rolled in gim—dried sheets of laver seaweed—and served in bite-sized slices.',
                'images'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Vegetable_gimbap.jpg/1200px-Vegetable_gimbap.jpg'

            ],
            [
                'name' => 'Xúc xích',
                'price' => 20000,
                'categoryId' => 1,
                'description' => 'A sausage is a cylindrical meat product usually made from ground meat, often pork, beef, or veal, along with salt, spices and other flavourings, and breadcrumbs, encased by a skin',
                'images'=>'http://sohanews.sohacdn.com/thumb_w/660/2017/an-vat-2-1509092643612-55-0-552-800-crop-1509092648582.jpg'

            ],
            [
                'name' => 'Gà rán',
                'price' => 30000,
                'categoryId' => 2,
                'description' => 'Fried chicken is a dish consisting of chicken pieces usually from broiler chickens which have been floured or battered and then pan-fried, deep fried, or pressure fried. The breading adds a crisp coating or crust to the exterior of the chicken.',
                'images'=>'https://agiadinh.net/wp-content/uploads/2016/09/maxresdefault-3-600x338.jpg'

            ],
            [
                'name' => 'Bánh gạo hàn quốc',
                'price' => 60000,
                'categoryId' => 1,
                'description' => 'Tteok-bokki or stir-fried rice cakes is a popular Korean food made from small-sized garae-tteok called tteokmyeon or commonly tteok-bokki-tteok. Fish cakes, boiled eggs, and scallions are some of the most commonly added ingredients',
                'images'=>'https://www.bepgiadinh.com/wp-content/uploads/2017/02/12/tokbokki-2.jpg'

            ],
            [
                'name' => 'Kimbap',
                'price' => 30000,
                'categoryId' => 1,
                'description' => 'Gimbap is a Korean dish made from cooked rice and other ingredients that are rolled in gim—dried sheets of laver seaweed—and served in bite-sized slices.',
                'images'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Vegetable_gimbap.jpg/1200px-Vegetable_gimbap.jpg'

            ],

        ]);

    }
}
