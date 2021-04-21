<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function index() {
        return view('file_upload');
    }
    public function showUploadFile(Request $request){
        $file = $request -> file('image');

        //Display file name
        echo 'File Name:  '.$file->getClientOriginalName();
        echo '<br>';

        //Display File extension
        echo 'File Extension:  '.$file->getClientOriginalExtension();
        echo '<br>';

        //Display File Real Path
        echo 'File Real Path:  '.$file->getRealPath();
        echo '<br>';

        //Display file Size
        echo 'File size:  '.$file->getSize();
        echo '<br>';

        //Display File Mime Type
        echo 'File Mime Type:  '.$file->getMimeType();

        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
    }
}