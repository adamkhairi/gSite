<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
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
        $articles = Article::latest()->paginate(4);

        return view('content.articles.articles', compact('articles'))
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
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'body' => 'required',
            'img' => 'required',
            'user_id' => User::all()->get('id'),

        ]);

        Article::create($request->all());

        return redirect('/articles')->with('success', 'Article ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @param int $id
     * @return Application|Factory|Response|View
     */
    public function show(Article $article)
    {
//        $info = Article::findOrFail($id);

        return view('content.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {
//        $info = Article::findOrFail($id);

        return view('content.articles.update', compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Article $article
     * @return RedirectResponse
     */
    public function update(Request $request,Article $article)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',


        ]);
        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Articles updates successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Article::findOrFail($id)->delete();

        return redirect()->route('articles.index')->with('success', 'Articles deleted successfully');
    }
}
