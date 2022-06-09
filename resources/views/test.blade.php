<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de test POO</title>
</head>
<body>

    <?php

        class Hero 
        {
            public $realName;
            public $heroName;
            public $age;

            public function __construct($Name, $entree)
            {
                $this->realName = $Name;
                $this->age = $entree;
            }

            public function askforBattle()
            {
                echo $this->realName . " veut se battre <br><br>";

            }
        }

        $spiderman = new Hero('Peter Parker', 18);
        $batman = new Hero('Bruce Wayne', 35);

        $spiderman->askforBattle();

        var_dump($spiderman);


    ?>

</body>
</html>