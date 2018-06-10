<?php

include_once 'Players.php';
include_once 'PlayersView.php';

class PlayersController {

    private $model;
    private $view;

    public function __construct(Players $players, PlayersView $playersView) {
        
        $this->model = $players;
        $this->view = $playersView;

    }

    public function readArray(Array $array) {
        
        $this->model->setPlayers($array);

    }

    public function readJSON(string $json) {

        $this->model->setJSON($json);

    }

    public function readFile(string $filename = null) {

        if (!is_null($filename) && file_exists($filename)) {
            $json = file_get_contents($filename);
            $this->model->setJSON($json);
        }
        
    }

    public function writeArray() {

        return $this->model->getPlayers();

    }

    public function writeJSON() {

        return $this->model->getJSON();

    }

    public function writeFile(string $filename = null) {

        $success = false;
        $json = $this->model->getJSON(); 
        
        if (!is_null($filename) && substr(strtolower($filename), -5, 5) == '.json') {
            file_put_contents($filename, $json);
            $success = true;
        }

        return $success;

    }

    public function clear() {

        $this->model->clearPlayers(); 

    }

    public function updateView() {

        $this->view->update($this->model);

    }

}

?>