<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends FrontendController {
	public function getListArticle() {
		$articles = Article::simplePaginate(5);
		return view('article.index', compact('articles'));
	}
	public function getDetailArticle(Request $request) {
		$url = $request->segment(2);
		$url = preg_split('/(-)/i', $url);

		if ($id = array_pop($url)) {
			$articleDetail = Article::find($id);
			$articles = Article::simplePaginate(5);

			$viewData = [
				'articleDetail' => $articleDetail,
				'articles' => $articles,
			];

			return view('article.detail', $viewData);
		}
	}
}
