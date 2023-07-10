<?php

namespace Flashpoint\Controllers;

class Contact extends Controller
{
    /**
     * Method setting the view and headers for the contact page
     * @param array $args Leave this array empty - no data are used
     * @return bool TRUE, if the data was set successfully
     */
    public function process(array $args): bool
    {
        self::$data['layout_title'] = 'Contact - Flashpoint Archive';
        self::$data['layout_description'] = 'A community effort to preserve games and animations from the web.';
        self::$data['layout_keywords'] = 'Flash, Shockwave, HTML5, Unity, Archive, Webgame Preservation, Flash Game Archive, BlueMaxima, DarkMoe';

        self::$views[] = 'contact';
        self::$dictionaries[] = 'contact';
        self::$cssFiles[] = 'contact';
        return true;
    }
}
