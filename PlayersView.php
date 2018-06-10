<?php

include_once 'Players.php';

abstract class PlayersView {

    abstract public function update(Players $players);

}

class PlayersStringView extends PlayersView {

    public function update(Players $players) {

        echo "Current Players: \n";

        foreach ($players->getPlayers() as $player) {
            echo "\tName: "; echo $player['name']; echo "\n";
            echo "\tAge: "; echo $player['age']; echo "\n";
            echo "\tSalary: "; echo $player['salary']; echo "\n";
            echo "\tJob: "; echo $player['job']; echo "\n\n";
        }

    }

}

class PlayersHTMLView extends PlayersView {

    public function update(Players $players) {

        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                li {
                    list-style-type: none;
                    margin-bottom: 1em;
                }
                span {
                    display: block;
                }
            </style>
        </head>
        <body>
        <div>
            <span class="title">Current Players</span>
            <ul>
                <?php foreach ($players->getPlayers() as $player) { ?>
                    <li>
                        <div>
                            <span class="player-name">Name: <?= $player['name'] ?></span>
                            <span class="player-age">Age: <?= (string)$player['age'] ?></span>
                            <span class="player-salary">Salary: <?= $player['salary'] ?></span>
                            <span class="player-job">Job: <?= $player['job'] ?></span>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </body>
        </html>
        <?php

    }

}

?>