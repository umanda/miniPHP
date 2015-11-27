<?php

/**
 * Errors controller
 *
 * Errors controller can be only accessed from within the application itself,
 * So, any request that has errors as controller will be considered as invalid
 * @see App::isControllerValid()
 *
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 * @author     Omar El Gabry <omar.elgabry.93@gmail.com>
 */

class ErrorsController extends Controller{

    /**
     * Initialization method.
     *
     */
    public function initialize(){}

    public function NotFound(){
        echo $this->view->renderWithLayouts(Config::get('VIEWS_PATH') . "layout/errors/", Config::get('ERRORS_PATH') . "404.php");
    }

    public function Unauthorized(){
        echo $this->view->renderWithLayouts(Config::get('VIEWS_PATH') . "layout/errors/", Config::get('ERRORS_PATH') . "401.php");
    }

    public function BadRequest(){
        echo $this->view->renderWithLayouts(Config::get('VIEWS_PATH') . "layout/errors/", Config::get('ERRORS_PATH') . "400.php");
    }

    public function System(){
        echo $this->view->renderWithLayouts(Config::get('VIEWS_PATH') . "layout/errors/", Config::get('ERRORS_PATH') . "500.php");
    }
}
