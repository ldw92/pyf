<?php

    $DataList= '[
                    {"shopname":"迪士尼"},
                    {"shopname":"蛋糕"},
                    {"shopname":"纸杯蛋糕"},
                    {"shopname":"礼盒"},
                    {"shopname":"派"},
                    {"shopname":"挞"},
                    {"shopname":"素食"},
                    {"shopname":"礼品卡"}
                ]';

// echo $DataList;


if ($_SERVER["REQUEST_METHOD"] == "GET") {

  echo $DataList;

} elseif ($_SERVER["REQUEST_METHOD"] == "POST"){

  echo $DataList;

}
