<?php

  $firstPage   = '';
  $previousPage = '';
  if ($paginationMenu['currentPage'] > 1){
    $firstPage = '<a href="?page=1'.$paginationMenu['sorting'].'"> << </a>'."&nbsp;";
    $previousPage = '<a href="?page=' . ($paginationMenu['currentPage'] - 1) . $paginationMenu['sorting']. '"> < </a>'."&nbsp;";
  }

  $pages = '';
  $firstThreeDots = '';
  if ($paginationMenu['startPage'] > 1){
    $firstThreeDots = '... ';
  }

  for ($i = $paginationMenu['startPage']; $i <= $paginationMenu['endPage']; $i++) {
    if ($i == $paginationMenu['currentPage']) {
      $pages .= '<strong>' . $i . '</strong> ';
    } else {
      $pages .= '<a href="?page='. $i . $paginationMenu['sorting'] .'">' . $i . '</a> ';
    }
  }

  $lastThreeDots = '';
  if ($paginationMenu['endPage'] < $paginationMenu['pagesCount']){
    $lastThreeDots = '... ';
  }

  $next = '';
  $last = '';
  if ($paginationMenu['currentPage'] < $paginationMenu['pagesCount']){
    $next = '<a href="?page=' . ($paginationMenu['currentPage'] + 1) . $paginationMenu['sorting'] . '"> > </a>'."&nbsp;";
    $last = '<a href="?page=' .  $paginationMenu['pagesCount'] . $paginationMenu['sorting'] . '"> >> </a>';
  }

  echo $firstPage . $previousPage . $firstThreeDots . $pages . $lastThreeDots . $next . $last;