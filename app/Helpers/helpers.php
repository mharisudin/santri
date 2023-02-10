<?php

// get school_years active
if (! function_exists('getSchoolYear'))
{
    // $schoolYear = SchoolYear::where(['is_active' => 1])->first();

    // return $schoolYear;
}

// formatting number
if (! function_exists('formatPrice'))
{
    function formatPrice($str)
    {
        return 'Rp. ' . number_format($str, '0', '', '.');
    }
}
