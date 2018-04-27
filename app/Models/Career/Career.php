<?php namespace App\Models\Career;

/**
 * Class Career
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Career\Traits\Attribute\Attribute;
use App\Models\Career\Traits\Relationship\Relationship;

class Career extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_careers";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "title", "sub_title", "experience", "description", "location", "icon", "status", "created_at", "updated_at", 
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