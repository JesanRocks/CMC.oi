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
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(10);
        
    	return view('web.posts',compact('posts','categorias'));
    }

    public function category($slug)
    {
        $categorias = Category::orderBy('name','ASC')->get();//Categorias del blog en layout
        $category = Category::where('slug',$slug)->pluck('id')->first();
        $posts = Post::where('category_id',$category)
                ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);

        return view('web.posts',compact('posts','categorias'));
    }

    public function tag($slug)
    {
        $categorias = Category::orderBy('name','ASC')->get();//Categorias del blog en layout
        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug', $slug);
        })->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
                
        return view('web.posts',compact('posts','categorias'));
    }

    public function post($slug)
    {
    	$post = Post::where('slug',$slug)->first();
    	return view('web.post',compact('post'));
    }

    public function gallery()
    {
        //Esta vista no utiliza las categorias... ¿deberia añadirlo?
        $categorias = Category::orderBy('name','ASC')->get();//Categorias del blog en layout
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(16);
        return view('web.galeria',compact('posts','categorias'));
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
