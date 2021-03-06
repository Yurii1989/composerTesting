<?php

require_once __DIR__ . "/../config/bootstrap.php";

$data = \Model\ParkPlace::readAll();
echo "<table id='list-style' class='table table-striped table-dark'><tr>
                <th>id</th>
                <th>type</th>
                <th>number</th>
                <th>occupied</th>
            </tr>";
foreach ($data as $datum) {
    echo "<tr>
            <td>".$datum->getId()."</td>
            <td>".$datum->getType()."</td>
            <td>".$datum->getNumber()."</td>
            <td>".$datum->isOccupied()."</td>
            </tr>";
}
echo "</table>";