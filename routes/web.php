<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    $blog_post = [
        [
            "title" => "Halaman Pertama",
            "author" => "Jembar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus expedita, nam quod enim consectetur, id explicabo inventore aspernatur ea, nisi impedit necessitatibus dolores esse nobis. Facilis excepturi possimus sunt dicta beatae fugiat repellat corrupti ab perspiciatis eveniet numquam, ipsam blanditiis consequuntur unde saepe exercitationem veniam culpa porro accusantium nulla, dolorem quaerat. Sequi, nobis autem, sint dicta ea a, assumenda cum perferendis aut corrupti facilis laborum! Quod incidunt tempora atque voluptate? Aspernatur fugiat odit itaque nemo magni, maiores sint tempore eaque?"
        ],
        [
            "title" => "Halaman Kedua",
            "author" => "Hifal",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo quod perspiciatis ad porro labore. Nulla, magni itaque possimus sunt earum perferendis optio, dicta nostrum sit tempore, atque molestiae veritatis esse vel? Accusantium accusamus similique est ab eveniet vero laboriosam beatae id, animi eaque architecto veniam autem dolor soluta? Velit voluptas sunt incidunt rerum dolorum exercitationem placeat eveniet iste, voluptates voluptate atque provident quia ab at officia necessitatibus tenetur repudiandae. Ipsum facere quasi molestiae voluptas voluptatem minima, dolor officia eum voluptatum veritatis omnis laudantium harum at sapiente beatae blanditiis est. Nesciunt quo sunt nihil delectus, impedit qui hic reprehenderit facere modi!"
        ]
    ];
    return view('about', [
        "title" => "about",
        "kedua" => $blog_post,
        "nama" => "Muhammad Jembar Risky",
        "kelas" => "XII RPL1",
        "email" => "jembarrisky24@gmail.com" 
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [ 
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [ 
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});


Route::get('/authors/{user}', function(User $user){
    return view('posts', [ 
        'title' => 'User Posts',
        'posts' => $user->posts,
    ]);
});

