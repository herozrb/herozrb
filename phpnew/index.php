<?php

include('./global.php');


   $query=$db->query("SELECT * FROM `p_config`");
   $row=mysql_fetch_array($query);

   //$db->get_show_msg("ss.php","╡ывВЁи╧╕");
  $smarty->assign("ok",$row[name]);
  $smarty->display("index.html");


?>