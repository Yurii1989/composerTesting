<!DOCTYPE html>
<html>
<head>
    <title>Parking spaces</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/Style/Style.css">
</head>
<body>
<h1 class="d-flex justify-content-center m-4">Putin's Spy Parking</h1>
<div class="card-group">
    <div class="card">
        <div class="contain">
            <img src="../src/img/above-activity-adorable-982104.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Create</h5>
            <form method="post">
                <select class="form-control" name="type">
                    <option value="normal">Normal</option>
                    <option value="VIP">VIP</option>
                    <option value="woman">Woman</option>
                    <option value="fire">Fire fighters</option>
                </select>
                <input type="text" class="form-control" name="number" required/>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="occupied">
                    <label class="form-check-label">Is occupied?</label>
                </div>
                <button class="btn btn-outline-dark">Submit</button>
            </form>
<?php

require_once __DIR__. "/../config/bootstrap.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['number']) &&
        in_array($_POST['type'], ['normal', 'VIP', 'woman', 'fire'])) {
        $_POST['occupied'] = ($_POST['occupied'] ?? null) === 'on' ? 1 : 0;

        $park = new \Model\ParkPlace();
        $park->create($_POST);
        header('location: index.php');
    }
}

?>
        </div>
    </div>
    <div class="card">
        <div class="contain">
            <img src="../src/img/architecture-asphalt-automobile-1738655.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Delete</h5>
            <div class="justify-content-between">
                <?php include __DIR__.'/delete.php'; ?>

            </div>

        </div>
    </div>


    <!-- third card with xxxx function -->


    <div class="card">
        <div class="contain">
            <img src="../src/img/architecture-automobile-cars-63294.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">Edit parking space</h5>
            <p>(choose id number of the parking space)</p>
            <?php include __DIR__.'/update.php'; ?>
        </div>
    </div>
</div>
        <?php include __DIR__.'/view.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
