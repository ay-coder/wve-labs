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
            "pressIcon"         =>  URL::to('/').'/uploads/portfolio/' . $item->icon, 
            "pressImage"        =>  URL::to('/').'/uploads/portfolio/' . $item->image, 
            "pressButtonTxt"    =>  isset($item->button_text) ? $item->button_text : '', 
            "pressDescription"  =>  isset($item->description) ? $item->description : '', 
            "pressExtraLink"    =>  isset($item->extra_link) ? $item->extra_link : '', 
        ];
    }
}