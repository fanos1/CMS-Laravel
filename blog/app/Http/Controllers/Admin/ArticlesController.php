<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Article;
use App\Http\Requests\ArticleFormRequest;
use App\Http\Requests\ArticleEditFormRequest;
use App\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return  view('backend.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Unlike other most create() methods, which only returns view
        // this method() fetches PAGEs first, and passes them to view
        // because in the create FORM, we need to list PAGEs which the article belongs to
        // user can choose article1 BELONGS to PAGE1 etc..
        $pages = Page::all();

        return  view('backend.articles.create',  compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleFormRequest $request)
    {
        $this->validate($request, [
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('img');
        $newName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $newName);

        // $user_id = Auth::user()->id;

        $article =  new Article(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'img' => $newName,
            'h2' => $request->get('h2'),
            'slug' => Str::slug($request->get('title'),   '-'),
            //'user_id' => $user_id
        ));

        $article->save();

        // we can use sync() attach the selected pages to the articles
        $article->pages()->sync($request->get('pages'));

        return  redirect('/admin/articles/create')->with('status', 'The Article has been created!');

        // return  redirect(action('Admin\ArticlesController@create', $article->id))->with('status', 'updat!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::whereId($id)->firstOrFail();  // fetch articles
        $pages = Page::all(); // Fetch pages as well

        $selectedPages = $article->pages->pluck('id')->toArray();

        //return view('backend.articles.edit', compact('article'));
        return  view('backend.articles.edit', compact('article', 'pages', 'selectedPages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleEditFormRequest $request, $id)
    {
		if($request->hasFile('img')) { 
            /*
            Unlike when a new page is created, when this page is being EDITED user doesnt 
            have to upload a new file. Only validate If file is being uploaded (if detected)
            */
            $this->validate($request, [
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $image = $request->file('img');
            $newName = $request->get('slug'). '-' .time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $newName);

        } else {
            $newName = 'default-img.png';            
        }


        
        $article = Article::whereId($id)->firstOrFail();

        $article->title = $request->get('title');
        $article->content = $request->get('content');
        $article->h2 = $request->get('h2');
        // $article->img = $request->get('img');
		$article->img = $newName;
        $article->slug = Str::slug($request->get('title'),   '-');


        $article->save();
        // Instead of creating a new savePages() method to save pages. we can sync them
        $article->pages()->sync($request->get('pages'));

        return  redirect(action('Admin\ArticlesController@edit', $article->id))
        ->with('status', 'The article has   been updated!')
        ->with('article', $article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
