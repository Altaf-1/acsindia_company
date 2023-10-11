<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IasMocktest extends Model
{
    protected $fillable = ['name',
'email',
'phone',
'state',
'appeared_IAS_Exam_earlier',
'cleared_prelims_earlier'];
    
}
