<?php
$age = 55;
$gender = 'man';

if($age < 3)
{
    echo "Радуйтесь жизни :)";
}
elseif($age >= 3 && $age <=6)
{
    echo "Вам пора в детский садик!";
}
elseif($age > 6 && $age <=18)
{
    echo "Вам пора в школу!";
}
elseif($age > 18 && $age <=65 && $gender == 'man')
{
    echo "Вам пора на работу!";
}
elseif($age > 18 && $age <=60 && $gender != 'man')
{
    echo "Вам пора на работу!";
}
elseif($age > 65 && $age <=100 && $gender == 'man')
{
    echo "Вам пора на пенсию!";
}
elseif($age > 60 && $age <=100 && $gender != 'man')
{
    echo "Вам пора на пенсию!";
}
elseif($age > 100)
{
    echo "Вам пора в могилу!";
}