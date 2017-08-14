<?php

    $DataList= '[
        {"goodsId":"101010","name":"热情百香果蛋糕","img":"img/d9.jpg","price":"319","describe":"冰雪世界，调皮雪宝，惊叹绝伦，情谊无限"},
        {"goodsId":"10fddsdf","name":"爱丽丝梦游仙境纸杯蛋糕","img":"img/d10.jpg","price":"199","describe":"梦幻茶会，三重美味，奇妙仙境，栩栩如生"},
        {"goodsId":"123322","name":"美女与野兽芒果蛋糕","img":"img/d11.jpg", "price":"219","describe":"朝夕见证，珍惜彼此，相知相守，如梦如幻"},
        {"goodsId":"2332846","name":"美女与野兽迷你纸杯蛋糕","img":"img/d12.jpg","price":"399","describe":"完美爱情，收获幸福，期待属于你的happy ending！"},
        {"goodsId":"3456","name":"小熊维尼原味重乳酪蛋糕 ","img":"img/d13.jpg","price":"299","describe":"童心未泯，憨态可掬，乳酪乐园，欢愉分享"},
        {"goodsId":"992348","name":"沉睡的黑森林","img":"img/d14.jpg","price":"319","describe":"动物王国，妙趣横生，勇敢追梦，美味成真"},
        {"goodsId":"123131","name":"爱丽丝梦游仙境红丝绒蛋糕","img":"img/d15.jpg","price":"199","describe":"冰雪世界，调皮雪宝，惊叹绝伦，情谊无限"},
        {"goodsId":"3424221299","name":"冰雪奇缘树心蛋糕","img":"img/frozen.jpg","price":"319","describe":"冰雪世界，调皮雪宝，惊叹绝伦，情谊无限"}
                        ]';

// echo $DataList;


if ($_SERVER["REQUEST_METHOD"] == "GET") {

  echo $DataList;

} elseif ($_SERVER["REQUEST_METHOD"] == "POST"){

  echo $DataList;

}
