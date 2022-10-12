<?php
$data =file_get_contents("https://doa-doa-api-ahmadramadhan.fly.dev/api");
$doa =json_decode($data);
$list = "<h3> Kumpulan Doa Sehari - Hari</h3>";
for($i=0;$i<count($doa);$i++){

$list .= "
            <ol>
            <li>{$doa[$i]->doa}</li>
            <li>{$doa[$i]->ayat}</li>
            <li>{$doa[$i]->latin}</li>
            <li>{$doa[$i]->artinya}</li>
            </ol>        "

;}
echo $list;
?>