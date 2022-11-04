<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subjects extends Model
{
    use HasFactory;
    protected $table ='subjects';
    protected $primaryKey ='id';
    protected $fillable = [
        'name',
        'description',
        ];
    
        /*public function students() {
            return $this->belongsTo(students::class);
        
            }*/
        public function students() {
            return $this->hasMany(students::class, 'subject_id', 'id');
            
                }    
    
    use SoftDeletes;    
}
