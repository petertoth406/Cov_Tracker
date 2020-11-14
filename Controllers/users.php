<?php
class Country extends DB {
  function get(){
    if(isset($_POST['search'])){
					$szur=$_POST['szures'];
					return $this->select("SELECT datum, new_cases, new_deaths, new_tests, total_cases, total_deaths, total_deaths_per_million FROM covid WHERE datum LIKE '%$szur%'");
					}

          else{
					return $this->select("SELECT datum, new_cases, new_deaths, new_tests, total_cases, total_deaths, total_deaths_per_million FROM covid ORDER BY datum DESC");
        }
  }
}

class Reszlet extends DB {
  function get(){
    $loc=$_GET['loc'];
    return $this->select("SELECT datum, new_cases, new_deaths, new_tests, total_cases, total_deaths, total_deaths_per_million FROM covid");
    }
}
?>
