<?php

namespace App;
use App\Model\UserInfo;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as AuthUser;
use Spatie\Permission\Traits\HasRoles;

class User  extends AuthUser
{
    use  SoftDeletes, HasRoles;

    // protected static $logAttributes = ['first_name', 'last_name', 'email', 'phone'];
    protected $fillable = ['firstname', 'lastname', 'email', 'phone','password'];

    // public function getDescriptionForEvent(string $eventName): string
    // {
    //     return "This model has been {$eventName}";
    // }
    // protected static $logName = 'User';
    // protected static $logOnlyDirty = true;

    public $timestamps = false;

    public function userInfo(){
        return $this->hasMany(UserInfo::class, 'user_id');
    }

    // public function Activation(){
    //     return $this->hasOne(Activation::class,'user_id');
    // }

}
