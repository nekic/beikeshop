<?php


const order = [
    "login_url" =>"/login",
    "product"=> "#tab-product-0 > div > div:nth-child(1) > div > div.image > a > div > img",//购买商品
    "buy_btn"=> "#product-top > div:nth-child(2) > div > div.quantity-btns > button.btn.btn-dark.ms-3.fw-bold",//购买按钮
    "address_btn"=>"#checkout-address-app > div.checkout-black > div.addresses-wrap > div > div > div > button", //添加地址
    "login_text"=> "Home",
];
const ca_order_status = [
    "Unpaid"=>"Unpaid",//待支付
    "paid"=>"paid",//已支付
    "Shipped"=>"Shipped",//已发货
    "Completed"=>"Completed",
];