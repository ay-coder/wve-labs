<?php
namespace App\Http\Transformers;

use App\Http\Transformers;
use URL;

class CareerTransformer extends Transformer
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
            "careerId"          => (int) $item->id,
            "careerTitle"       =>  isset($item->title) ? $item->title : '',
            "careerSubTitle"    =>  isset($item->sub_title) ? $item->sub_title : '', 
            "careerExperience"  =>  isset($item->experience) ? $item->experience : '', 
            "careerLocation"    =>  isset($item->location) ? $item->location : '', 
            "careerDescription" =>  isset($item->description) ? $item->description : '' , 
            "careerIcon"        =>  URL::to('/').'/uploads/career/' . $item->icon
        ];
    }
}