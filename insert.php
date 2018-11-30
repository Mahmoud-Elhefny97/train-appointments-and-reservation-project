<?php
 include("DB.php");

   $q="INSERT INTO trains(no,source,destination,type,stime,atime)
      values(900,'aswan','cairo','m','3pm','2Am'),
      (150,'aswan','cairo','v','5pm','3Am'),
      (2020,'aswan','cairo','m','7pm','9Am'),
      (2002,'aswan','cairo','v','7am','7pm'),
      (544,'aswan','cairo','d','3pm','2Am'),
      (775,'aswan','cairo','n','4pm','4Am'),
      (2000,'aswan','cairo','m','8am','5pm'),
      (20,'aswan','cairo','d','5pm','2Am'),
      (74,'aswan','cairo','m','4pm','1Am'),
      (24,'aswan','cairo','v','3am','4pm'),

      (454,'cairo','aswan','v','5pm','4Am'),
      (45,'cairo','aswan','m','3pm','11Pm'),
      (202,'cairo','aswan','v','7am','7pm'),
      (921,'cairo','aswan','d','3pm','2Am'),
      (997,'cairo','aswan','n','4pm','4Am'),
      (54,'cairo','aswan','m','8am','5pm'),
      (81,'cairo','aswan','d','5pm','2Am'),
      (33,'cairo','aswan','m','4pm','1Am'),
      (95,'cairo','aswan','v','3am','4pm'),


      (45,'aswan','cairo','v','5pm','3Am'),
      (250,'aswan','cairo','m','7pm','9Am'),
      (24,'aswan','cairo','v','7am','2pm'),
      (744,'aswan','cairo','d','3pm','Am'),
      (74,'aswan','cairo','n','4pm','5Am'),
      (240,'aswan','cairo','m','8am','7pm'),
      (854,'aswan','cairo','d','5pm','5Am'),
      (87,'aswan','cairo','m','4pm','4Am'),
      (45,'aswan','cairo','v','3am','8pm'),

      (28,'cairo','aswan','v','5pm','1Am'),
      (20,'cairo','aswan','m','3pm','11Pm'),
      (42,'cairo','aswan','v','7am','2pm'),
      (1020,'cairo','aswan','d','3pm','3Am'),
      (2018,'cairo','aswan','n','4pm','4Am'),
      (845,'cairo','aswan','m','8am','5pm'),
      (454,'cairo','aswan','d','5pm','8Am'),
      (343,'cairo','aswan','m','4pm','10Am'),
      (985,'cairo','aswan','v','3am','1pm');
   ";
 $db->Execute($q);
?>
