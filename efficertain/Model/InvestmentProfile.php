<?php
namespace Efficertain\Model;

use Illuminate\Database\Eloquent\Model;

class InvestmentProfile extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'investmentprofiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'aami', 'approximateincome', 'approximatenetworth',
        'investmentobjectives', 'timehorizon', 'mortgagelendingexperience',
        'otherobjectives', 'mortgageknowledge', 'risktolerance',
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
