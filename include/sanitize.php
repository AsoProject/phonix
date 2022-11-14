<?php

function debug($check)
{
   echo '<pre>';
   var_dump($check);
   echo'</pre>';

}



//サニタイジング関数
function sanitize($before){
  //foreachで一括処理
  foreach($before as $key=>$value)
  {
   $after[$key]=htmlspecialchars($value,ENT_QUOTES,'UTF-8');
  }
  return $after;
}
?>