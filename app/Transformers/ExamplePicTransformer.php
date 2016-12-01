<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\ExamplePic;

/**
 * Class ExamplePicTransformer
 * @package namespace App\Transformers;
 */
class ExamplePicTransformer extends TransformerAbstract
{

    /**
     * Transform the \ExamplePic entity
     * @param \ExamplePic $model
     *
     * @return array
     */
    public function transform(ExamplePic $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
