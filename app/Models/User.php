<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;


                                           /*      */
                                       /*  Table name  */
                                           /*      */
    protected $table = 'users';




                                            /*     */
                                        /*  Fillables  */
                                            /*     */
    protected $fillable =
    [
        'name',
        'email',
        'password'
    ];




}
