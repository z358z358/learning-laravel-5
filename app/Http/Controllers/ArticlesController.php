<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

	/**
	 * Show all articles
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::latest('published_at')->published()->get();

		return view('articles.index', compact('articles'));
	}

	/**
	 * Show a single article
	 *
	 * @param integer $id
	 * @return  Response
	 */

	public function show($id)
	{
		$article = Article::findOrFail($id);

		return view('articles.show', compact('article'));
	}

	/**
	 * Show the page to create a new article
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('articles.create');
	}

	/**
	 * Save a new article
	 *
	 * @param CreateArticleRequest $request
	 * @return Response
	 */
	public function store(CreateArticleRequest $request)
	{
		Article::create($request->all());

		return redirect('articles');

	}

}
