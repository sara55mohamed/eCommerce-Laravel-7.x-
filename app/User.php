<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'name', 'email', 'password', 'type'
        'name' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
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

    public static function getUsers()
    {
        return  DB::table('users')
            ->select('*')
            ->get()
            ->toArray();
    }
    public static function addUsers($data)
    {
        return DB::table('users')->insert($data);
    }
    public static function searchUser($email)
    {
        return  DB::table('users')
            ->select('*')
            ->where('email', 'like', '%' . $email . '%')
            ->get()
            ->first();
        // dd($x);
        // return DB::table('users')->insert($data);
    }
    public static function deleteUser($email)
    {
        return  DB::table('users')
            ->where('email', 'like', '%' . $email . '%')
            ->delete();
    }
    public static function editUser($data, $email)
    {
        return  DB::table('users')
            ->where('email', 'like', '%' . $email . '%')
            ->update($data);
    }

    public static function checkUser($email, $password)
    {
        return  DB::table('users')
            ->select('*')
            ->where('email', 'like', '%' . $email . '%')
            ->where('password', 'like', '%' . $password . '%')
            ->get()
            ->first();
    }

    public static function checkAuthourz($id)
    {
        return  DB::table('users')
            ->select('type')
            ->where('id', 'like', '%' . $id . '%')
            ->get()
            ->first();
    }
    // public static function updateData($old_email,$data){
    //     DB::table('users')
    //       ->where('email',$old_email)
    //       ->update($data);
    //   }
    //   public static function deleteData($id){
    //     DB::table('users')->where('id', '=', $id)->delete();
    //   }

}
