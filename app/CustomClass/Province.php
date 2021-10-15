<?php
namespace App\CustomClass;

class Province
{
    //Thuộc tính của Class phải có tên là text và children để đúng format hiển thị dữ liệu được
    public $text;
    public $children;

    //Getter, Setter
    function set_district($children) {
        $this->children = $children;
    }

    function set_text($text) {
        $this->text = $text;
    }

    //Định nghĩa hàm toArray() để dùng trong đoạn Script ở blade
    public function toArray()
    {
        return get_object_vars($this);
    }
}