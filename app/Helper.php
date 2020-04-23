<?php 
function year_diff($date) {
    $now            = new DateTime('now');
    $dateSpecified  = new DateTime($date);
    $diff           = $now->diff($dateSpecified);

    return $diff->y;
}