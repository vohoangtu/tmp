<?php

const LIBRARIES = './libraries/';
const SOURCES = './sources/';
const LAYOUT = 'layout/';
const THUMBS = 'thumbs';
const WATERMARK = 'watermark';
const APP = './app/';


require_once LIBRARIES . "config.php";
require_once LIBRARIES . "config-type.php";
require_once LIBRARIES . "vendor/autoload.php";


include APP . "routes.php";