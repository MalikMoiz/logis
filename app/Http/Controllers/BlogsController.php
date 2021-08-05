<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Http\Traits\GeneralTraits;
use App\Models\Blogs;
use App\Http\Controllers\BlogsController;



class BlogsController extends Controller
{
   use GeneralTraits;

   public function blogposting(BlogRequest $request){
    $blog = Blogs::create($request->all());
    $this->storeImage($blog);
    return redirect(route('blogpost'));
   }

   public function single(Blogs $blog){
      $blogsrecent=Blogs::all()->take(7);
      return view('blog_details', [
         'blog' => $blog,
         'blogsrecent' => $blogsrecent
      ]);
   }

   public function storeImage($blog){
      $blog->update([
         'image' => $this->imagePath('image', 'blog', $blog),
      ]);
   }
}
