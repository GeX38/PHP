<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Storage;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form.showForm');
    }

    public function processForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/form')
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        $filename = 'form_data_' . uniqid() . '.json';

        Storage::disk('local')->put($filename, json_encode($data));

        return redirect('/form')->with('success', 'Form data has been submitted successfully!');
    }

    public function showData()
    {
        $files = Storage::disk('local')->files();

        $formData = [];

        foreach ($files as $file) {
            if (pathinfo($file)['extension'] === 'json') {
                $contents = Storage::disk('local')->get($file);
                $formData[] = json_decode($contents, true);
            }
        }

        return view('form.showData', ['formData' => $formData]);
    }
}
