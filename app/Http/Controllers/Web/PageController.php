<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PageController extends Controller
{
    public function blog()
    {
    	$categorias = Category::orderBy('name','ASC')->get();//Categorias del blog en layout
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        $photos = Post::orderBy('id','ASC')->where('status','PUBLISHED')->paginate(20);
    	return view('web.home',compact('posts','categorias','photos'));
    }

    public function publicaciones()
    {
        $categorias = Category::orderBy('name','ASC')->get();//Categorias del blog en layout
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(20);
        return view('web.posts',compact('posts','categorias'));
    }

    public function category($slug)
    {
        $categorias = Category::orderBy('name','ASC')->get();//Categorias del blog en layout
        $category = Category::where('slug',$slug)->pluck('id')->first();
        $posts = Post::where('category_id',$category)
                ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(20);

        return view('web.posts',compact('posts','categorias'));
    }

    public function tag($slug)
    {
        $categorias = Category::orderBy('name','ASC')->get();//Categorias del blog en layout
        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug', $slug);
        })->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(20);
                
        return view('web.posts',compact('posts','categorias'));
    }

    public function post($slug)
    {
    	$categorias = Category::orderBy('name','ASC')->get();//Categorias del blog en layout
        $post = Post::where('slug',$slug)->first();
    	return view('layouts.portapost',compact('post','categorias'));
    }

    public function search(Request $request)
    {
        $categorias = Category::orderBy('name','ASC')->get();//Categorias del blog en layout
        $search = $request->get('search');
        $posts  = DB::table('posts')->where([
            ['status', '=', 'PUBLISHED'],
            ['name', 'like', '%'.$search.'%'],
        ])->paginate(5);        

        if (count($posts) > 0) {
            return view('web.posts',compact('posts','categorias'))
            ->withDetails($posts)
            ->withQuery($search);
        }else{
            return view('web.posts',compact('posts','categorias'))->withMessage('Lo sentimos pero no hemos encontrado lo que estás buscando.');
        }
        
    }
}
