<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // menentukan pilihan berdasarkan 6 kondisi yang diberikan
        // mengenai pilihan genre film

        $genre = "komedi";
        switch($genre){
            case "horor":
                echo "Film horor yang tersedia adalah The Nun";
                break;
            case "komedi":
                echo "Film komedi yang tersedia adalah Warkop DKI";
                break;
            case "action":
                echo "Film action yang tersedia adalah Fast and Furious";
                break;
            case "thriller":
                echo "Film thriller yang tersedia adalah Parasite";
                break;
            case "animasi":
                echo "Film animasi yang tersedia adalah Upin dan Ipin";
                break;
            case "drama":
                echo "Film drama yang tersedia adalah Titanic";
                break;
            default:
                echo "Film yang anda cari tidak tersedia";
        }

    ?>
</body>
</html>