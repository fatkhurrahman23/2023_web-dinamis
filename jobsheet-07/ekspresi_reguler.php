contoh preg_match untuk mengecek format email dengan regex <br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Email: <input type="text" name="email"> <br>
        <input type="submit" value="Cek">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST["email"];
            if(empty($_POST["email"])){
                echo "Email harus diisi";
        
            }else{
                $ekspresi = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

                if(preg_match($ekspresi, $email)){
                    echo "Alamat email <b>".$email."</b> valid";
                }else{
                    echo "Alamat email <b>".$email."</b> tidak valid";
                }
        
            }
        }
    ?>