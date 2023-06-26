<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';//model sẽ tương tác với bảng Contacts
    
    protected $primaryKey = 'id';// Thuộc tính này xác định tên của trường khóa chính trong bảng. Trong trường hợp này, trường khóa chính 
    //được đặt tên là "id".

    protected $fillable = ['name', 'weight', 'price', 'description','color'];//Thuộc tính này cho phép xác định các trường mà bạn cho phép gán 
    //dữ liệu trực tiếp từ form hoặc dữ liệu đầu vào người dùng. Trong trường hợp này, các trường "name", "weight" và "price" được cho phép gán dữ liệu trực tiếp.
}
