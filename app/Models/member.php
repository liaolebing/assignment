<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class member {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Lisa',
            'country' => 'Thailand',
            'favorite food' => 'Fried chicken',
            'image' => 'Lisa.jpg',
            'hobby' =>'dancing',
            'Favorite color' =>'pink',
            'company' =>'YG',
        ],
        '2' => [
            'id' => 2,
             'name' => 'Rose',
            'country' => 'America',
            'favorite food' => 'cake',
            'image' => 'Rose.jpg',
            'hobby' =>'dancing',
            'Favorite color' =>'black',
            'company' =>'YG',
        ],
        '3' => [
            'id' => 3,
            'name' => 'jisoo',
            'country' => 'Korea',
            'favorite food' => 'Ice cream',
            'image' => 'Jisoo.jpg',
            'hobby' =>'dancing',
            'Favorite color' =>'yellow',
            'company' =>'YG',
        ],
        '4' => [
            'id' => 4,
            'name' => 'jenie',
            'country' => 'America',
            'favorite food' => 'beef',
            'image' => 'jenie.jpg',
            'hobby' =>'dancing',
            'Favorite color' =>'gray',
            'company' =>'YG',
        ],
        '5' => [
            'id' => 5,
             'name' => 'xuanmei',
            'country' => 'Korea',
            'favorite food' => 'salad',
            'image' => 'xuanmei.jpg',
            'hobby' =>'dancing',
            'Favorite color' =>'purple',
            'company' =>'YG',
        ],
         '6' => [
            'id' => 6,
             'name' => 'xuanya',
            'country' => 'Korea',
            'favorite food' => 'Rice cake',
            'image' => 'xuanya.jpg',
            'hobby' =>'dancing',
            'Favorite color' =>'pink',
            'company' =>'YG',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
