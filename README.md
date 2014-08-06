 Mysql new user SQL指令
-----------------------
新增使用者`james` and `testmessage`

### james
```
GRANT USAGE ON *.* TO 'james'@'localhost' IDENTIFIED BY PASSWORD '*A4B6157319038724E3560894F7F932C8886EBFCF';
GRANT ALL PRIVILEGES ON `james`.* TO 'james'@'localhost' WITH GRANT OPTION;
```
### testmessage
```
GRANT USAGE ON *.* TO 'testmessage'@'localhost' IDENTIFIED BY PASSWORD '*A4B6157319038724E3560894F7F932C8886EBFCF';
GRANT ALL PRIVILEGES ON `testmessage`.* TO 'testmessage'@'localhost';
```
New DATABASE `testmessage` and `james` IF NOT EXISTS
----------------------
```
CREATE DATABASE IF NOT EXISTS `testmessage` COLLATE utf8_general_ci;
CREATE DATABASE IF NOT EXISTS `james` COLLATE utf8_general_ci;
```

### 匯入資料表

使用終端機匯入資料表
```
$make sql
```

### nginx server definition for example:

```
server {
    server_name message;
    listen 80;
    root /home/user/www/message;
    location / {
        try_files $uri @php;
    }
    location @php {
        fastcgi_split_path_info ^(.+)(\?/.+)$;
        fastcgi_pass unix:/var/run/php5-fpm.sock;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root/index.php;
    }
}