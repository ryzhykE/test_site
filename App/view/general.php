<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title?></title>
    <link href="/App/view/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
        </ul>
    </div><!--/.nav-collapse -->
    <div>
        <?php if($single->pfoto !== null):?>
        <img src="/App/view/img/<?php echo $single->pfoto; ?>" class="img-responsive" alt="<?php echo $single->surname; ?>"/>
            <?php else :?>
            <p>Нет картинки</p>
        <?php endif;?>
        <p>Фамилия: <?php echo $single->surname; ?></p>
        <p>Имя: <?php echo $single->name; ?></p>
        <p> Дата рождения: <?php echo $single->date; ?></p>
        <p>Биография: </br>
            <?php echo $single->biography; ?>
        </p>
        <div >
            <?php if(!empty($single->genpl)): ?>
                <?php if ($single->genpl->id !== null):?>
                    <a href="/index/one/<?php echo $single->genpl->id?>">Следующий - <?php echo $single->genpl->surname?></a>
                <? endif; ?>
            <?php else :?>
                <a href="/index/one/1">В начало</a>
            <? endif; ?>
        </div>
        <div>
            <?php if(!empty($single->genmin)): ?>
                <?php if ($single->genmin->id !== null):?>
                    <a href="/index/one/<?php echo $single->genmin->id?>">Предыдущий - <?php echo $single->genmin->surname?></a>
                <? endif; ?>
            <? endif; ?>
        </div>
    </div>
</body>
</html>