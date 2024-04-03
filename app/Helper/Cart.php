<?php
namespace App\Helper;

class Cart{
    public $items = [];
    public $total_quatity = 0;
    public $total_price = 0;

    public function __construct(){
            $this->items = session('cart') ? session('cart') : [];
    }

    //phương thức lấy về danh sách sản phẩm trong giỏ
    public function list(){
        return $this->items;
    }

    //thêm mới sản phẩm vào giỏ hàng
    public function add($product, $quantity = 1){
        $item = [
            'productId'=>$product->id,
            'name'=>$product->name,
            'price'=>$product->sale_price > 0 ? $product->sale_price : $product->price,
            'image'=>$product->image,
            'quantity'=>$quantity,
        ];
        $this->items[$product->id] = $item;
        session(['cart'=>$this->items]);
    }

    //cập nhật giỏ hàng

    //xoá sản phẩm khỏi giở hàng

    // xoá hết sản phẩm khỏi giỏ

    //lấy tổng tiền
    public function getTotalPrice(){
        $totalPrice = 0;
        foreach($this->items as $item){
            $totalPrice += $item['price']*$item['quantity'];
        }
        return $totalPrice;
    }
    public function getTotalQuantity(){
        $total = 0;
        foreach($this->items as $item){
            $total += $item['quantity'];
        }
        return $total;
    }


}
