<?php

    if(isset($_POST['add'])){
        include('../db.php');
        $name = $_POST['nama'];
        $genre = $_POST['genre'];
        $release = $_POST['release'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
        
        // Melakukan insert ke databse dengan query dibawah ini 
        $query = mysqli_query($con, "INSERT INTO `movies`(`name`, `genre`, `release`, `season`, `synopsis`) VALUES ('$name','$genre','$release','$season','$synopsis')") or die(mysqli_error($con)); // perintah mysql yang gagal dij

        if($query){
            echo
                    '<script>
                        alert("Add Success");
                        window.location = "../page/listMoviePage.php"
                    </script>';
        } else{
            '<script>
                alert("Add Gagal");
                window.history.back();
            </script>';
        }

    } else{
            echo
            '<script>
                alert("$_POST ERROR");
                window.history.back();
            </script>';
    }
    
?>