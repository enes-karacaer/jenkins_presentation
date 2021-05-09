<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function home()
    {
        return $this->render();
    }

    public function calc(Request $request)
    {
        return $this->render($request->all());
    }

    private function render($items = null)
    {
     //   $c = new Calculator();
        if (is_array($items) && isset($items['a']) && isset($items['b']) && isset($items['action'])){
            $action = $items['action'];
            $a = floatval($items['a']);
            $b = floatval($items['b']);
            if ($action == '+'){
                $result = $a + $b;
            }else if ($action == '-'){
                $result = $a - $b;
            }else if ($action == '*') {
                $result = $a * $b;
            }else{
                $result = $a / $b;
            }
            $items['result'] = $result;
        }else{
            $items = array(
                'a' => '',
                'b' => '',
                'action' => '+',
            );
        }
        return view('calc', $items);
    }
}
