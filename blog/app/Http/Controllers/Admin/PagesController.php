<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Page;
use App\Http\Requests\PageFormRequest;
use App\Http\Requests\PageEditFormRequest;

class PagesController extends Controller
{
    //
    public function home()
	{
		return	view('backend.home');
	}

	public function index() {
		$pages = Page::all();
		return  view('backend.pages.index', compact('pages'));
	}

	public function create() {
		return view('backend.pages.create');
	}

	public function store(PageFormRequest $request) 
	{
		//var_dump($request->get('img') );
		//exit();

        $this->validate($request, [
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('img');
        $newName = $request->get('title'). '-' .time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $newName);
 

		$page = new Page(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => $request->get('slug'),
            'h2' => $request->get('h2'),
            'h3' => $request->get('h3'),
            'img' => $newName,
            //'img' => $request->get('img'),
        ));

        $page->save();
        //return  redirect('backend.pages.create')->with('status', 'A  new page has been  created!');
         return  redirect(action('Admin\PagesController@create', $page->id))->with('status', 'The page has   been updated!');
	}

	public function edit($id)
    {
        $page = Page::whereId($id)->firstOrFail(); //fetch
        return view('backend.pages.edit', compact('page'));
    }


    // Route::post('pages/{id}/edit',    'PagesController@update');
    public function update(PageEditFormRequest $request, $id)
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
            $newName = $request->get('title'). '-' .time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $newName);

        } else {
            $newName = 'default-img.png';            
        }


        $page = Page::whereId($id)->firstOrFail();

        $page->title = $request->get('title');
        $page->content = $request->get('content');
        $page->slug = $request->get('slug');
		//$page->img = $request->get('img');
        $page->img = $newName;
        $page->h2 = $request->get('h2');
        $page->h3 = $request->get('h3');


        $page->save();

        return  redirect(action('Admin\PagesController@edit', $page->id))
        ->with('status', 'The pageu has   been updated!')
        ->with('page', $page);
    }

}
