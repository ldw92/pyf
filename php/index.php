<?php

    $DataList2= '[
        {"name":"迪士尼","img":"img/d1.jpg"},
        {"name":"礼盒","img":"img/d2.png"},
        {"name":"蛋糕","img":"img/d3.jpg"},
        {"name":"挞","img":"img/d4.png"}
    ]';

// echo $DataList;


if ($_SERVER["REQUEST_METHOD"] == "GET") {

  echo $DataList2;

} elseif ($_SERVER["REQUEST_METHOD"] == "POST"){

  echo $DataList2;

}
