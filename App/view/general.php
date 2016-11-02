<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ title }}</title>
    <link href="/App/view/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
        </ul>
    </div><!--/.nav-collapse -->
    <div>
        <img src="/App/view/img/{{ single.pfoto}}" class="img-responsive" alt="{{ single.surname}}"/>
        <p>Фамилия: {{ single.surname}}</p>
        <p>Имя: {{ single.name}}</p>
        <p> Дата рождения: {{ single.date}}</p>
        <p>Биография: </br>
            {{ single.biography}}
        </p>
        <div >
            <a href="/index/one/{{ single.genpl.id | default('Нет автора')}}>">Следующий - {{ single.genpl.surname}}</a>
        </div>
        <div>
            <a href="/index/one/{{ single.genmin.id}}">Предыдущий - {{ single.genmin.surname}}</a>
        </div>
    </div>
</body>
</html>