<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;


class IndexController extends Controller
{
    public function home(){
        return view('home');
    }

    public function nohome($value){
        return view('squad', [
            "value"=>sqrt(intval($value))
        ]);
    }

    public function editor(){

        $contacts = Post::all();

        return view('editor',["contacts"=>$contacts]);

    }

    public  function add_db(Request $request){
        $contact = new Post;

        $contact->namePost = $request->namePost;

        $contact->textPost = $request->textPost;

        $contact->imgPost = "temp";

        $contact->save();
        
        return redirect("/table");
    }
}
