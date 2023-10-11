<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecordedRazor extends Model
{
    protected $fillable = ['order_id', 'payment_id', 'receipt_id',
        'user_id', 'recorded_id', 'amount', 'status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recorded(){
        return $this->belongsTo(Recorded::class);
    }

}
