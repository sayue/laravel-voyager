# laravel-voyager
laravel php frameword with extension voyager

###版本要求
Laravel 5.4+  
Voyager 0.11.9

###安装步骤
1. 拉取项目
> git clone https://github.com/sayue/laravel-voyager.git
2. 通过composer安装依赖
> composer install
3. 复制项目配置文件，修改配置信息
> cp .env.example .env
4. 生成Laravel的key
> php artisan key:generate
5. 安装[Voyager](https://the-control-group.github.io)并填充测试数据
> php artisan voyager:install --with-dummy

其中Nginx配置注意这两处配置  
项目入口
`root  /xxx/laravel-voyager/public;`  
入口及路由控制  
`try_files $uri $uri/ /index.php?$query_string;`  
reload之后 即可访问  
