create database watershed;
create user 'watershed'@'localhost' identified by '_watershed';
grant all privileges on watershed.* to 'watershed'@'localhost';
