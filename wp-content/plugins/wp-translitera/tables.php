<?php //add in p1.2

if ($loc == 'ru_RU') {//Русская локализация 
    $ret = array(
        'А' => 'A', 'а' => 'a', 'Б' => 'B', 'б' => 'b', 'В' => 'V', 'в' => 'v', 'Г' => 'G',
        'г' => 'g', 'Д' => 'D', 'д' => 'd', 'Е' => 'E', 'е' => 'e', 'Ё' => 'Jo', 'ё' => 'jo',
        'Ж' => 'Zh', 'ж' => 'zh', 'З' => 'Z', 'з' => 'z', 'И' => 'I', 'и' => 'i', 'Й' => 'J',
        'й' => 'j', 'К' => 'K', 'к' => 'k', 'Л' => 'L', 'л' => 'l', 'М' => 'M', 'м' => 'm',
        'Н' => 'N', 'н' => 'n', 'О' => 'O', 'о' => 'o', 'П' => 'P', 'п' => 'p', 'Р' => 'R',
        'р' => 'r', 'С' => 'S', 'с' => 's', 'Т' => 'T', 'т' => 't', 'У' => 'U', 'у' => 'u',
        'Ф' => 'F', 'ф' => 'f', 'Х' => 'H', 'х' => 'h', 'Ц' => 'C', 'ц' => 'c', 'Ч' => 'Ch',
        'ч' => 'ch', 'Ш' => 'Sh', 'ш' => 'sh', 'Щ' => 'Shh', 'щ' => 'shh', 'Ъ' => '',
        'ъ' => '', 'Ы' => 'Y', 'ы' => 'y', 'Ь' => '', 'ь' => '', 'Э' => 'Je', 'э' => 'je',
        'Ю' => 'Ju', 'ю' => 'ju', 'Я' => 'Ja', 'я' => 'ja'
    );
} elseif ($loc == 'uk') {//Украинская локализация Добавлено 160415
    $ret = array(
        'А' => 'A', 'а' => 'a', 'Б' => 'B', 'б' => 'b', 'В' => 'V', 'в' => 'v', 'Г' => 'H',
        'г' => 'h', 'Ґ' => 'G', 'ґ' => 'g', 'Д' => 'D', 'д' => 'd', 'Е' => 'E', 'е' => 'e',
        'Є' => 'Ie', 'є' => 'ie', 'Ж' => 'Zh', 'ж' => 'zh', 'З' => 'Z', 'з' => 'z', 'И' => 'Y',
        'и' => 'y', 'І' => 'I', 'і' => 'i', 'Ї' => 'I', 'ї' => 'i', 'Й' => 'I', 'й' => 'i',
        'К' => 'K', 'к' => 'k', 'Л' => 'L', 'л' => 'l', 'М' => 'M', 'м' => 'm', 'Н' => 'N',
        'н' => 'n', 'О' => 'O', 'о' => 'o', 'П' => 'P', 'п' => 'p', 'Р' => 'R', 'р' => 'r',
        'С' => 'S', 'с' => 's', 'Т' => 'T', 'т' => 't', 'У' => 'U', 'у' => 'u', 'Ф' => 'F',
        'ф' => 'f', 'Х' => 'Kh', 'х' => 'kh', 'Ц' => 'Ts', 'ц' => 'ts', 'Ч' => 'Ch', 'ч' => 'ch',
        'Ш' => 'Sh', 'ш' => 'sh', 'Щ' => 'Shch', 'щ' => 'shch', 'Ь' => '', 'ь' => '', 'Ю' => 'Iu',
        'ю' => 'iu', 'Я' => 'Ia', 'я' => 'ia', "'" => ''
    );
} elseif ($loc == 'bg' || $loc == 'bg_BG') {//bulgarian locale добавлено 170114
    $ret = array(
        'А' => 'A', 'а' => 'a', 'Б' => 'B', 'б' => 'b', 'В' => 'V', 'в' => 'v', 'Г' => 'G',
        'г' => 'g', 'Д' => 'D', 'д' => 'd', 'Е' => 'E', 'е' => 'e', 'Ё' => 'Jo', 'ё' => 'jo',
        'Ж' => 'Zh', 'ж' => 'zh', 'З' => 'Z', 'з' => 'z', 'И' => 'I', 'и' => 'i', 'Й' => 'J',
        'й' => 'j', 'К' => 'K', 'к' => 'k', 'Л' => 'L', 'л' => 'l', 'М' => 'M', 'м' => 'm',
        'Н' => 'N', 'н' => 'n', 'О' => 'O', 'о' => 'o', 'П' => 'P', 'п' => 'p', 'Р' => 'R',
        'р' => 'r', 'С' => 'S', 'с' => 's', 'Т' => 'T', 'т' => 't', 'У' => 'U', 'у' => 'u',
        'Ф' => 'F', 'ф' => 'f', 'Х' => 'H', 'х' => 'h', 'Ц' => 'C', 'ц' => 'c', 'Ч' => 'Ch',
        'ч' => 'ch', 'Ш' => 'Sh', 'ш' => 'sh', 'Щ' => 'Sht', 'щ' => 'sht', 'Ъ' => 'a',
        'ъ' => 'a', 'Ы' => 'Y', 'ы' => 'y', 'Ь' => '', 'ь' => '', 'Э' => 'Je', 'э' => 'je',
        'Ю' => 'Ju', 'ю' => 'ju', 'Я' => 'Ja', 'я' => 'ja'
    );
}
//Глобальная локализация 
// добалено 160306, Обновлено 160415/
$ret = $ret + array(
    'А' => 'A', 'а' => 'a', 'Б' => 'B', 'б' => 'b', 'В' => 'V', 'в' => 'v', 'Г' => 'G',
    'г' => 'g', 'Д' => 'D', 'д' => 'd', 'Е' => 'E', 'е' => 'e', 'Ё' => 'Jo', 'ё' => 'jo',
    'Ж' => 'Zh', 'ж' => 'zh', 'З' => 'Z', 'з' => 'z', 'И' => 'I', 'и' => 'i', 'Й' => 'J',
    'й' => 'j', 'К' => 'K', 'к' => 'k', 'Л' => 'L', 'л' => 'l', 'М' => 'M', 'м' => 'm',
    'Н' => 'N', 'н' => 'n', 'О' => 'O', 'о' => 'o', 'П' => 'P', 'п' => 'p', 'Р' => 'R',
    'р' => 'r', 'С' => 'S', 'с' => 's', 'Т' => 'T', 'т' => 't', 'У' => 'U', 'у' => 'u',
    'Ф' => 'F', 'ф' => 'f', 'Х' => 'H', 'х' => 'h', 'Ц' => 'C', 'ц' => 'c', 'Ч' => 'Ch',
    'ч' => 'ch', 'Ш' => 'Sh', 'ш' => 'sh', 'Щ' => 'Shh', 'щ' => 'shh', 'Ъ' => '',
    'ъ' => '', 'Ы' => 'Y', 'ы' => 'y', 'Ь' => '', 'ь' => '', 'Э' => 'Je', 'э' => 'je',
    'Ю' => 'Ju', 'ю' => 'ju', 'Я' => 'Ja', 'я' => 'ja', 'Ґ' => 'G', 'ґ' => 'g', 'Є' => 'Ie',
    'є' => 'ie', 'І' => 'I', 'і' => 'i', 'Ї' => 'I', 'ї' => 'i', "'" => ''
);

