<?php

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
        // 创建 30 个商品
        $products = factory(\App\Models\Product::class, 30)->create();
        foreach ($products as $product) {
            // 创建 3 个 SKU，并且每个 SKU 的 `product_id` 字段都设为当前循环的商品 id
            $skus = factory(\App\Models\ProductSku::class, 3)->create(['product_id' => $product->id]);
            // 找出价格最低的 SKU 价格，把商品价格设置为该价格
            $product->update(['price' => $skus->min('price')]);
        }
    }

    /**
     * 编辑 .env
     * 修改系统docker服务器地址：
     * "registry-mirror": ["https://7bezldxe.mirror.aliyuncs.com"]
     *
     * 创建数据库：
     * su postgres
     * psql
     * \password postgres
     * CREATE USER shop WITH PASSWORD 'shop';
     * CREATE DATABASE shop OWNER shop;
     * GRANT ALL PRIVILEGES ON DATABASE shop to shop;
     *
     * composer install --ignore-platform-reqs
     * yarn add china-area-data
     * yarn add sweetalert
     *
     * 注册用户
     *** php artisan tinker
     *** factory(App\Models\User::class)->make()
     *** factory(App\Models\User::class, 3)->create([])
     *
     * 用户地址: database/factories/UserAddressFactory.php
     *** php artisan tinker
     *** factory(App\Models\UserAddress::class)->make()
     *** factory(App\Models\UserAddress::class, 3)->create(['user_id' => 1])
     *
     * php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"
     * php artisan admin:install
     * 默认的账号和密码都是 admin
     * 后天汉化，增加用户管理页面
     * 角色和权限
     * operator 12345
     *
     * 后台增加用户管理、商品管理、订单管理页面
     *
     * 生成商品：
     * php artisan db:seed --class=ProductsSeeder
     *
     * 后台汉化+管理页面生成
     *
     * https://openhome.alipay.com/platform/appDaily.htm?tab=info
     * 'app_id' => '你在支付宝沙箱看到的appid',
     * 'ali_public_key' => '支付宝沙箱显示的公钥',
     * 'private_key' => '刚刚生成的私钥',
     *
     *
     *
     * https://requestbin.fullcontact.com/
     *
     */
}
