<?php namespace App\Models\Inquiry;

/**
 * Class Inquiry
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Inquiry\Traits\Attribute\Attribute;
use App\Models\Inquiry\Traits\Relationship\Relationship;

class Inquiry extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_inquiries";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "name", "emailid", "contact_number", "description", "budget", "country", "lat", "long", "status", "created_at", "updated_at", 
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