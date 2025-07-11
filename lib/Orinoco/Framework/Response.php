<?php
/**
 * Orinoco Framework - A lightweight PHP framework.
 *  
 * Copyright (c) 2008-2015 Ryan Yonzon <ryanyonzon@gmail.com>
 * Licensed under the MIT license: http://www.opensource.org/licenses/mit-license.php
 */

namespace Orinoco\Framework;

class Response
{
    // Http object
    public $Http;
    // View object
    public $View;

    /**
     * Constructor
     *
     * @param Orinoco\Framework\Http $http
     * @param Orinoco\Framework\View $view
     * @return void
     */
    public function __construct(Http $http, View $view)
    {
        $this->Http = $http;
        $this->View = $view;
    }
}
