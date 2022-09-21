<?php
    if(isset($_POST['update'])){
        include('../db.php');
        $id = $_GET['id'];
        $name = $_POST['nama'];
        $genre = $_POST['genre'];
        $release = $_POST['release'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
        
        $query = mysqli_query($con, 
        "UPDATE `movies` SET `name`='$name',`genre`='$genre',`release`='$release',`season`='$season',`synopsis`='$synopsis' WHERE id = '$id'") or die(mysqli_error($con));
        
        if($query){
            echo '
            <script>
                alert("Edit Success");
                window.location = "../page/listMoviePage.php";
            </script>';
        } else{
            echo '
            <script>
                alert("Edit Failed");
                window.location = "../page/editPage.php";
            </script>';
        }
    } else{
        echo '
            <script>
                alert("Update isnot SET");
                window.history.back();
            </script>';
    }
?>