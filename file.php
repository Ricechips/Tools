<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>
<body>
<?php

//$f = @fopen('data','w');
//
//if($f){
//   fwrite($f, 'Hi Dude');
//   fclose($f);    
//   echo 'OK';
//    
//else{
//   echo '创建文件失败';
//}

//read data

//$f = @fopen('data','r');
//
//while(!feof($f)){
//  $content = fgets($f);
//  echo $content;
//}
//fclose($f);

//get content
echo file_get_content('data');


?>
</body>
</html>









//ps:chmod 777 可读可写可执行
