<?php

namespace App;

/**
 * @property string title
 */
class View
    implements \Countable
{
    use TMagic;

    /**
     * @param $template
     * @return string
     */
    public function renderTwig($template)
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/view');
        $twig = new \Twig_Environment($loader);
        ob_start();
        $html = $twig->render($template, $this->data);
        ob_end_clean();
        return $html;

    }

    public function displayTwig($template)
    {
        echo $this->renderTwig($template);
    }

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->data);
    }
}