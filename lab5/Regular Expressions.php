<?php
//   (الايميل ) (الباسورد) (رقم الهاتف) (البحث عن كلمات) (البحث عن تاريخ)نص يحتوي على كل ماسيتم اختباره 
$text = "Please contact us at support@example.com or call (123) 456-7890. 
          Today's date is 01/29/2025. 
          There was an error in the process and an info message to follow.";

// 1. البحث عن عنوان بريد إلكتروني

$emailPattern = '/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/';
if (preg_match($emailPattern, $text, $emailMatches)) {
    echo "Found email: " . $emailMatches[0] . "<br><br>";
}

// 2. التحقق من رقم هاتف أمريكي
$phonePattern = '/\(\d{3}\) \d{3}-\d{4}/';
if (preg_match($phonePattern, $text, $phoneMatches)) {
    echo "Found phone number: " . $phoneMatches[0] . "<br><br>";
}

// 3. العثور على كلمات تبدأ بحرف معين وتنتهي بحرف آخر
$wordPattern = '/\b[aA]\w*e\b/';
preg_match_all($wordPattern, $text, $wordMatches);
echo "Found words: " . implode(", ", $wordMatches[0]) . "<br><br>";

// 4. البحث عن تاريخ بصيغة معينة
$datePattern = '/\b\d{2}\/\d{2}\/\d{4}\b/';
if (preg_match($datePattern, $text, $dateMatches)) {
    echo "Found date: " . $dateMatches[0] . "<br><br>";
}

// 5. البحث عن جملة تحتوي على كلمة معينة في النص
$sentencePattern = '/\b(?:error|warning|info)\b.*?\./';
preg_match_all($sentencePattern, $text, $sentenceMatches);
echo "Found sentences: " . implode(" ", $sentenceMatches[0]) . "<br><br>";
?>

