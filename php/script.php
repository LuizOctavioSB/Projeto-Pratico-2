<?php
function getCurrentPage()
{
  $currentPage = basename($_SERVER['PHP_SELF']);
  return $currentPage;
}
?>