<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceImage;
use Illuminate\Support\Facades\Storage;

class SerivcesController extends Controller
{
    //
    public function service_list(){
    $data = Service::all();
        return view('backend.services.list',compact('data'));
    }
    public function add(){
        return view('backend.services.add');
    }
    public function store(Request $request)
{
    // Validate incoming request data
    $validatedData = $request->validate([
        'heading' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'required|image|mimes:jpeg,jpg,png|max:2048', // Validate a single image
    ]);

    // Create a new instance of your model
    $yourModel = new Service();
    $yourModel->heading = $validatedData['heading'];
    $yourModel->content = $validatedData['content'];
    
    // Handle image upload
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('images', 'public'); // Store in 'storage/app/public/images'
        $yourModel->image_path = $path; // Set the image path
    }

    $yourModel->save(); // Save the model with the image path

    return redirect()->route('admin.service_list')->with('success', 'Data saved successfully!');
}

    public function edit($id){
        $data = Service::find($id);
        return view('backend.services.edit',compact('data'));
    }
    public function delete($id)
    {
        // Find the service by ID
        $data = Service::findOrFail($id);
        Storage::disk('public')->delete($data->image_path);
        // Optionally, delete associated images from storage if needed
        // if ($data->image_path) {
        //     $imagePaths = json_decode($data->image_path);
        //     foreach ($imagePaths as $imagePath) {
        //         // Delete the image from storage
        //         Storage::disk('public')->delete($imagePath);
        //     }
        // }
    
        // Delete the service
        $data->delete();
    
        // Redirect back with a success message
        return redirect()->route('admin.service_list')->with('success', 'Service deleted successfully!');
    }
    
    public function update(Request $request, $id)
{
    // Validate incoming request data
    $validatedData = $request->validate([
        'heading' => 'required|string|max:255',
        'content' => 'required|string',
        'images' => 'nullable', // Allow for no new images
        'images.*' => 'image|mimes:jpeg,jpg,png|max:2048', // Validate each image
    ]);

    // Find the existing model
    $yourModel = Service::findOrFail($id);
    $yourModel->heading = $validatedData['heading'];
    $yourModel->content = $validatedData['content'];
// Initialize a variable to hold the image path
$imagePath = '';

if ($request->hasFile('images')) {
    // Store the uploaded image
    $imagePath = $request->file('images')->store('images', 'public'); // Store in 'storage/app/public/images'
} else {
    // Keep the existing image path if no new image is uploaded
    $imagePath = $yourModel->image_path; // Assuming image_path is a string, not an array
}

// Store the image path in the database
$yourModel->image_path = $imagePath;
$yourModel->save(); // Save the updated model with the image path

    return redirect()->route('admin.service_list')->with('success', 'Data updated successfully!');
}

    public function images()
    {
        return $this->hasMany(ServiceImage::class); // Adjust to your actual image model
    }
        
}
