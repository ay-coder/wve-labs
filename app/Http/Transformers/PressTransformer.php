<?php
namespace App\Http\Transformers;

use App\Http\Transformers;
use URL;

class PressTransformer extends Transformer
{
    /**
     * Transform
     *
     * @param array $data
     * @return array
     */
    public function transform($item)
    {
        if(is_array($item))
        {
            $item = (object)$item;
        }

        return [
            "pressId"           => (int) $item->id,
            "pressTitle"        =>  isset($item->title) ? $item->title : '', 
            "pressImage"        =>  URL::to('/').'/uploads/portfolio/' . $item->image, 
            "pressDescription"  =>  isset($item->description) ? $item->description : '', 
            "pressExtraLink"    =>  isset($item->extra_link) ? $item->extra_link : '', 
        ];
    }
}