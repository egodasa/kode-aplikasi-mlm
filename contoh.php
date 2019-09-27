<?php
  require "koneksi.php";
  $id_member = 1;
  $data_member = $db->query("SELECT * FROM tb_member WHERE id_member = ".$id_member)->fetch(PDO::FETCH_ASSOC);
  // mencari komisi member yg id nya 1
  $komisi = cariKomisi($db, $id_member, 10000);
?>
  <table>
    <tr>
      <th>ID Member</th>
      <td><?=$data_member['id_member']?></td>
    </tr>
    <tr>
      <th>Nama Member</th>
      <td><?=$data_member['nm_member']?></td>
    </tr>
    <tr>
      <th>Komisi</th>
      <td><?=$komisi?></td>
    </tr>
  </table>
