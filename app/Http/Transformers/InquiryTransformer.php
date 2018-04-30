<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class InquiryTransformer extends Transformer
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
            "inquiryId" => (int) $item->id, "inquiryName" =>  $item->name, "inquiryEmailid" =>  $item->emailid, "inquiryContactNumber" =>  $item->contact_number, "inquiryDescription" =>  $item->description, "inquiryBudget" =>  $item->budget, "inquiryCountry" =>  $item->country, "inquiryLat" =>  $item->lat, "inquiryLong" =>  $item->long, "inquiryStatus" =>  $item->status, "inquiryCreatedAt" =>  $item->created_at, "inquiryUpdatedAt" =>  $item->updated_at, 
        ];
    }
}