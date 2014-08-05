Mysql new user sql
-----------------------
###james
GRANT USAGE ON *.* TO 'james'@'localhost' IDENTIFIED BY PASSWORD '*A4B6157319038724E3560894F7F932C8886EBFCF';

GRANT ALL PRIVILEGES ON `james`.* TO 'james'@'localhost' WITH GRANT OPTION;

###testmessage
GRANT USAGE ON *.* TO 'testmessage'@'localhost' IDENTIFIED BY PASSWORD '*A4B6157319038724E3560894F7F932C8886EBFCF';

GRANT ALL PRIVILEGES ON `testmessage`.* TO 'testmessage'@'localhost';

New DATABASE testmessage IF NOT EXISTS
----------------------
CREATE DATABASE IF NOT EXISTS `testmessage` COLLATE utf8_general_ci;

用testmessage.sql將資料匯入testmessage資料庫
用james.sql將資料匯入james資料庫
