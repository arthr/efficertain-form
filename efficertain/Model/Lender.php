<?php
namespace Efficertain\Model;

use Illuminate\Database\Eloquent\Model;

class Lender extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'telephone', 'mobile',
        'primarycontact', 'contactmethod', 'identificationtype',
        'identificationnumber',
    ];

    /**
     * The attributes that must be transformed into dates.
     *
     * @var array
     */

    protected $dates = [

        'updated_at', 'created_at',

    ];

    public function todo()
    {
        return $this->hasMany('Todo');

    }

}
