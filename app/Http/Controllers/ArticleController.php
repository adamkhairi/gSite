<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $posts = Article::latest()->paginate(4);

        return view('content.articles.articles', compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return view('content.articles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     * @throws ValidationException
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:100',
            'body' => 'required|max:1000 ',
            'img' => 'required',
//            'user_id' => Auth::user()->id,


        ]);
//        $post->img = request()->file('img')->store('public/img');

//        $data = $request->input();

        $file = $request->file('img');
        $name = $file->getClientOriginalName();

        $file->move(public_path() . '/img/', $name);

        $post = new Article();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->img = '/img/' . $name;
        $post->user_id = Auth::user()->id;
        $post->category_id = 1;


        $post->save();


//        $post = new Article();
//        $post->title = $request->title;
//        $post->body = $request->body;
//        $post->img = $name;
//        $post->user_id = Auth::user()->id;
//        $post->category_id = 1;
//        $post->save();

//        $input = $request->except('_token');
//        $post = Article::create($request->all());
//
        return redirect('/articles')->with('success', 'Article ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|Response|View
     */
    public function show($id)
    {

        $post = Article::findOrFail($id);

        $lastAddedPosts = Article::orderBy('created_at', 'DESC')->take(3)->get();

        return view('content.articles.show', compact('post', 'lastAddedPosts'));

//        $post = Article::findOrFail($id);
//
//        return view('content.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {
        $post = Article::findOrFail($id);

        return view('content.articles.update', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
//        $request->validate([
//            'title' => 'required|max:255',
//            'body' => 'required',
//        ]);
//        $article->update($request->all());
//        return redirect()->route('articles.index')->with('success', 'Articles updates successfully');


        $post = Article::findOrFail($id);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $name = $img->getClientOriginalName();
            $img->move(public_path() . '/img/', $name);
            $name = '/img/' . $name;
            $post->img = $name;
        }

        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = Auth::user()->id;
        $post->category_id = 1;
        $post->save();


        return redirect()->back()->with('success', 'Article modifier!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $art = Article::findOrFail($id);
        $art->delete();
//        dd($art);
        return redirect()->route('articles.index')->with('success', 'Articles deleted successfully');
    }

    /**
     * Search the specified resource from storage.
     *
     * @param Request $request
     * @return Application|Factory|RedirectResponse|View
     */
    public function search(Request $request)
    {

        $posts = DB::table('posts')
            ->where('title', 'like', '%' . $request->search . '%')
            ->where('body', 'like', '%' . $request->search . '%')
            ->paginate(5);
        $lastAddedPosts = Article::orderBy('created_at', 'DESC')->take(3)->get();
        return view('posts.search', compact('posts', 'lastAddedPosts'));

    }
}
