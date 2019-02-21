<?php
namespace App\Http\Controllers;
use Crew\Unsplash\Connection;
use Illuminate\Http\Request;
use Crew;


class SearchController extends Controller
{


	// Search Keyword
    public function search(Request $request,  $keyword, $pageNum = NULL)
	{

		$pageNum  = ( trim($pageNum) != NULL ) ? $pageNum : 1;
		$keyword  = ( trim($request->keyword) != NULL ) ? trim(str_replace('-', ' ', $request->keyword)) : $keyword;
		$per_page = env("UNSPLASH_PER_PAGE");

		try {
			Crew\Unsplash\HttpClient::init([
			 	'applicationId'	=> env("UNSPLASH_ACCESS"),
			 	'secret'		=> env("UNSPLASH_SECRET"),
			 	'callbackUrl'	=> env("APP_URL"),
			 	'utmSource' 	=> 'Photo Gallery'
			]);

			$response 	 = Crew\Unsplash\Search::photos($keyword, $pageNum, $per_page);
			$getPhotos   = (object) $response->getResults();
			$foundPhotos = $response->getTotal();
			$totalPages  = $response->getTotalPages();


			if( $pageNum > $totalPages ) :
				$pageNum = 0;
				return view('searchResult', compact('foundPhotos', 'pageNum'));
			else :
				return view('searchResult', compact('getPhotos', 'foundPhotos', 'keyword', 'getHeaders', 'pageNum', 'totalPages'));
			endif;

		} catch (Exception $e) {
			abort(500);
		}
	}
}