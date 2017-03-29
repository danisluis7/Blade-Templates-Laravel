<?php
/**
 * Created by PhpStorm.
 * User: enclaveit
 * Date: 29/03/2017
 * Time: 16:29
 */

namespace App\Http\Controllers;


class ControllerAdminIndex extends Controller
{
    public function index(){
        return view('templates.master');
    }
}

