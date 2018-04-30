<?php namespace App\Models\Portfolio;

/**
 * Class Portfolio
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Portfolio\Traits\Attribute\Attribute;
use App\Models\Portfolio\Traits\Relationship\Relationship;

class Portfolio extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_portfolios";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", 
        "title", 
        "sub_title", 
        "app_title", 
        "icon", 
        "image", 
        "banner_image", 
        "background_image", 
        "category", 
        "ide", 
        "frontend",
        "country", 
        "os_version", 
        "backend", 
        "rating", 
        "description", 
        "status", 
        "android_ide",
        "android_os_version",
        "android_frontend",
        "android_client_rating",
        "is_ios",
        "is_android",
        "created_at", 
        "updated_at", 
    ];

    /**
     * Timestamp flag
     *
     */
    public $timestamps = true;

    /**
     * Guarded ID Column
     *
     */
    protected $guarded = ["id"];
}