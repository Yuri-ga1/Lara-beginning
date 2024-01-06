<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MyController extends Controller
{
    public function postAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'userName' => 'required|string|max:255',
            'userEmail' => 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect()->route('form')
                        ->withErrors($validator)
                        ->withInput();
        }

        $data = $request->all();

        // Сохранение данных в файл в формате JSON
        $filename = uniqid() . '.json';
        file_put_contents(storage_path('json_data/' . $filename), json_encode($data));

        return redirect()->route('welcome')->with('success', 'Data saved successfully!');
    }

    public function showForm()
    {
        return view('form');
    }

    public function showDataTable()
    {
        $files = glob(storage_path('json_data/*.json'));
        $data = [];

        foreach ($files as $file) {
            $contents = file_get_contents($file);
            $data[] = json_decode($contents, true);
        }

        return view('data_table', ['data' => $data]);
    }
}