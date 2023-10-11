<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecordedBank extends Model
{
    //
    protected $fillable = ['recorded_id', 'user_id', 'payment_type', 'receipt', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recorded(){
        return $this->belongsTo(Recorded::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
