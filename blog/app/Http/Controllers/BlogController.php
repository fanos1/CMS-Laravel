<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('blog.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page = Page::whereSlug($slug)->firstOrFail();
        $articlesForThisPage = $page->articles()->get();
        // $comments = $page->comments()->get();
        
        return view('blog.show', compact('page', 'articlesForThisPage'));
    }

    /*
    * Home page. Fetches the page from DB with the slug 'home'
    */
    public function home()
    {
        $slug = 'home'; // slug should be always home for FRONT PAGE 

        $page = Page::whereSlug($slug)->firstOrFail();
        $articlesForThisPage = $page->articles()->get();

        return view('blog.home', compact('page', 'articlesForThisPage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function contact() {


    }
}
