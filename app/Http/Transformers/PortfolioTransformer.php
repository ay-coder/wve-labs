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

        $type       = 0;
        $ios        = isset($item->is_ios) && $item->is_ios == 1 ? 1 : 0;
        $android    = isset($item->is_android) && $item->is_android == 1 ? 1 : 0;

        if($ios == 1)
        {
            $type = 1;   
        }

        if($android == 1)
        {
            $type = 2;   
        }

        if($ios == 1 && $android == 1)
        {
            $type = 3;
        }

        $response = [
            "portfolioId"           => (int) $item->id,
            "portfolioTitle"        =>  isset($item->title) ? $item->title : '', 
            "portfolioSubTitle"     =>  isset($item->sub_title) ? $item->sub_title : '', 
            "portfolioAppTitle"     =>  isset($item->app_title) ? $item->app_title : '', 
            "portfolioIcon"         =>  URL::to('/').'/uploads/portfolio/' . $item->icon, 
            "portfolioImage"        =>  URL::to('/').'/uploads/portfolio/' . $item->image, 
            "portfolioBannerImage"  =>  URL::to('/').'/uploads/portfolio/' . $item->banner_image, 
            "portfolioBackgroundImage"  =>  URL::to('/').'/uploads/portfolio/' . $item->background_image, 
            "portfolioCategory"     =>  $category, 
            "portfolioCountry"      =>  isset($item->country) ? $item->country : '', 
            "portfolioBackend"      =>  isset($item->backend) ? $item->backend : '', 
            "portfolioDescription"  =>  isset($item->description) ? $item->description  : '',
            "appPaltformType"       => $type
        ];

        $response['ios'] = [
            'isIos'         => isset($item->is_ios) ? $item->is_ios : '',
            'iosIde'        => isset($item->ide) ? $item->ide : '' ,
            'iosFrontend'   => isset($item->frontend) ? $item->frontend : '',
            'iosVersion'    => isset($item->os_version) ? $item->os_version : '',
            'iosRating'     => isset($item->rating) ? $item->rating : ''
        ];


        $response['android'] = [
            'isAndroid'         => isset($item->is_android) ? $item->is_android : '',
            'androidIde'        => isset($item->android_ide) ? $item->android_ide : '' ,
            'androidFrontend'   => isset($item->android_frontend) ? $item->android_frontend : '',
            'androidVersion'    => isset($item->android_os_version) ? $item->android_os_version : '',
            'androidRating'     => isset($item->android_client_rating) ? $item->android_client_rating : ''
        ];

        return $response;
    }
}