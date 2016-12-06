<?php
$age = 122;

switch ($age)
{
    case ($age < 3):
        echo "Радуйтесь жизни :)";
        break;
    case ($age >= 3 && $age <=6):
        echo "Вам пора в детский садик!";
        break;
    case ($age > 6 && $age <=18):
        echo "Вам пора в школу!";
        break;
    case ($age > 18 && $age <=65):
        echo "Вам пора на работу!";
        break;
    case ($age > 65 && $age <=100):
        echo "Вам пора на пенсию!";
        break;
    case ($age > 100):
        echo "Вам пора в могилу!";
}