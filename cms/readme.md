# Laravel
## Artisan 指令


```bash
#執行開發者伺服器
php artisan serve

#建立資料表遷移 migration
php artisan make:migration create_posts_table

php artisan make:migration add_user_id_to_posts --table=posts

#執行migration
php artisan migrate

#回復上一次migrate
php artisan migrate:rollback

#重製migration
php artisan migrate:reset

#查看migration狀態
php artisan migrate:status

#建立Controller
php artisan make:controller PostController

#使用resource建立Controller 
php artisan make:controller PostController --resource

#查詢路由
php artisan route:list

#建立Model
php artisan make:model Post

#參數
# c: controller
# m: migration
# r: resource

#建立Auth (會員系統)
php artisan make:auth

#建立storage連結
php artisan storage:link
```

## GIT指令
```bash
git config 
git config --list
git config --global user.name "Your Name"
git config --global user.email "Your Email"

git init 
#資料夾git初始化

git add .
#將檔案加入暫存(索引)

git commit -m "message here"
#將檔案暫存


git reflog
#查看紀錄(可以看到reset)

git log
#查看紀錄(詳細)

git log --oneline
#查看紀錄(單行)

git remote add origin https://github.com/xxx/xxx.git
#建立連線

git push -u origin master
#推送到雲端儲存庫

git reset --hard [版本號]
#還原至某個版本