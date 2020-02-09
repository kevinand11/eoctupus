<?php

namespace App\Http\Controllers;

use Validator;
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
            if(count($data) > 0){
                $report[$data[0]]  = $data[1];
            }
        }
        $validator = Validator::make($report, [
            'user_id' => 'required|integer',
            'carrier_number' => 'required|string',
            'plate_number' => 'required|string',
            'location' => 'required|string',
            'description' => 'sometimes|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        return Report::create($report);
    }

    public function call(Request $call)
    {
        //
    }
}
