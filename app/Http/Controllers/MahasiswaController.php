<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function index(Request $request, $class = null){
        $students = [
            ['name' => 'AAAA', 'class' => '6A', 'id' => '1'],
            ['name' => 'BBBB', 'class' => '6A', 'id' => '2'],
            ['name' => 'CCCC', 'class' => '6B', 'id' => '3'],
            ['name' => 'DDDD', 'class' => '6B', 'id' => '4'],
            ['name' => 'EEEE', 'class' => '6C', 'id' => '5'],
            ['name' => 'FFFF', 'class' => '6C', 'id' => '6'],
            ['name' => 'GGGG', 'class' => '6D', 'id' => '7'],
            ['name' => 'HHHH', 'class' => '6D', 'id' => '8'],
        ];

        $requestKelas = request()->class;
        if ($class != null || isset($requestKelas)) {
            $students = array_filter($students, function($std){
                return $std['class'] == request()->class;
            });
        }
        return view('index2', compact('students', 'class', 'requestKelas'));

    }

    public function home(){
        return view('welcome');
    }

}
