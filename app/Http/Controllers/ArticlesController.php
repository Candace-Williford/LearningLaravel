<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Request;
use Carbon\Carbon;

//use Illuminate\Http\Request;

class ArticlesController extends Controller {

	public function index(){

        \Auth::user();
        $articles = Article::latest('published_at')->published()->get();//have to reference the full namespace

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

//        if(is_null($article)) {
//            abort(404);
//        }

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles/create');
    }

    public function store(ArticleRequest $request)
    {
//        $input = Request::all();
//        $input['published_at'] = Carbon::now();

        //validation
        //php artisan make:request CreateArticleRequest

//        Auth::user();
        Auth::user()->articles()->save(new Article($request->all()));
        Article::create($request::all());

        return redirect('articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }

}
