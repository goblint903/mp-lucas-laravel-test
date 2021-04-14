<?php

namespace App\Http\Controllers;

use App;
use stdClass;

class BaseController extends Controller{

    /** @var  App\Services\DbService $db */
    protected $db;
    public function init(){
        $this->db = App::make('App\Services\DbService');
    }
}
