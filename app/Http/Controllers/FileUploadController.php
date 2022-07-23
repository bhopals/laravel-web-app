<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
      // $this.validate($request, [
      //   'image' => 'required|image|max:2048'
      // ]);

      if($request->hasFile('image')) {
        
        $file = $request-> file('image');
        
        $name = time().'_'.$file -> getClientOriginalName();

        // $filepath = '/folder'.$name
        $filepath = $name;
        Storage::disk('s3') -> put($filepath, file_get_contents($file));
      }
        echo "File Upload Success!";
    }
}

