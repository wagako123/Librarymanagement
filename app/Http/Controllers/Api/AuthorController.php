<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Validator;
use App\models\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
   public function index()
   {
     $author = Author ::all();
     if ($author -> count()>0){
        
         return response()->json([
            'status'=>200,
            'Author'=> $author
         ], 200);
     } else{
        return response()->json([
            'status'=>404,
            'Messages'=> 'no records found'
         ], 404);
     }

     
   }
   public function store(Request $request)
   {
    $validator = Validator ::make ($request->all(), [
        'name' => 'required| max:30',
        'book' => 'required| max:100',
    ]);
    
    if ($validator->fails()){
        return response () -> json ([
            'status'=> 422,
            'errors'=> $validator->messages()
        ],422);
    } else{
        $author= Author::create([
            'name'=> $request->name,
            'book'=>$request->book,
        ]);

        if ($author){
            return response()->json ([
                'status'=>200,
                'message'=>"Author created successfully"
            ],200);
        }else{
            return response()->json ([
                'status'=>500,
                'message'=>"Something went wrong"
            ],500);
        }
    }
   }

   public function show($id){
    $author = Author::find($id);
    if ($author){
        return response()->json ([
            'status'=>200,
            'author'=> $author
        ],404);

    }else{
        return response()->json ([
            'status'=>404,
            'message'=>"No such author found"
        ],404);
    }
   }
}
