<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public static function verif($request){
        $admin = Admin::find(1);
        if ((($request->username) == $admin['username']) && (md5($request->password) == $admin['password'])) {
            return "ok";
        } else {
            return "error";
        }
    }
    
}
