<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
 echo '<p>Hello World</p>';
 echo '<h1>PHPやるよ！</h1>';
 echo 1 + 1;
$value = 7;
$area = $value * $value;
echo $area;
$value = 8;
echo $value;
$lesson = 'PHP';
echo $lesson.'入門';
$level = '入門';
echo $lesson.$level;
$name = 'にんじゃ';
$name .= 'わんこ';
echo $name;
echo "こんにちは、{$name}さん。";
$x = 20;
if($x > 10){
    echo '$xは10より大きい';
}
if($x == 30){
    echo '$xは30です。';
}elseif($x >= 20){
    echo '$xは20より大きいです。';
}else{
    echo '$xは30ではありません。';
}
$num = 100;
$math = $num % 3;
switch($math){
    case 0:
        echo '大吉';
        break;
    case 1:
        echo '中吉';
        break;
    case 2:
        echo '小吉';
        break;
    default:
        echo '凶';
        break;
}
$names = array('John', 'Kate', 'Bob');
echo $names[0];
$names[] = 'Mary';
echo $names[3];
$names[3] = 'Jone';
echo $names[3];
$user = array(
            'name' => 'わんこ',
            'age'    => 14,
            'gender' => 'male'
            );
echo $user['name'];
echo $user['level'] = 'beginner';
phpinfo();
 ?> 
 </body>
</html>