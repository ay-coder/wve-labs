<?php
namespace App\Http\Transformers;

use App\Http\Transformers;
use URL;

class TeamTransformer extends Transformer
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
            "teamId"            => (int) $item->id, 
            "teamName"          =>  isset($item->name) ? $item->name : '', 
            "teamDesignation"   =>  isset($item->designation) ? $item->designation : '', 
            "teamEmailid"       =>  isset($item->emailid) ? $item->emailid : '', 
            "teamLinkedin"      =>  isset($item->linkedin) ? $item->linkedin : '', 
            "teamImage"         =>  URL::to('/').'/uploads/team/' . $item->image, 
        ];
    }
}