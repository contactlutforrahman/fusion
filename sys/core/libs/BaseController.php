<?php

/**
 * Fusion
 *
 * An open source MVC application development framework for PHP.
 * This content is released under the GNU GENERAL PUBLIC LICENSE.
 * Copyright (c) 2012 - 2016, Softyard LAB.
 *
 * @package  Fusion
 * @author  Md. Shamim Shahnewaz
 * @copyright  Copyright (c) 2012 - 2016, Softyard LAB (http://softyardbd.com)
 * @license  GNU GENERAL PUBLIC LICENSE (https://www.gnu.org/licenses/gpl-3.0.en.html) License
 * @since  Version 1.0.0
 * @filename  BaseController.php
 */

namespace Fusion\Sys\Core\Libs;

use Fusion\Sys\Core\Libs\Loader;

class BaseController
{

    /**
     * List of loaded classes
     *
     * @var	array
     */
    protected $load = array();

    /**
     * BaseController constructor.
     *
     * @return mixed
     */
    public function __construct()
    {
        $this->load = new Loader();
    }

}