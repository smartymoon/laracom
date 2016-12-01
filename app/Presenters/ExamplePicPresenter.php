<?php

namespace App\Presenters;

use App\Transformers\ExamplePicTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ExamplePicPresenter
 *
 * @package namespace App\Presenters;
 */
class ExamplePicPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ExamplePicTransformer();
    }
}
