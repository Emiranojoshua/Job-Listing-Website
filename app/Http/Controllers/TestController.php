<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function __invoke(){

        $test = new Test;
        // $tes = $test->findOrFail(3);
        // $tes->delete();
        $test->destroy(2);
        $test->onlyTrashed()->restore();
       dd($test->withTrashed()->get());
    }
}
