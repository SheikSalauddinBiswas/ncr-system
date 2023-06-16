<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class general_diary extends Model
{
    use HasFactory;
    protected $fillable = [
        'gd_no',
        'name',
        'fname',
        'email',
        'mobile',
        'emobile',
        'nid_num',
        'city',
        'union',
        'thana',
        'area',
        'profession',
        'crime_type',
        'c_city',
        'c_union',
        'c_thana',
        'c_area',
        'statement',
        'crime_time',
        'crime_date',
        'color_product',
        'product_document',
        'identifier_data',
        'addi_data_crime',
        'status',
        // add all other fields
    ];
    protected $table = 'general_diaries';
}
