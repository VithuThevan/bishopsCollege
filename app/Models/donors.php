<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donors extends Model
{
    protected $table = 'donors';
    protected $fillable = [
        'firstname',
        'lastname',
        'donorEmail',
        'donorPhone',
        'donorAddress',
        'donorType',
        'donationType',
        'donationPurpose',
        'donationAmount',
        'signature',
        'studentname',
        'admissionno',
        'studentGrade',
    ];
}
