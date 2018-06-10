<?php

class Players {
    
    private $playerArray;

    function __construct() {

        $this->playerArray = array();

    }

    private function setPlayer(array $player) {

        if (is_array($player)) {

            $newPlayer = array(
                'name' => '',
                'age' => 0,
                'job' => '',
                'salary' => ''
            );

            if (isset($player['name'])) { 
                $newPlayer['name'] = $player['name']; 
            }
            if (isset($player['age']) && is_integer($player['age'])) { 
                $newPlayer['age'] = (int)$player['age']; 
            }
            if (isset($player['job'])) { 
                $newPlayer['job'] = $player['job']; 
            }
            if (isset($player['salary'])) { 
                $newPlayer['salary'] = $player['salary']; 
            }

            $this->playerArray[] = $newPlayer;

        }

    }

    public function setPlayers($playersArray) {

        if (is_array($playersArray)) {

            foreach ($playersArray as $player) {

                $this->setPlayer($player);

            }   
 
        }        

    }

    public function getPlayers() {

        return $this->playerArray;

    }

    public function setJSON($json) {

        $playersArray = json_decode($json, true);

        if (is_array($playersArray)) {
            $this->setPlayers($playersArray);
        }

    }

    public function getJSON() {

        $json = json_encode($this->playerArray);

        return $json;

    }

    public function clearPlayers() {

        $this->playerArray = array();

    }

}

?>