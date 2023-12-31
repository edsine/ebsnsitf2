<?php

namespace Modules\ClaimsCompensation\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\EmployerManager\Models\Employee;

class DiseaseClaim extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'employer_id', 'employee_id', 'nature_of_work', 'nature_of_disease', 'date_disease_diagnosed',
        'nature_of_injury', 'exposure_years', 'exposure_months', 'exposure_days', 'accident_report_date',
        'course_of_work', 'employment_years', 'employment_months', 'former_employers',
        'medical_last_name', 'medical_first_name', 'medical_practice_number',
        'document', 'status',
    ];

   /*  public function employer()
    {
        return $this->belongsTo(Employer::class);
    } */

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    } 
}
