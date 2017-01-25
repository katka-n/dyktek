<?php

function polMonth($posts)
{
    $month = $posts['created_at'];
    $month_sub = substr($month, 5, 2);

    $months_arr = array('01' => 'STY', '02' => 'LUTY', '03' => 'MAR',
        '04' => 'KWI', '05' => 'MAJ', '06' => 'CZE',
        '07' => 'LIP', '08' => 'SIE', '09' => 'WRZE',
        '10' => 'PAŹ', '11' => 'LIS', '12' => 'GRU');

    $pol_month = $months_arr[$month_sub];

    return $pol_month;
}

function polDay($posts)
{
    $month = $posts['created_at'];
    $new_day = substr($month, 8, 2);
    return $new_day;
}

function year($posts)
{
    return $year = substr($posts['created_at'], 0, 4);
}

function postTruncate($posts)
{
    $data = $posts['excerpt'];
    if (strlen($data) > 200) {
        return $truncated = substr($data, 0, strrpos(substr($data, 0, 200), ' '));
    }
}

function categoryName($posts, $categories)
{

    $entry_category = $posts['category_id'];

    foreach ($categories as $key => $val) {
        if ($val['id'] === $entry_category) {
            return $val['name'];
        }
    }
}

function iframeSearch($posts)
{
    $data = ($posts[0]['body']);
    preg_match('#(?:<iframe[^>]*)(?:(?:/>)|(?:>.*?</iframe>))#i', $data, $matches);

//    var_dump($matches);
    $movie = $matches[0];
    return $movie;
}


function fullMonth($postsByDates)
{
    $date = $postsByDates['created_at'];
//    $month_sub = substr($date, 5, 2);
//
//    $months_arr = array('01' => 'STYCZEŃ', '02' => 'LUTY', '03' => 'MARZEC',
//        '04' => 'KWIECIEŃ', '05' => 'MAJ', '06' => 'CZERWIEC',
//        '07' => 'LIPIEC', '08' => 'SIERPIEŃ', '09' => 'WRZESIEŃ',
//        '10' => 'PAŹDZIERNIK', '11' => 'LISTOPAD', '12' => 'GRUDZIEŃ');
//
//    $pol_month = $months_arr[$month_sub];

    return $date;
}