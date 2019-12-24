- artisan 命令
```
// 创建模型的同时创建一个数据迁移文件
php artisan make:model Admin -m 

// 执行数据迁移
php artisan migrate

// 重建数据库
php artisan migrate:refresh

php tinker
```

- factory 工厂
```
    // 批量生成数据
    factory(App\Model\Admin::class, 3)->create()
```
