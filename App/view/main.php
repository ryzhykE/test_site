<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ title }}</title>
    <link href="App/view/css/style.css" rel="stylesheet">
</head>
<body>
<table border="1" cellpadding="20px">
    <thead>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Год рождения</th>
    </tr>
    </thead>
    <tbody>
            {% for item in general %}
            <tr>
                <td>{{ item.name}}</td>
                <td>
                    <a href="/index/one/{{ item.id}}">{{ item.surname}} &raquo;</a>
                </td>
                <td>{{ item.date}}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>

<div id="fon"></div>
<div id="load"></div>

</body>
</html>