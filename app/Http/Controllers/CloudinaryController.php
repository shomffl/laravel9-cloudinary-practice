<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cloudinary;
use App\Models\File;
use App\Http\Requests\FileRequest;

class CloudinaryController extends Controller
{
    public function index(){
        return view("files/index")->with(["files" => File::all()]);
    }

    public function create(){
        return view("files/create");
    }

    public function store(FileRequest $request){
        // 送信されたファイルのmime typeを取得
        $file_mime_type = $request->file("file")->getMimeType();

        // 送信されたファイルのmime typeのindexを取得
        $mime_type_index = array_search($file_mime_type, config("const.mime_type"));

        // ファイルのアップロード処理
        $file_url = Cloudinary::uploadFile($request->file('file')->getRealPath())->getSecurePath();

        File::create([
            "title" => $request->input("title"),
            "file_path" => $file_url,
            "mime_type" => $mime_type_index
        ]);

        return redirect("files");
    }
}
