<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
user Illuminate\Support\Facades\Storage;
class FileUploadController extends Controller
{

  //  public function __construct(){
  //     $this->middleware('auth');
  //  }
        
  public function index()
    {
        return view('upload');
    }

            
  public function saveImage(Request $request)
    {
      $this.validate($request, [
        'image' => 'required|image|max:2048'
      ]);

      if($request->hasFile('image')) {
        
        $file = $request-> file('image');
        
        $name = time().$file -> getClientOriginalName();

        // $filepath = '/folder'.$name

        Storage::disk('s3') -> put($filepath, file_get_contents($file))
      }
        return back()->with('success', 'Image Uploaded Succcessfully')
    }
}

