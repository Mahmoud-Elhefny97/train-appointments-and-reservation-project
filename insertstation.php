<?php
   include("DB.php");
   $q=" insert into station(id,name) values
   (1,'cairo'),
   (2,'ALEXANDRIA'),
   (3,'giza'),
   (4,'beni suef'),
    (6,'al minia'),
     (7,'aswan'),
     (8,'luxor'),
     (9,'QENA'),
     (10,'sohag')
     "  ;
     $db->Execute($q);
?>
