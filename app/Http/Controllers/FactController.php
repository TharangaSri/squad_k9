<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fact;

class FactController extends Controller
{
     public function index($number) {
        try {
            //get random fact from database
            $random_facts = Fact::select(['body'])->inRandomOrder()->limit($number)->get();
            if (count($random_facts) > 0) {
                foreach ($random_facts as $fact) {
                    //create return array
                    $return[] = array('fact' => $fact['body']);
                }
                return response()->json($return, 200);
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
            exit;
        }
    }

}
