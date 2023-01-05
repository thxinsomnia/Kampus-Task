/* Create Database and Table */
create database db_kampus;
 
use db_kampus;
 
CREATE TABLE `nama` (
  `id` int(11) NOT NULL auto_increment,
  `Nama` varchar(40),
  `Gaji` varchar(40),
  `Kehadiran` varchar(5),
  PRIMARY KEY  (`id`)
);