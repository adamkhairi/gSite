<?php

namespace App\Http\Controllers;

use App\comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentsController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment ->body =$request->message;
        $comment ->user_id =Auth::user()->id;
        $comment ->article_id =$request->article_id;
        $comment ->save();
        return redirect()->back();
    }

}
