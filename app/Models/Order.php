<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User as Member;   //將User另外命名為Member，因為在此project，User對應的是members

class Order extends Model
{
    use HasFactory;


    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
