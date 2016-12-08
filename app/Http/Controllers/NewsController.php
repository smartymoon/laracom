<?php

namespace App\Http\Controllers;

use App\Repository\NewsCatRepository;
use App\Repository\NewsRepository;

class NewsController extends Controller
{

    /**
     * @var NewsCatRepository
     */
    private $newsCatRepository;
    /**
     * @var NewsRepository
     */
    private $newsRepository;

    /**
     * NewsController constructor.
     * @param NewsCatRepository $newsCatRepository
     * @param NewsRepository $newsRepository
     */
    public function __construct(NewsCatRepository $newsCatRepository,
                                NewsRepository    $newsRepository)
    {
        $this->newsCatRepository = $newsCatRepository;
        $this->newsRepository = $newsRepository;
    }

    public function cat($cat)
    {
        $category = $this->newsCatRepository->find($cat);
        $newses = $this->newsRepository->newsInCat($cat);
        return view('newses',compact('newses','category'));
    }

    public function news($news)
    {
       $news = $this->newsRepository->find($news);
       return view('newsDetail',compact('news'));
    }
}
