<?php

namespace Modules\HumanResource\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ranking extends Model
{
    use HasFactory;
    
    public $primaryKey='id';

    public $table ='rankings';
    protected $fillable = [
        'name',
    ];

    public static array $rules=[
        'name'=>'required'
   ];

   public function staff(): \Illuminate\Database\Eloquent\Relations\HasMany
   {
       return $this->hasMany(staff::class);
   }
    
    // protected static function newFactory()
    // {
    //     return \Modules\HumanResource\Database\factories\RankingFactory::new();
    // }
}
