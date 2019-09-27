<?php

require("vendor/autoload.php");

use Medoo\Medoo;

// koneksi database
$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => "db_mlm",
    'server' => "localhost",
    'username' => "root",
    'password' => "mysql"
]);


/*
 * cariKomisi($db, $id_member_re, $per_komisi)
 * parameter :
 * $db = variabel koneksi database
 * $id_member_ref = id member yang mau dicari berapa komsinya
 * $per_komisi = besar komisi
 * hasil return : integer (komisi)
 * contoh pemakai :
 * cariKomisi($db, 7, 10000) mencari komisi member yg id nya 7
*/
function cariKomisi($db, $id_member_ref, $per_komisi = 10000){
  $no = 0;
  $komisi = 0;
  $hasil = [];
  $hasil_tmp = $db->select("tb_referral", "*", ["id_member_ref" => $id_member_ref]);
  $hasil = $hasil_tmp;
  foreach($hasil_tmp as $i => $d){
    $komisi += $per_komisi;
    $hasil[$no]['anak'] = [];
    $hasil[$no]['anak'][] = $db->select("tb_referral", "*", ["id_member_ref" => $d['id_member']]);
    $komisi += cariKomisi($db, $d['id_member']);
    $no++;
  }
  $hasil['komisi'] = $komisi;
  return $komisi;
}

?>
