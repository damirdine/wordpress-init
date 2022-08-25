<?php 
function getApi()
{
    $url = 'https://api.openweathermap.org/data/2.5/weather?q=nantes&units=metric&lang=fr&appid=92c3fd34ea87fe572aaad5a6f99029fb';
    $json_data = file_get_contents($url);
    $response = json_decode($json_data);
    return $response;
}
function display()
{
    $data = getApi();
    //var_dump($data->name, $data->weather[0]->description, $data->main->temp, $data);
    echo ('
    <div style = "display : flex">
    <img src="https://duckduckgo.com/assets/weather/icons/partly-cloudy-day.svg" style = "width:20px" alt="" srcset="">
    <p> ' . $data->name . ', ' . $data->weather[0]->description . ', <strong>' . $data->main->temp . ' °C</strong></p>
</div>
    ');
}

add_action('admin_notices', 'display');

add_action( 'admin_menu', 'admin_settings_meteo' );

function admin_settings_meteo()
{
      add_menu_page(
        'Meteo', // Title of the page
        'Meteo', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'meteo-page',
        'admin_settings_meteo_html' // The 'slug' - file to display when clicking the link
    );
}
function admin_settings_meteo_html(){
    settings_fields('temperature_unit_and_city');
    if(!get_option('unit')){
        add_option('unit','metric');
    }
    if(!get_option('city')){
        add_option('city','Nantes');
    }
    var_dump(get_option('unit'),get_option('city'));
    include('meteo-page.php');
}