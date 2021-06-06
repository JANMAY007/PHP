<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Objects</title>
</head>
<body>
    <p>
        <?php
        /*
        Check the dollar sign $
        like when to use it
        It is not used when class variables are to be defined and are to be used
        */
            class Person
            {
                public $firstname;
                public $lastname;
                public $age;

                public function __construct($firstname, $lastname, $age)
                {
                    $this->firstname = $firstname;
                    $this->lastname = $lastname;
                    $this->age = $age;
                }

                public function hello()
                {
                    return "I am ".$this->firstname." ".$this->lastname.", my age is ".$this->age.".";
                }
            }
            $person1 = new Person('Janmay', 'Bhatt', 20);
            $person2 = new Person('bhatt', 'janmay', 20);

            echo $person1->hello();
            echo "<br>";
            echo $person2->hello();
        ?>
    </p>
</body>
</html>