<!doctype html>
<html lang="en">
<head>
    <style>
        .button{
            -moz-appearance: none;
            -webkit-appearance: none;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #fff;
            border: 1px solid #d7d7d7;
            border-radius: 3px;
            color: #4d545d;
            display: -ms-inline-flexbox;
            display: inline-flex;
            font-size: 16px;
            height: 32px;
            line-height: 24px;
            position: relative;
            vertical-align: top;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding-left: 10px;
            padding-right: 10px;
            text-align: center;
            white-space: nowrap;
            font-family: Montserrat,Helvetica,Arial,sans-serif;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracast</title>
</head>
<body>

<ul>
<!--    foreach loop-->
    <?php foreach ($name as $names) :?>


    <li><?= $names; ?></li>


    <?php endforeach; ?>
    <br>
    <hr>
<!--    associative array-->

    <?php
    foreach ($person as $key=> $feature):?>

        <li><strong><?= $key;?></strong><?= $feature;?></li>

    <?php
    endforeach;
    ?>
    <br>
    <li>
        <strong>Status: </strong> <?= $person['status'] ? "<span class='icon'> &#9989</span>" : "Incompleted" ?>
    </li>
    <hr>
    <?php if($person['status']) : ?>
        <strong>Status: </strong>
        <span class='icon'> &#9989</span>

    <?php endif;?>
    <a href="#" class="button"> Button</a>
</ul>

</body>
</html>