<?php

namespace Controller;

use \Model\ParkPlace;

class DefaultController
{
    public function homepageAction()
    {
        $parkPlaces = ParkPlace::readAll();
        include __DIR__ . '/../../view/list.html.php';
    }

    public function updateAction()
    {
        include __DIR__.'/../../view/update.html.php';


        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['idToEdit']) && !empty($_POST['numberEdit'])) {

            $idToUpdate = intval($_POST['idToEdit']);
            $_POST['occupied'] = ($_POST['occupied'] ?? null) === 'on' ? 1 : 0;
            $arrayUpdate = [
                'type' => $_POST['type'],
                'number' => $_POST['numberEdit'],
                'occupied' => $_POST['occupied']
            ];
            $park = new ParkPlace();
            $park->update($idToUpdate, $arrayUpdate);
            header('location: ./');
        }

    }

    public function deleteAction()
    {
        include __DIR__.'/../../view/delete.html.php';
        $data = \Model\ParkPlace::readAll();
        $array = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {

            $data = \Model\ParkPlace::readAll();
            var_dump($data);
            $array = [];
            foreach ($data as $datum) {
                $array[] = $datum->getId();
            }
            if (in_array($_POST['id'], $array)) {
                $park = new \Model\ParkPlace();
                $park->delete($_POST['id']);
                header('location: ./');
            } else {
                echo "<p style='color: red;'> wrong parking id";
            }
        }
    }

    public function createAction()
    {
        include __DIR__.'/../../view/create.html.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['number']) &&
                in_array($_POST['type'], ['normal', 'VIP', 'woman', 'fire'])) {
                $_POST['occupied'] = ($_POST['occupied'] ?? null) === 'on' ? 1 : 0;

                $park = new \Model\ParkPlace();
                $park->create($_POST);
                header('location: ./');
            }
        }
    }
}