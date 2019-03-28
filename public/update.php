<?php

require_once __DIR__. "/../config/bootstrap.php";

$data = \Model\ParkPlace::readAll();
$array = [];
$idToUpdate = '';
foreach ($data as $datum) {
    $array[] = $datum->getId();
}
?>
    <form method="post">
        <input type="text" class="form-control" name="idToEdit" required />
        <button class="btn btn-outline-dark">Submit</button>
    </form>

<?php

if (!empty($_POST['idToEdit']) && in_array($_POST['idToEdit'], $array)) {
    $idToUpdate = intval($_POST['idToEdit']);
    $chosenId = \Model\ParkPlace::read($_POST['idToEdit']);
//var_dump($chosenId);
    ?>


    <h5>id: <?php echo $chosenId['id']; ?>, type: <?php echo $chosenId['type']; ?>, number: <?php echo $chosenId['number']; ?>, occupied: <?php echo $chosenId['occupied']; ?></h5>
    <form method="post">
        <select name="type" class="form-control">
            <option value="normal">Normal</option>
            <option value="VIP">VIP</option>
            <option value="woman">Woman</option>
            <option value="fire">Fire fighters</option>
        </select>
        <input type="text" class="form-control" name="numberEdit" required/>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="occupied">
            <label class="form-check-label">Is occupied?</label>
        </div>
        <input type="hidden" name="needId" value="<?=$_POST['idToEdit']?>">
        <button class="btn btn-outline-dark">Submit</button>
    </form>

    <?php
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['numberEdit']) &&
        in_array($_POST['type'], ['normal', 'VIP', 'woman', 'fire'])) {
        var_dump($_POST);
        $_POST['occupied'] = ($_POST['occupied'] ?? null) === 'on' ? 1 : 0;
        $arrayUpdate = ['type' => $_POST['type'], 'number' => $_POST['numberEdit'], 'occupied' => $_POST['occupied']];
        var_dump($arrayUpdate);
        $park = new \Model\ParkPlace();var_dump($idToUpdate);
        var_dump($park->update(intval($_POST['needId']), $arrayUpdate));
        header('location: index.php');
    }
}