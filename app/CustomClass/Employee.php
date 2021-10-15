<?php
namespace App\CustomClass;

//Class này để chứa các User nhưng đặt tên là Employee để ko bị trùng với User.php đã có rồi
class Employee
{
    //Thuộc tính của Class phải có tên là text và children để đúng format hiển thị dữ liệu được
    public $text;

    //Getter, Setter

    function set_text($text) {
        $this->text = $text;
    }

    //Định nghĩa hàm toArray() để dùng trong đoạn Script ở blade
    public function toArray()
    {
        return get_object_vars($this);
    }
}