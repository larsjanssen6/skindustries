<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use src\test;

class test extends Controller
{
	public function __construct()
	{

	}

    public function test()
    {
    	$test = new test();
    	return $test->en();
    }
}
