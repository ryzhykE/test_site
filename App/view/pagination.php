{% macro pagination(count, page) %}
        {% set prev = page-1 %}
            {% if prev < 1 %}
                {% set prev = count %}
            {% endif %}
        {% set next = page+1 %}

        {% set next = page+1 %}
        {% if next < 1 %}
        {% set next = count %}
        {% endif %}

        <li><a href="{{prev}}">Предыдущая</a></li>
        <li><a href="{{next}}">Следующая</a></li>
{% endmacro %}