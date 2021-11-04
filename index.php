<?php







?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
    body, html {
        color: #fff;
        background: #000;
        text-align: center;
        font-family: arial,sans-serif;
        font-size: 14px;
    }
    .inline-space {
        padding-left: 10px;
        padding-right: 10px;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }
    .planet {
        font-weight: bold;
        margin: 10px;
    }
    .align-left {
        text-align: left;
    }
    .align-right {
        text-align: right;
    }
    .radio-toolbar {
        margin: 10px;
    }
    .radio-toolbar input[type="radio"] {
        opacity: 0;
        position: fixed;
        width: 0;
    }
    .radio-toolbar label {
        display: inline-block;
        background-color: #ddd;
        padding: 0;
        font-size: 16px;
        border: 2px solid #444;
        width: 32px;
    }
    .radio-toolbar label:hover {
        background-color: #dfd;
    }
    .radio-toolbar input[type="radio"]:focus + label {
        border: 2px dashed #444;
    }
    .radio-toolbar input[type="radio"]:checked + label {
        background-color: #bfb;
        border-color: #4c4;
    }
</style>
<body>
<span class="inline-space">&#9635; Research Level: <strong>0</strong></span>
<span class="inline-space">&#9635; Health Level: <strong>0</strong></span>
<span class="inline-space">&#9635; Military Level: <strong>0</strong></span>
<hr>
<div class="planet">
    Planet
</div>
<span class="inline-space">Year: <strong>0</strong> a.f.a.</span>
<span class="inline-space">Population: <strong>2,584,034,261</strong></span>

<div>
<img src="https://cdn.britannica.com/25/160325-050-EB1C8FB7/image-instruments-Earth-satellite-NASA-Suomi-National-2012.jpg" alt="Earth" width="400">
</div>

<div class="radio-toolbar">
<table class="center">
    <tr><td colspan="2">Health</td></tr>
    <tr><td colspan="2">
<?php for ($health = 0; $health <= 10; $health++): ?>
    <?php for ($research = 0; $research <= $health; $research++): ?><input id="dogma-<?=$health?>-<?=$research?>" type="radio" name="dogma"
        ><label for="dogma-<?=$health?>-<?=$research?>">&nbsp;</label><?php endfor; ?>
    <br/>
<?php endfor; ?>
        </td></tr>
    <tr><td class="align-left">Research</td>
    <td class="align-right">Military</td></tr>

</table>
</div>

30 seconds to next ascension

<hr>

Color	HEX	RGB
#009b48	rgb(0, 155, 72)
#ffffff	rgb(255, 255, 255)
#b71234	rgb(183, 18, 52)
#ffd500	rgb(255, 213, 0)
#0046ad	rgb(0, 70, 173)
#ff5800	rgb(255, 88, 0)

</body>
</html>

