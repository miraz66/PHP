<?php

// ARRAY
$programmingLanguages = ['php', 'java', 'python']; // Simple Array
$programmingLanguagesForKey = [  // Key for Array
    "php" => 8.1,
    "java" => 8.2,
    "python" => 8.3,
];
$multipleArray = ["php" => [
    "creator"=> "Rasmus Lerdorf",
    "extension"=>"php",
    "website"=> "www.php.net",
    "isOpenSource"=> "true",
    "versions"=> [
        'version' => 8, "release"=> "Nov 26, 2020",
        "version7" => 7.3, "release7"=> "Nov 26, 2019"
    ],
],
];

$programmingLanguages[] = 'C++';
$programmingLanguagesForKey["Go"] = '1.3';
array_push($programmingLanguages,'C', 'Rube', 'Go'); // another Options for array creation


print_r($programmingLanguages);
print_r($programmingLanguagesForKey);

echo count($programmingLanguages);
echo count($programmingLanguagesForKey);
echo $programmingLanguagesForKey["php"];
echo $multipleArray["php"]['versions'][0]['release'];