<?php

    $DataList= '[
            {"name":"榴莲纸杯蛋糕","img":"img/d5.jpg",
            "size":"9寸","price":"315"},
            {"name":"榴莲乳酪慕斯蛋糕","img":"img/d6.jpg",
            "size":"6吋","price":"249"},
            {"name":"樱桃乳酪派","img":"img/d5.jpg",
            "size":"9寸","price":"315"},
            {"name":"素食迷你纸杯礼盒","img":"img/d8.jpg",
            "size":"礼盒","price":"199"}
        ]';

// echo $DataList;


if ($_SERVER["REQUEST_METHOD"] == "GET") {

  echo $DataList;

} elseif ($_SERVER["REQUEST_METHOD"] == "POST"){

  echo $DataList;

}
