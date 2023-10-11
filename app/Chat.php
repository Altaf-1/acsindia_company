<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //
    protected $fillable = ['chat_id','sender_id', 'receiver_id', 'message'];


    /**
     * @param $id
     * @return mixed
     */
    public function getName($id)
    {
        return User::findOrFail($id)->name;
    }


    /**
     * @param $id
     * @return mixed
     */
    public function getImage($id)
    {
        return User::findOrFail($id)->photo->photo_path;
    }


    /**
     * @param $id
     * @return mixed
     */
    public function checkPhoto($id)
    {
        return User::findOrFail($id)->photo_id;
    }

}
