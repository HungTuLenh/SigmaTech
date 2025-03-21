<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CpuAttribute extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Định nghĩa tên bảng nếu tên không phải là số nhiều của model
    protected $table = 'cpu_attribute';

    // Các thuộc tính có thể được gán hàng loạt
    protected $fillable = ['cpu_id', 'attribute_id', 'value'];

    // Quan hệ với Laptop 
    public function cpu()
    {
        return $this->belongsTo(Cpu::class);
    }
    // Quan hệ với Attribute
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
