<?php

namespace App\Http\Controllers;

use App\comment;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function store(Request $request ,$id)
    {
        $comment = new Comment();
        $comment ->body =$request->message;
        $comment ->user_id =Auth::user()->id;
        $comment ->article_id = $id;
        $comment ->save();

        return redirect()->back();
    }



}
