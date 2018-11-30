<?php
 include("DB.php");
$q1= "create table if not exists trains(
  no int NOT NULL,
  source varchar(30),
  destination varchar(50),
  type varchar(20),
  stime varchar(50),
  atime varchar(50)

);";
  $q2="create table if not exists station(
     id int,
     name varchar(50)
  );";
  $q3="create table if not exists res(
       snum int not null auto_increment primary key,
       state int
);";
$db->Execute($q1);
$db->Execute($q2);
$db->Execute($q3);
?>
