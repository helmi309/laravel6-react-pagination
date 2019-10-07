<?php

namespace App\Http\Controllers;
//use Helper;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     /**
     * To display the show page
     *
     * @return \Illuminate\Http\Response
     */
    public function viewReactPagination()
    {

        return view('products.reactPagination');

    }


    /**
     * To  get post details for react pagination
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getReactPagination(Request $request)
    {

        $posts = Product::
                     //where('published',1)
                     //->with('tags')
                     orderBy('created_at', 'DESC')
                     ->paginate(5);

        foreach ($posts as $key => $post) {
            //$post->image = Helper::catch_first_image($post->body);
            $post->url = url('blog/'.$post->slug);
            $post->title = $post->title;
            //$post->description = strip_tags(str_limit($post->body,350));
            $post->description = $post->description;
        }

        return [
            'status' => "success",
            'data' => [
                'posts' => $posts
            ]
        ];

    }
}
