<?php
class Product {
    private $category, $id, $code, $name, $description, $price;

    public function __construct() {
        $this->category = null;
        $this->id = 0;
        $this->code = '';
        $this->name = '';
        $this->description = '';
        $this->price = 0.0;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($value) {
        $this->category = $value;
    }

    public function getID() {
        return $this->id;
    }

    public function setID($value) {
        $this->id = $value;
    }

    public function getCode() {
        return $this->code;
    }

    public function setCode($value) {
        $this->code = $value;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        $this->name = $value;
    }

    // getPrice() BẮT BUỘC trả về số thực để tính toán phần trăm giảm giá
    public function getPrice() {
        return $this->price;
    }

    public function setPrice($value) {
        $this->price = $value;
    }

    // THÊM HÀM NÀY: Để phục vụ hiển thị trên product_list.php và product_view.php
    public function getPriceFormatted() {
        $formatted_price = number_format($this->price, 2);
        return '$' . $formatted_price;
    }

    public function getDiscountPercent() {
        $discount_percent = 30;
        return $discount_percent;
    }

    public function getDiscountAmount() {
        $discount_percent = $this->getDiscountPercent() / 100;
        $discount_amount = $this->price * $discount_percent;
        $discount_amount = round($discount_amount, 2);
        return number_format($discount_amount, 2);
    }

    public function getDiscountPrice() {
        $discount_price = $this->price - $this->getDiscountAmount();
        return number_format($discount_price, 2);
    }

    public function getImageFilename() {
        $image_filename = $this->code . '.png';
        return $image_filename;
    }

    public function getImagePath() {
        $image_path = '../images/' . $this->getImageFilename();
        return $image_path;
    }

    public function getImageAltText() {
        $image_alt = 'Image: ' . $this->getImageFilename();
        return $image_alt;
    }
}
?>