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
</style>
<body>
<span class="inline-space">&#9635; Research Level: <strong>0</strong></span>
<span class="inline-space">&#9635; Health Level: <strong>0</strong></span>
<span class="inline-space">&#9635; Military Level: <strong>0</strong></span>
<hr>

<img src="img_la.jpg" alt="LA" style="width:100%">

<hr>

<table>
<?php for ($health = 0; $health <= 10; $health++): ?>
<tr><td>
    <?php for ($research = 0; $research <= $health; $research++): ?>
        <input type="radio" name="dogma">
    <?php endfor; ?>
    </td></tr>
<?php endfor; ?>
</table>

<div class="">
    <h1>This is a Heading</h1>
    <p>This is a paragraph.</p>
    <p>This is another paragraph.</p>
</div>

</body>
</html>

