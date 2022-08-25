<?php 
// settings_fields('temperature_unit');
// var_dump(get_option('unit'));
?>
<div class="wrap ">
    <h1>Meteo</h1>
    <h2>Bienvenue dans l'assistant Meteo</h2>
    <form action="">
        <div class="input"><label for="">Ville par defaut</label><input type="text" name="city"></div>
        <div class="input"><label for="">Unite pour les temperatures</label><select name="unit" id="">
                <option value="metric" <?= get_option('unit') === 'metric' ? 'selected' : '' ?>>Celcius</option>
                <option value="imperial" <?= get_option('unit') === 'imperial' ? 'selected' : '' ?>>Fahrenheit</option>
                <option value="standard" <?= get_option('unit') === 'standard' ? 'selected' : '' ?>>Kelvin</option>
            </select></div>
        <?php submit_button() ?>
    </form>
</div>

<style>
    form {
        display: grid;
        gap: 2rem;
    }

    input,
    select,
    button {
        width: 250px;
        margin-left: 15px;
    }
</style>