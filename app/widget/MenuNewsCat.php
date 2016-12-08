<?php
namespace App\widget;
use App\Repository\NewsCatRepository;

class MenuNewsCat{

    /**
     * @var NewsCatRepository
     */
    private $repository;

    public function __construct(NewsCatRepository $repository)
    {

        $this->repository = $repository;
    }

    /**
     *
     */
    public function list()
    {
      return $this->repository->all();
    }
}