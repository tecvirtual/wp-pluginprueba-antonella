<?php
/**
* No modify this file !!!
*/
namespace RP;

/*
* Class Start
* @package RP\Start
*/
class Start
{
    /*
    * You can add start functions for start the plugin
    * @return void
    */
    public function __construct()
    {
        $language   = new Language();
        $hooks      = new Hooks();
        $request    = new Request();
    }
}
