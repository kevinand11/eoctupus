<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class HooksController extends Controller
{
    public function message(Request $request)
    {
        $lines = explode('\n', $request['body']);
        $report = [];
        foreach($lines as $line){
            $data = explode('::', $line);
            $report[$data[0]]  = $data[1];
        }
        Report::create($report);
        return;
    }

    public function call(Request $call)
    {
        //
    }
}
