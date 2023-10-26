<table border="1">
    <tr>
        <td>No</td><td>Nama</td><td>Email</td><td>Jenis Kelamin</td><td>Minat</td>
    </tr>

<?php
    $no = 1;
    $data = fopen("bukutamu.DAT", "r");
    while(!feof($data)){
        $nama = fgets($data, 255);
        if($nama == FALSE){
            break;
        }
        $email = trim(fgets($data, 255));
        $jenis_kelamin = trim(fgets($data, 255));
        $minat = trim(fgets($data, 255));
        
    
?>
    <tr>
        <td><?php echo $no; ?></td><td><?php echo $nama; ?></td><td><?php echo $email; ?></td><td><?php echo $jenis_kelamin; ?></td><td><?php echo $minat; ?></td>
        <td>
            <?php
                $minat1 = "PHP";
                $minat2 = "MySQL";
                $minat3 = "Linux";
                $minat4 = "Hacking";
                $pos_minat1 = strpos($minat, $minat1);
                $pos_minat2 = strpos($minat, $minat2);
                $pos_minat3 = strpos($minat, $minat3);
                $pos_minat4 = strpos($minat, $minat4);

                if($pos_minat1 !== FALSE){
                    echo "PHP<br>";
                }
                if($pos_minat2 !== FALSE){
                    echo "MySQL<br>";
                }
                if($pos_minat3 !== FALSE){
                    echo "Linux<br>";
                }
                if($pos_minat4 !== FALSE){
                    echo "Hacking<br>";
                }
            ?>
        </td>
    </tr>

<?php
        $no++;
    }
?>
</table>
    