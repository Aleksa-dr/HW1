<?php
$arr = [
    'domen' => 'localhost',
    'ip' => '127.0.0.1',
    'name' => 'MySite1',
];
$a = array(
    "domen" => "localhost",
    "ip" => "127.0.0.1",
    "name" => "MySite2",
);

foreach ($arr as $key => $value)
{
    echo "$key => $value <br>";
}
echo "<br>";
foreach ($a as $key => $value)
{
    echo "$key => $value <br>";
}

