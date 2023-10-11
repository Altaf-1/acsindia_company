<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyRazor extends Model
{
    //

    protected $fillable = ['order_id', 'payment_id', 'receipt_id',
        'user_id', 'study_material_id', 'amount', 'status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function study_material(){
        return $this->belongsTo(StudyMaterial::class);
    }




}
