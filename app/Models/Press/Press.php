<?php namespace App\Models\Press;

/**
 * Class Press
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Press\Traits\Attribute\Attribute;
use App\Models\Press\Traits\Relationship\Relationship;

class Press extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_press";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "title", "image", "description", "extra_link", "status", "created_at", "updated_at", 
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