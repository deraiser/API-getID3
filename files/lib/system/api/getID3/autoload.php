<?php

/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at https://github.com/JamesHeinrich/getID3       //
//            or https://www.getid3.org                        //
//            or http://getid3.sourceforge.net                 //
//                                                             //
// Please see readme.txt for more information                  //
//                                                            ///
/////////////////////////////////////////////////////////////////

spl_autoload_register(function ($class) {
    if (\strpos($class, 'JamesHeinrich') !== false) {
        $file = \str_replace('JamesHeinrich\GetID3', '', $class);
        $file = \str_replace('\\', DIRECTORY_SEPARATOR, $file);
        $file = \realpath(__DIR__ . '/src/' . (empty($file) ? '' : DIRECTORY_SEPARATOR) . $file . '.php');
        if (\file_exists($file)) {
            require_once $file;
            return true;
        }
    }
    return false;
});
