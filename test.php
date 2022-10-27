<?php

// 変数　動的型付け



$test = 123;
// 先頭は英文字かアンダーバー

$test = 'テストです';

// echo $test;

var_dump($test);


// const  文字は大文字

const MAX = 10;

$array = [1,2,3];

var_dump($array);

// 0から始まる
echo $array[1];

// 配列　1行
$array_1 = ['あああ',2,3];
echo('<br>');

$array_2 = [
  ['赤,','青','黄色'],
  ['緑','紫','黒']
];


echo '<pre>';
var_dump($array_2);
echo '</pre>';

// 紫を出したい場合
echo$array_2[1][1];


/*配列と連想配列の違い
配列・・数字（順番固定）と値がセット
$array[1];

連想配列・・キーと値がセット
キー => 値
key => value
$array["key]
*/


$array_member = [
  'name' => 'ホンダ',
  'height' => 170,
  'hobby' => 'サッカー'
];

echo $array_member['hobby'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';

$array_member_2 = [
  '本田' => [
    'height' => 170,
    'hobby' => 'soccer'
  ],
  '香川' => [
    'height' => 165,
    'hobby' => 'サッカー'
  ]
  ];

echo $array_member_2['香川']['height'];

echo '<pre>';
var_dump($array_member_2);
echo '</pre>';


$array_member_3 = [
  '1kumi' => [
    '本田' => [
      'height' => 170,
      'hobby' => 'サッカー'
    ],
    'イチロー' => [
      'height' => 178,
      'hobby' => '野球'
    ]
  ],
  '2kumi' => [
    '荒川' => [
      'height' => 178,
      'hobby' => '音楽'
    ],
    '坂本' => [
      'height' => 180,
      'hobby' => 'アルバイト'
    ]
  ]
];

echo $array_member_3['2kumi']['荒川']['hobby'];


echo '<pre>';
var_dump($array_member_3);
echo '</pre>';
