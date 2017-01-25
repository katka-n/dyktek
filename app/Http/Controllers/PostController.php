<?php

namespace App\Http\Controllers;

use App\Post;
use App\Graduates;
use App\Categories;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;


class PostController extends Controller
{

    //wyswietlanie 3 artykulow z bloga na stronie glownej (index)
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->take(3)->get();


        $all_graduates = DB::table('graduates')->pluck('id');
        $arr = array();
        for ($i = 1; $i <= count($all_graduates); $i++) {
            $arr[$i - 1] = $all_graduates[$i - 1];
        }
        shuffle($arr);

        $graduates = [];
        foreach ($arr as $key => $value) {
            $graduate = Graduates::where('id', $value)->first();
            array_push($graduates, $graduate);
        }
        shuffle($graduates);

        return view('index', ['posts' => $posts, 'graduates' => $graduates]);

    }

    // wyswietlanie artykulow na podstronie blog
    public function blog_index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(2);
        $categories = Categories::all();

        $postsByDates = Post::orderBy('created_at', 'desc')->get();



        return view('blog', ['posts' => $posts, 'categories' => $categories, 'postsByDates' => $postsByDates]);




    }

    //wyswietlanie notek po kategorii lub po id
    public function entry($name)
    {
        if (is_numeric($name)) {
            $posts = Post::where('id', $name)->first();
            $categories = Categories::all();

            return view('blog_notka', ['posts' => $posts, 'categories' => $categories]);

        } else {

            $categories = Categories::all();
            $post = DB::table('categories')
                ->where('name', '=', $name)
                ->leftJoin('posts', 'posts.category_id', '=', 'categories.id')
                ->get();
            $posts = json_decode($post, true);


            return view('blog_kategoria', ['posts' => $posts, 'categories' => $categories]);
        }


    }

}