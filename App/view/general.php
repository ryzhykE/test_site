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
    </div>
    <div>
        <img src="/App/view/img/{{ single.pfoto}}" class="img-responsive" alt="{{ single.surname}}"/>
        <p>Фамилия: {{ single.surname}}</p>
        <p>Имя: {{ single.name}}</p>
        <p> Дата рождения: {{ single.date}}</p>
        <p>Биография: </br>
            {{ single.biography}}
        </p>
        <div >
             <p class="rang">Звание:{{ single.genpl.rang}}</p>
        </div>
    </div>
    {% block nav %}
    <nav>
        <ul class="pager">
            {% import 'pagination.php' as pagination %}
            {{ pagination.pagination(generaler | length, page) }}
        </ul>
    </nav>
    {% endblock %}
</body>
</html>

