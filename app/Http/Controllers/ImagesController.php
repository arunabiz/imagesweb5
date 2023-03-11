<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ImagesController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
        ]);

        $image = $request->file('image');
        $imagePath = $image->store('images', 'google');

        $data = [
            'name' => $validatedData['name'],
            'image_path' => $imagePath,
        ];

        // Save the data to the database
        MyModel::create($data);

        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }
}
