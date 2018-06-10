<?php
namespace Efficertain\Model;

use Illuminate\Database\Eloquent\Model;

class AssetsLiabilitesBreakdown extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assetsliabilitesbreakdowns';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'investments', 'rrsp', 'principalresource', 'mortgages',
        'loans', 'other', 'totalassets',
        'totalliabilites', 'totalnetwork',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */

    protected $guarded = [
        'id', 'lender_id', 'updated_at', 'deleted_at',
    ];

    /**
     * The attributes that must be transformed into dates.
     *
     * @var array
     */

    protected $dates = [
        'updated_at',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    
    public $timestamps = false;
}
