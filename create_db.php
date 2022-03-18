<?php
   $ dbhost = 'mysql' ;
   $ dbuser = 'racine' ;
   $ dbpass = 'racine' ;
   $ conn = mysql_connect ( $ dbhost , $ dbuser , $ dbpass );
   
   si (! $ conn ) {
      die ( 'Impossible de se connecter : ' . mysql_error ());
   }
   
   echo  "Connecté avec succès\n" ;
   
   $ sql = 'CRÉER la base de données test_db' ;
   $ retval = mysql_query ( $ sql , $ conn );
   
   echo   "La base de données test_db a été créée avec succès\n" ;

   si (! $ reval ) {
      die ( 'Impossible de créer la base de données : ' . mysql_error ());
   

   }
   mysql_close ( $ conn );
?>
