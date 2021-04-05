<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\ShellExec;

class PostController extends Controller
{
     protected $posts=[
        1=> ['id'=>1,"title"=>"Laravel","description"=>"PHP Framework","posted_by"=>"Noha","created_at"=>"2021-03-27"],
        2=> ['id'=>2,"title"=>"Ruby","description"=>"Serverside lang","posted_by"=>"Noha","created_at"=>"2021-03-27"],
        3=> ['id'=>3,"title"=>"Scala","description"=>"Server side lang", "posted_by"=>"Noha","created_at"=>"2021-03-27"],
        4=> ['id'=>4,"title"=>"Python","description"=>"Programming lang","posted_by"=>"Noha","created_at"=>"2021-03-27"],
    ];
   function index(){
        $posts= Post::all();

       return view("posts.index",compact("posts"));
//       return view("posts.index",[
//           "posts"=>$this->posts,
//           "test"=>"test param sent"
//       ]);
//
//       $posts=Post::all();
//       dd($posts);

   }
   public function show($post){
//       dd($this->posts[$post]);
//       return view("posts.show",[
//           "post"=>$this->posts[$post],
//       ]);
//       dd($post);
      $post=Post::find($post);
//      $post=Post::where("id",$post); // query bulider
//       $post=Post::where("id",$post)->first(); //execute query limit 01
//       $post=Post::where("id",$post)->get(); //execute query limit 01

//       dd($post);
       return view("posts.show",[
           "post"=>$post
       ]);
   }
   public function edit($post){
//    dd($post);
    return view("posts.edit",["post"=>$this->posts[$post]]);
   }

   public function create(){
       return view("posts.create",[
           "users"=>User::all()
       ]);
   }
//   public function store(){
//    //       dd($request);
//    //       dd(\request());
////       $data= request();  //
//       $data= request()->all();
//       $title= request()->title;
//       $desc= request("description");
//       dd($data,$title,$desc);
//
////       dd($request, \request("title"));
////       return redirect()->route("posts");
//   }
        // define type of the method.
    public function store(Request $myRequestObject){

//       dd($myRequestObject);
//           dd($myRequestObject->all()); // same as request()
//        $data=$myRequestObject->all();
////        dd($data["title"]);
//        $title=$data["title"];
//        $desc=$data["description"];
//        $post= new Post();
//        $post->title= $title;
//        $post->description= $desc;
//        $post->save();
        // mass assigment
//        Post::create([
//            "title"=>$myRequestObject["title"],
//            "description"=>$myRequestObject["description"],
//            "slug"=>$myRequestObject["slug"]
//        ]);
//        Post::create($data);
        // will add the user_id by default,
        // will take function name
        Post::create($myRequestObject->all());
        return redirect()->route("posts");
    }



}
