<?php
///write
$file = fopen("file.txt","a+t");//відкриває файл для запису
//r+ // для запису та читання з перезаписом
//w - тільки для запису обрізає до 0 довжини
//w+ -тільки для запису та читання обрізає до 0 довжини
//а - тільки запис в кінець файлу
//а+ - тільки запис та читання в кінець файлу
//a+t - t-додаткові символи
fwrite($file,"Lore Olympus’: Webtoon And The Jim Henson Company Will Partner For YA Animated Series");
fclose($file);

/////read
$file = fopen("file.txt","r+t");
while(!feof(($file)))
{
    echo fread($file,5) . "<br/>";
}
////перевести курсор в інше положення
fseek($file,0);
echo fread($file,1) . "<br/>";
fclose($file);

echo "<hr/>";
//write
file_put_contents("new_file.txt","Lore Olympus’: Webtoon And The Jim Henson Company Will Partner For YA Animated Series");


echo file_get_contents("new_file.txt");
///
echo file_exists("new_file.txt");//чи існує
echo filesize("new_file.txt");//size
rename("new_file.txt", "rename_file.txt");//rename
unlink("rename_file.txt");//delete

////права користувачів
echo __FILE__;
echo "<br/>";
echo fileperms(__FILE__);
chmod(__FILE__,0777);

//phpinfo();//інфо для розробника
echo $_SERVER["REMOTE_ADDR"];//інфо про користувачів які заходять на сайт




?>