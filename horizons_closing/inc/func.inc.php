<?
function error($err){
  ?>
  <div class="alert alert-danger"><?echo $err?></div>
  <?
}
function getVisIpAddr() {

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
function getCountry($ip){
  $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
  $name = $ipdat->geoplugin_countryName;
  $code = $ipdat->geoplugin_countryCode;
  $back = array($name, $code);
  return $back;
}
function countryStats($code){
  $stats = @json_decode(file_get_contents("https://api.covid19api.com/summary"));
  $countries = $stats->Countries;
  foreach($countries as $country):
    if($country->CountryCode == $code){
      $new_cases = $country->NewConfirmed;
      $total = $country->TotalConfirmed;
      $new_death = $country->NewDeaths;
      $total_dath = $country->TotalDeaths;
      $new_recovered = $country->NewRecovered;
      $total_recovered = $country->TotalRecovered;
    }
  endforeach;
  $back = array($new_cases, $total, $new_death, $total_dath, $new_recovered, $total_recovered);
  return $back;
}
