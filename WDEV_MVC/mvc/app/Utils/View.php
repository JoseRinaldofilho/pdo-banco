<?php

namespace App\Utils;

class View
{
    /**
     * metodo responsavel por retorna o conteudo de um view
     * @param string $view
     * @return string
     */
    private static function getContentView($view){

        $file = __DIR__.'/../../resources/views/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * @param string $view
     * @return string
     * metodo responsavel por retorna um conteudo renderizado de uma  view
     */
    public static function render($view)
    {
        // conteu da view
        $contenteView = self::getContentView($view);
    }
}