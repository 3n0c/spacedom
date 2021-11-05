<?php







$data = [
    'seconds-to-next-ascension' => 30,
];
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Metal Spirals</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
    body, html {
        color: #fff;
        background: #000;
        text-align: center;
        font-family: arial,sans-serif;
        font-size: 14px;
    }
    body {
        opacity: 0;
        transition: opacity 1s;
        -webkit-transition: opacity 1s; /* Safari */
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
        line-height: 10px;
    }
    .radio-toolbar input[type="radio"] {
        opacity: 0;
        position: fixed;
        width: 0;
    }
    .radio-toolbar label {
        display: inline-block;
        background-color: #222;
        padding: 0;
        font-size: 12px;
        border: none;
        width: 28px;
    }
    .radio-toolbar label:hover {
        background-color: #dfd;
    }
    .radio-toolbar input[type="radio"]:focus + label {
        border: none;
    }
    .radio-toolbar input[type="radio"]:checked + label {
        background-color: #bfb;
    }
</style>
<body onload="document.body.style.opacity='1'">
<span class="inline-space">Research: level <strong>0</strong></span>
<span class="inline-space">Health: level <strong>0</strong></span>
<span class="inline-space">Military: level <strong>0</strong></span>
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
    <?php for ($research = 0; $research <= $health; $research++):
        $checked = $health == 4 && $research == 3;
        ?><input id="dogma-<?=$health?>-<?=$research?>" type="radio" name="dogma"
            <?=$checked?'checked="checked"':''?>
        ><label for="dogma-<?=$health?>-<?=$research?>">&nbsp;</label><?php endfor; ?>
    <br/>
<?php endfor; ?>
        </td></tr>
    <tr><td class="align-left">Research</td>
    <td class="align-right">Military</td></tr>

</table>
</div>

<span id="count-down-message"><span id="seconds-to-next-ascension"><?=$data['seconds-to-next-ascension']?></span> seconds to next ascension</span>

<hr>

Color	HEX	RGB
#009b48	rgb(0, 155, 72)
#ffffff	rgb(255, 255, 255)
#b71234	rgb(183, 18, 52)
#ffd500	rgb(255, 213, 0)
#0046ad	rgb(0, 70, 173)
#ff5800	rgb(255, 88, 0)


<script>
    document.body.addEventListener('change', function (e) {
        let target = e.target;
        console.log("TARGET:", target);
    });
    let secondsToNextAscension = <?=$data['seconds-to-next-ascension']?>;
    setInterval(function() {
        switch (--secondsToNextAscension) {
            case 0:
                window.location.reload();
                break;
            case 1:
                document.body.style.opacity='0';
                document.getElementById('count-down-message').innerText = 'imminent ascension, link recovery...'
                break;
            default:
                document.getElementById('seconds-to-next-ascension').innerText = new String(secondsToNextAscension);
        }

    }, 1000);
</script>
</body>
</html>

