<?php   
$handle = fopen("c:\\folder\\file.txt", "r");   
?>  
<?php   fclose($handle);   
?>   
<?php     
$filename = "c:\\myfile.txt";     
$handle = fopen($filename, "r");//open file in read mode     
   
$contents = fread($handle, filesize($filename));//read file     
   
echo $contents;//printing data of file   fclose($handle);//close file     
?>     
<?php   
$fp = fopen('data.txt', 'w');//open file in write mode   
fwrite($fp, 'hello ');   fwrite($fp, 'php file');   
fclose($fp);   
   
echo "File written successfully";   
?>   
<?php     unlink('data.txt');   
    
    echo "File deleted successfully";   
    ?>   
    