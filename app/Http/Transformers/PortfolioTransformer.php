<?php
namespace App\Http\Transformers;

use App\Http\Transformers;
use URL;

class PortfolioTransformer extends Transformer
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

        $category = [];

        if(isset($item->category))
        {
            $category = explode('||', $item->category);
        }

        return [
            "portfolioId"           => (int) $item->id,
            "portfolioTitle"        =>  isset($item->title) ? $item->title : '', 
            "portfolioSubTitle"     =>  isset($item->sub_title) ? $item->sub_title : '', 
            "portfolioAppTitle"     =>  isset($item->app_title) ? $item->app_title : '', 
            "portfolioIcon"         =>  URL::to('/').'/uploads/portfolio/' . $item->icon, 
            "portfolioImage"        =>  URL::to('/').'/uploads/portfolio/' . $item->image, 
            "portfolioBannerImage"  =>  URL::to('/').'/uploads/portfolio/' . $item->banner_image, 
            "portfolioBackgroundImage"  =>  URL::to('/').'/uploads/portfolio/' . $item->background_image, 
            "portfolioCategory"     =>  $category, 
            "portfolioIde"          =>  isset($item->ide) ? $item->ide : '' , 
            "portfolioFrontend"     =>  isset($item->frontend) ? $item->frontend : '', 
            "portfolioCountry"      =>  isset($item->country) ? $item->country : '', 
            "portfolioOsVersion"    =>  isset($item->os_version) ? $item->os_version : '', 
            "portfolioBackend"      =>  isset($item->backend) ? $item->backend : '', 
            "portfolioRating"       =>  isset($item->rating) ? $item->rating : '', 
            "portfolioDescription"  =>  isset($item->description) ? $item->description  : ''
        ];
    }
}