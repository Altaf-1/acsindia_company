<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'alternate_phone',
        'pincode',
        'city',
        'landmark',
        'state',
        'district',
        'role',
        'postal',
        'subject',
        'designation',
        'care_of',
        'roll_no',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class)->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function apsc_courses()
    {
        return $this->belongsToMany(ApscCourses::class)->withTimestamps();
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function recorded_courses()
    {
        return $this->belongsToMany(Recorded::class)->withTimestamps();
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function events()
    {
        return $this->belongsToMany(Event::class)->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apsc_order()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function study_materials()
    {
        return $this->belongsToMany(StudyMaterial::class)->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function study_razor()
    {
        return $this->hasMany(StudyRazor::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recorded_razor()
    {
        return $this->hasMany(RecordedRazor::class);
    }
    /**
     * @param $id
     * @return bool
     */
    public function subjectChoose()
    {
        $user = Auth::user();

        $apsc = DB::table('apsc_courses_user')
            ->where('user_id', $user->id)
            ->get()->isNotEmpty();



        $upsc = DB::table('course_user')
            ->where('user_id', $user->id)
            ->get()->isNotEmpty();

        $study = DB::table('study_material_user')
            ->where('user_id', $user->id)
            ->get()->isNotEmpty();

        $recorded = DB::table('recorded_user')
            ->where('user_id', $user->id)
            ->get()->isNotEmpty();


        if ($apsc) {
            return true;
        } else {
            if ($upsc) {
                return true;
            } else {
                if ($study) {
                    return true;
                } else {
                    if ($recorded) {
                        return true;
                    }
                }
            }
        }
        return false;
    }
    /**
     * @return bool
     */
    public function noCourses()
    {
        $user = Auth::user();
        $courses = array();
        foreach ($user->courses as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->apsc_courses as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->study_materials as $course) {
            array_push($courses, $course->title);
        }
        foreach ($user->recorded_courses as $course) {
            array_push($courses, $course->title);
        }
        if ($courses == null) {
            return true;
        } else {
            return false;
        }
    }


    public function getInvoiceData($userId, $course)
    {
        $invoice = Invoice::where('user_id', $userId)
            ->where('course', $course)->first();

        if ($invoice) {
            return $invoice;
        } else {
            return false;
        }
    }




    public static function getUser($id)
    {
        return User::find($id)->get()->first();
    }
}
