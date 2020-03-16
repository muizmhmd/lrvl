<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    private $students = [
        ['name' => 'AAAA', 'class' => '6A', 'id' => '1'],
        ['name' => 'BBBB', 'class' => '6A', 'id' => '2'],
        ['name' => 'CCCC', 'class' => '6B', 'id' => '3'],
        ['name' => 'DDDD', 'class' => '6B', 'id' => '4'],
        ['name' => 'EEEE', 'class' => '6C', 'id' => '5'],
        ['name' => 'FFFF', 'class' => '6C', 'id' => '6'],
        ['name' => 'GGGG', 'class' => '6D', 'id' => '7'],
        ['name' => 'HHHH', 'class' => '6D', 'id' => '8'],
    ];

    public function index(Request $request, $class = null)
    {
        
        $students = $this->students;
        $requestKelas = request()->class;
        if ($class != null || isset($requestKelas)) {
            $students = array_filter($students, function($std){
                return $std['class'] == request()->class;
            });
        }
        return view('index', compact('students', 'class', 'requestKelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return redirect('students')->with('status', "Data {$request->name} berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $students = $this->students;

        return view('show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = $this->students;

        return view('edit', compact('students','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect('students')->with('status', 'Data berhasil update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

     */
    public function destroy($id)
    {
        foreach ($this->students as $key => $value) {
            if ($value['id'] == $id) {
                $student = $value;
            }
        }
        return redirect('students')->with('status', "Data {$student['name']} telah dihapus!");
    }
}
