<?php
namespace Efficertain\Model;

use Efficertain\Model\AssetsLiabilitesBreakdown;
use Efficertain\Model\InvestmentProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lender extends Model
{

    use SoftDeletes;

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
     * The attributes that aren't mass assignable.
     *
     * @var array
     */

    protected $guarded = [
        'id', 'created_at', 'updated_at', 'deleted_at',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    protected $dates = [

        'updated_at', 'created_at', 'deleted_at',

    ];

    public function InvestmentProfile()
    {
        return $this->hasOne(InvestmentProfile::class);
    }

    public function AssetsLiabilitesBreakdown()
    {
        return $this->hasOne(AssetsLiabilitesBreakdown::class);
    }

}
