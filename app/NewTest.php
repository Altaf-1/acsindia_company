<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewTest extends Model
{
    protected $fillable = ['topic','sub_topic','date', 'title', 'course', 'duration','link', 'total_marks','note'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subTopics($id){
        return NewTestSubTopic::findOrFail($id)->sub_topic;
    }

}
