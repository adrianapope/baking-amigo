<?php

// My common functions

function get_stars($avg_rating)
{
  if($avg_rating < .5) { // less than .5 then display five empty stars
    return "<i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";

  } elseif($avg_rating >=.5 && $avg_rating < 1) { // greater than or equal to .5 but less than 1 then display half of a star
    return "<i class='fa fa-star-half-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";

  } elseif($avg_rating >= 1 && $avg_rating < 1.5) {  // greater than or equal to 1 but less than 1.5 display one full star
    return "<i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";

  } elseif($avg_rating >= 1.5 && $avg_rating <2) { // greater than or equal to 1.5 but less than 2 display one and a half stars
    return "<i class='fa fa-star'></i><i class='fa fa-star-half-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";

  } elseif($avg_rating >= 2 && $avg_rating < 2.5) { // greater than or equal to 2 but less then 2.5 display two full stars
    return "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";

  } elseif($avg_rating >=2.5 && $avg_rating < 3) { // greater than or equal to 2.5 but less than 3 display two and a half stars
    return "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-half-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";

  } elseif($avg_rating >= 3 && $avg_rating < 3.5) { // greater than or equal to 3 but less than 3.5 display three full stars
    return "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i>";

  } elseif($avg_rating >= 3.5 && $avg_rating < 4) { // greater than or equal to 3.5 but less than 4 display three and a half stars
    return "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-half-o'></i><i class='fa fa-star-o'></i>";

  } elseif($avg_rating >= 4 && $avg_rating < 4.5) { // greater than 4 but less than 4.5 display four full stars
    return "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i>";

  } elseif($avg_rating >= 4.5 && $avg_rating < 5) { //greater than 4.5 but less than 5 dispaly four and a half stars
    return "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-half-o'></i>";

  } else { // must be five stars so display five stars
    return "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>";
  }

}