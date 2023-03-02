<?php

namespace App\Models;

class _Products{
    public static function all(){

        $product_info =[
                [
                    'id'        =>  '1',
                    'type'      =>  'Banana Chips',
                    'desc'      =>  'Banana chips are deep-fried or dried, generally crispy slices of bananas. 
                                    They are usually made from firmer, starchier banana varieties like the Saba and Nendran cultivars. 
                                    They can be sweet or savory, and can be covered with sugar, honey, salt, or various spices.',
                    'img'       =>  'assets/img/banana_chips.jpg'
                ],
                [
                    'id'        =>  '2',
                    'type'      =>  'Potato Chips',
                    'desc'      =>  'A potato chip or crisp is a thin slice of potato that has been deep fried, baked, or air fried until crunchy. 
                                    They are commonly served as a snack, side dish, or appetizer.',
                    'img'       =>  'assets/img/potato_chips.jpg'
                ],
                [
                    'id'        =>  '3',
                    'type'      =>  'Kamote Chips',
                    'desc'      =>  'Kamote is highly nutritious, a great source of vitamins, minerals, and fiber. Believed to have cancer-fighting properties, it also supports the immune system, enhances brain function, and promotes gut health. 
                                    CHIP, CHIP, HOORAY Not your ordinary chips, it\'s gourmet.',
                    'img'       =>  'assets/img/kamote_chips.jpg'
                ]
        ];
        return ($product_info);
        
    }
}