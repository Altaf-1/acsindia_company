<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudyBank extends Model
{
    //
    protected $fillable = ['study_material_id', 'user_id', 'payment_type', 'receipt', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function study_material(){
        return $this->belongsTo(StudyMaterial::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
