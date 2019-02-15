<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Events\ArticleWasViewed;
use App\Story;
use App\User;
class StoriesController extends Controller
{
	public function __construct()
	{
		# code...
		$this->middleware('auth')->except(['welcome','show','index']);
	}
    //

    public function search() {

        $q = Input::get ( 'search' );
        $stories = Story::where('title','LIKE','%'.$q.'%')->get();
        if(count($stories) > 0)
            return view('search_result')->withDetails($stories)->withQuery ( $q );
        else
            return back();
    }

    public function welcome()
    {
      $stories = Story::all();
      $users = User::all();
      return view('welcome',compact('stories','users'));
    }

    public function index()
    {
    	# code...
    	$stories = Story::all();
    	return view('stories.index',compact('stories'));
    }

    public function create()
    {
    	# code...
    	$story = new Story;
    	$this->authorize('create',$story);

        return view('stories.create');
    }

    public function show(Story $story)
    {
    	# code...
    	//$story = Story::findOrFail($id);
    	//return view('stories.show',compact('story'));
        /*
        if($story->active){
            \Event::fire(new articlewasviewed($story));
        }
        */
        $story->increment('view_count');
        $story->view_count+=1;
        return view('showy',compact('story'));
        
    }

    public function edit(Story $story)
    {
    	# code...
    	// $story = Story::findOrFail($id);
    	return view('stories.edit',compact('story'));
    }

    public function update(Story $story)
    {
    	# code...
    	//$story = Story::findOrFail($id);
    	//$story->title = request('title');
    	//$story->story = request('story');

        //$story->save();
    	$this->authorize('update',$story);
        
        $story->update(request(['title','story']));

        return redirect('/stories'); 


    }

    public function destroy(Story $story)
    {
    	# code...
    	//Story::findOrFail($id)->delete();
    	$this->authorize('update',$story);

        $story->delete();       
        return redirect('/stories'); 


    }

    public function store()
    {
    	# code...
    	//$story = new Story();

    	//$story->title = request('title');
    	//$story->story = request('story');

    	//$story->save();
    	$attributes = request()->validate([
          'title'=>'required',
          'story'=>'required',
          'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'  
    	]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $attributes['image'] = $imageName;

    	$attributes['owner_id'] = auth()->id();

        $attributes['owner_name'] = "";

    	Story::create($attributes);

    	return redirect('/stories');
         

    }
}
