<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Task extends Model
{
    protected $fillable=['name','note','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ScopeFilter($query)
    {
        $from=request('az');
        $to=request('to');

        if (isset($from))
        {
            $from_date=new Carbon($from);
            $query->where('created_at','>',$from_date);
        }
        if (isset($to))
        {
            $to_date=new Carbon($to);
            $query->where('created_at','<',$to_date);
        }

        return $query;
    }
}
