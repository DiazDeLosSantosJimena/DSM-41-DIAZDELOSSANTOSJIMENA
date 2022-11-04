<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class students extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'subject_id'
        ];
        
    public function groups() {
        return $this->hasMany(groups::class, 'student_id', 'id');
    
        }
    /*public function groups() {
        return $this->belongsTo(groups::class);
    
        }*/
    /*
    public function subjects() {
        return $this->hasMany(subject
        s::class);
    
        }
        */
        public function subjects() {
            return $this->belongsTo(subjects::class, 'subject_id');
        
            }    
    use SoftDeletes;   
}
