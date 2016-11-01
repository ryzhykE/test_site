<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title?></title>
    <link href="App/view/css/style.css" rel="stylesheet">
</head>
<body>
<table border="1" cellpadding="20px">
    <?php if($general):?>
    <thead>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Год рождения</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($general as $item):?>
            <tr>
                <td><?php echo $item->name?></td>
                <td>
                    <a href="/index/one/<? echo $item->id?>"><?php echo $item->surname?> &raquo;</a>
                </td>
                <td><?php echo $item->date?></td>
            </tr>
        <?php endforeach;?>
        <?php else :?>
        <p>Данных с такими параметрами нет</p>
    <?php endif;?>
    </tbody>
</table>



<div id="fon"></div>
<div id="load"></div>

<div class="sort">
    Сортировать по:<strong>имени</strong>(<span id="namea">от А до Я</span>/ <span id="named">от Я до А</span>); <strong>цене</strong>(<span id="pricea">возрастание</span>/<span id="priced">убывание</span>)
</div>



</body>
</html>