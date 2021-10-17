<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tatil extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'sabab',
        'boshlangichsana',
        'oxirgisana',
        'status',
        'xodim_id'
    ];

    public function xodim()
    {
        return $this->belongsTo(Xodim::class, 'xodim_id', 'id');
    }
}
