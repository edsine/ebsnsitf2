<?php

namespace Modules\HumanResource\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
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

   public function users(){
    
    $this->hasOne(User::class,'ranking_id','id');
   }
    
    // protected static function newFactory()
    // {
    //     return \Modules\HumanResource\Database\factories\RankingFactory::new();
    // }
}
