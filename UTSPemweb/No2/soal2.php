<?php
 $prov = array(
    array(
      "provinsi" => "JaTim",
      "kabupaten" => "Surabaya",
      "kecamatan" => "Jambangan",
    ),
    array(
        "provinsi" => "JaTim",
        "kabupaten" => "Surabaya",
        "kecamatan" => "Wonokromo",
    ),
    array(
        "provinsi" => "JaTim",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Taman",
    ),
    array(
        "provinsi" => "JaTim",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Waru",
    ),
    array(
        "provinsi" => "JaTeng",
        "kabupaten" => "Semarang",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "Jateng",
        "kabupaten" => "Semarang",
        "kecamatan" => "kecamatan 2",
    ),
    array(
        "provinsi" => "JaTeng",
        "kabupaten" => "Solo",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "JaTeng",
        "kabupaten" => "Solo",
        "kecamatan" => "kecamatan 2",
    ),
  );
  echo " Soal 2 ";
  echo " Shaffa Salsabillah 20050974008";
?>
<table border ="1" width = "900" align = "center">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Kabupaten</th>
      <th scope="col">Kecamatan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no =1;
    foreach($prov as $b){
      echo "<tr>";
      echo "<td>".$no."</td>
      <td>".$b['provinsi']."</td>
      <td>".$b['kabupaten']."</td>
      <td>".$b['kecamatan']."</td>";
      echo "</tr>";
      $no++;
    }
    ?>
  </tbody>
</table>