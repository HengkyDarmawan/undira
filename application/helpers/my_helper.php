<?php
function indonesia_month_name($month_number)
{
    $month_name = array(
        'Januari', 'Febuari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );
    return $month_name[$month_number - 1];
}

function indonesia_date($datetime)
{
    $day = substr($datetime, 8, 2);
    $month = substr($datetime, 5, 2);
    $year = substr($datetime, 0, 4);

    return $day . ' ' . indonesia_month_name($month) . ' ' . $year;
}
