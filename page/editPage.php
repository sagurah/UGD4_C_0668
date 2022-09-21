<?php 
    include'../component/sidebar.php';
    
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM movies WHERE id = '$id'") or die(mysqli_error($con));

    $fetch = mysqli_fetch_assoc($query);
    $name = $fetch['name'];
    $genre = $fetch['genre'];
    $release = $fetch['release'];
    $season = $fetch['season'];
    $synopsis = $fetch['synopsis'];
?>

<div class="container-fluid">
    <div class="card mt-3 mb-3 shadow-lg">
        <div class="card-header fw-bold text-center">Edit Data</div>
        <div class="card-body">
            <form method="POST", action="../process/editProcess.php?id=<?php echo $id; ?>">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="" class="form-control" value="<?php echo $name?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Genre</label>
                    <input type="text" name="genre" id="" class="form-control" value="<?php echo $genre?>">
                </div>
                <div class="mb-3">
                    <label for="release" class="form-label">Release</label>
                    <input type="text" name="release" id="" class="form-control" value="<?php echo $release?>">
                </div>
                <div class="mb-3">
                    <label for="season" class="form-label">Season</label>
                    <input type="text" name="season" id="season" class="form-control" value="<?php echo $season?>">
                </div>
                <div class="mb-3">
                    <label for="synopsis" class="form-label">Synopsis</label>
                    <textarea name="synopsis" id="synopsis" rows="3" class="form-control"><?php echo $synopsis?></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="update">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>