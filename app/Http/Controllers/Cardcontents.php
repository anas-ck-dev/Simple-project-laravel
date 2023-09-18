<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class Cardcontents extends Controller
{

    private static function getData(){
        return [
            ["id" => 1, "mark" => "Lenovo", "model" => "Thinkpad E15 G4", "DateProduction" => 2022, 'prix' => '200$' ],
            ["id" => 2, "mark" => "Lenovo", "model" => "Thinkpad E15 G4", "DateProduction" => 2022, 'prix' => '200$' ],
            ["id" => 3, "mark" => "Lenovo", "model" => "Thinkpad E15 G4", "DateProduction" => 2022, 'prix' => '200$' ],
            ["id" => 4, "mark" => "Lenovo", "model" => "Thinkpad E15 G4", "DateProduction" => 2022, 'prix' => '200$' ]
        ] ;  
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("computers.index", [
            // 'computers' => self::getData()
            'computers' => Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'computer-mark' => 'required|alpha:ascii',
            'computer-model' => 'required|regex:/^[A-Za-z0-9\s]+$/|ascii',
            'computer-DateProduction' => 'required',
            'computer-prix' => 'required|numeric'
        ],[
            'computer-mark.required' => 'The computer mark field is required.',
            'computer-mark.alpha' => 'The mark field must be a character.',
            'computer-model.required' => 'The computer model field is required.',
            'computer-model.regex' => 'The computer model field must be a character.',
            'computer-DateProduction.required' => 'The production date field is required.',
            'computer-prix.required' => 'The price field is required.',
            'computer-prix.numeric' => 'The price field must be a number.',
        ]);     

        $lastComputer = Computer::orderBy('id', 'desc')->first(); // Get the last computer record

        if ($lastComputer) {
            $newId = $lastComputer->id + 1; // Increment the last ID by 1
        } else {
            $newId = 0; // If no records exist, start with ID 1
        }

        $computer = new Computer();

        $computer->id = $newId;
        $computer->mark = $request->input('computer-mark');
        $computer->model = $request->input('computer-model');
        $computer->DateProduction = $request->input('computer-DateProduction');
        $computer->prix = $request->input('computer-prix');

        $computer-> save();

        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $computer)
    {
        // $computers  = self::getData();
        // $index = array_search($computer, array_column($computers, 'id'));
        
        $index = Computer::findOrFail($computer);

        // if($index === false){
        //     abort(404);
        // }

        return view('computers.show', [
            'computer' => $index
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $computer)
    {  
        return view('computers.edit',[
            'computer' => computer::findOrFail($computer)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $computer)
    {
        $request->validate([
            'computer-mark' => 'required|alpha:ascii',
            'computer-model' => 'required|regex:/^[A-Za-z0-9\s]+$/|ascii',
            'computer-DateProduction' => 'required',
            'computer-prix' => 'required|numeric'
        ],[
            'computer-mark.required' => 'The computer mark field is required.',
            'computer-mark.alpha' => 'The mark field must be a character.',
            'computer-model.required' => 'The computer model field is required.',
            'computer-model.regex' => 'The computer model field must be a character.',
            'computer-DateProduction.required' => 'The production date field is required.',
            'computer-prix.required' => 'The price field is required.',
            'computer-prix.numeric' => 'The price field must be a number.',
        ]);   

        $find_index = computer::findOrFail($computer);

        $find_index->mark = $request->input('computer-mark');
        $find_index->model = $request->input('computer-model');
        $find_index->DateProduction = $request->input('computer-DateProduction');
        $find_index->prix = $request->input('computer-prix');

        $find_index-> save();

        return redirect()->route('settings', $computer);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $computer)
    {
        $delete_computer = Computer::findOrFail($computer);
        $delete_computer->delete();
        return redirect() -> route('settings');
    }
}
