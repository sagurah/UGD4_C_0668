<?php
    include '../component/sidebar.php'
?>

<div class="container-fluid">
    <div class="card mt-3 mb-3 shadow-lg">
        <div class="card-header fw-bold text-center">Add Data</div>
        <div class="card-body">
            <form method="POST", action="../process/addProcess.php">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Genre</label>
                    <input type="text" name="genre" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="release" class="form-label">Release</label>
                    <input type="text" name="release" id="" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="season" class="form-label">Season</label>
                    <input type="text" name="season" id="season" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="synopsis" class="form-label">Synopsis</label>
                    <textarea name="synopsis" id="synopsis" rows="3" class="form-control"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary" name="add">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>