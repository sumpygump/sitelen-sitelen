<?php
$glyphs = glob("word-glyphs/*.svg");
$syllables = glob("syllables/*.svg");
//$containers = glob("containers/*.svg");
$containers = array(
  'containers/cartouche-round.svg',
  'containers/cartouche-square.svg',
  'containers/e-single.svg',
  'containers/li-single.svg',
  'containers/lon-single.svg',
  'containers/lon-side-single.svg',
  'containers/lon-single-side.svg',
  'containers/lon-side-single-side.svg',
  'containers/o-narrow-side.svg',
  'containers/o-single.svg',
  'containers/o-single-side.svg',
  'containers/la-single.svg',
  'containers/poka-single.svg',
  'containers/poka-single-side.svg',
  'containers/sama-single.svg',
  'containers/sama-single-side.svg',
  'containers/tan-single.svg',
  'containers/tan-single-side.svg',
  'containers/tawa-single.svg',
  'containers/tawa-single-side.svg',
  'containers/pi-single.svg',
  'containers/pi-single-up.svg',
  'containers/kepeken-single.svg',
  'containers/kepeken-single-side.svg',
  'containers/ona-small.svg',

  'containers/e-vertical.svg',
  'containers/li-vertical.svg',
  'containers/lon-vertical.svg',
  'containers/lon-vertical-side.svg',
  'containers/o-vertical.svg',
  'containers/la-vertical.svg',
  'containers/poka-vertical.svg',
  'containers/sama-vertical.svg',
  'containers/tan-vertical.svg',
  'containers/tawa-vertical.svg',
  'containers/pi-vertical.svg',
  'containers/cartouche-round-vertical.svg',
  'containers/cartouche-square-vertical.svg',

  'containers/e-horizontal.svg',
  'containers/li-horizontal.svg',
  'containers/lon-horizontal.svg',
  'containers/lon-side-horizontal.svg',
  'containers/o-horizontal.svg',
  'containers/la-horizontal.svg',
  'containers/poka-horizontal.svg',
  'containers/pi-horizontal.svg',
  'containers/sama-horizontal.svg',
  'containers/tan-horizontal.svg',
  'containers/tawa-horizontal.svg',
  'containers/cartouche-round-double.svg',
  'containers/cartouche-square-double.svg',

  'containers/e-double.svg',
  'containers/li-double.svg',
  'containers/o-double.svg',
  'containers/o-double-side.svg',
  'containers/pi-double.svg',
  'containers/la-double.svg',

  'containers/point-single.svg',
  'containers/question-single.svg',
  'containers/title-single.svg',
  'containers/colon-single.svg',
  'containers/comma-single.svg',
  'containers/exclamation-single.svg',

  'containers/point-double.svg',
  'containers/question-double.svg',
  'containers/title-double.svg',
  'containers/colon-double.svg',
  'containers/comma-double.svg',
  'containers/exclamation-double.svg',
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sitelen Sitelen SVG Glyphs</title>
        <style>
            body { margin: 0; background-color: #cccccc; }
            .page { padding: 10px 20px; }
            .glyphs { display: flex; justify-content: flex-start; flex-wrap: wrap; }
            .glyphItem { padding: 10px; }
            .glyph { width: 64px; height: 64px; padding: 5px; }
            .glyph-wide { margin: 0 auto; width: 128px; height: 128px; }
            .glyph img { display: block; max-width: 64px; max-height: 64px; width: auto; height: auto; margin: 0 auto;}
            .glyph-wide img { display: block; max-width: 128px; max-height: 128px; width: auto; height: auto; margin: 0 auto;}
            .glyph-name { text-align: center; max-width: 64px; }
            .glyph-wide + .glyph-name { max-width: 128px; }
            .footer { text-align: center; background-color: #ffffff; padding: 1rem; margin-top: 2rem; font-size: 0.8rem;}
        </style>
    </head>
    <body>
        <div class="page">
            <h1>Sitelen Sitelen SVG Glyphs</h1>

            <h2>Word Glyphs</h2>
            <p>See also <a href="words.html">categorized word list</a></p>
            <div class="glyphs">
    <?php foreach ($glyphs as $glyph) { ?>
                <div class="glyphItem"><div class="glyph"> <img src="<?=$glyph?>" /> </div> <div class="glyph-name"><?=pathinfo($glyph, PATHINFO_FILENAME); ?></div></div>
    <?php } // end foreach ?>
            </div>

            <hr />

            <h2>Syllable Glyphs</h2>
            <div class="glyphs">
    <?php foreach ($syllables as $glyph) { ?>
                <div class="glyphItem"><div class="glyph"> <img src="<?=$glyph?>" /> </div> <div class="glyph-name"><?=pathinfo($glyph, PATHINFO_FILENAME); ?></div></div>
    <?php } // end foreach ?>
            </div>

            <hr />

            <h2>Containers</h2>
            <div class="glyphs">
    <?php foreach ($containers as $glyph) { ?>
    <?php
    $class = "glyph";
    if (strpos($glyph, "double") || strpos($glyph, "horizontal") || strpos($glyph, "vertical")) {
        $class = "glyph-wide";
    }
    ?>
                <div class="glyphItem"><div class="<?=$class?>"> <img src="<?=$glyph?>" /> </div> <div class="glyph-name"><?=pathinfo($glyph, PATHINFO_FILENAME); ?></div></div>
    <?php } // end foreach ?>
            </div>
        </div>

        <div class="footer">
            <p>Credit for vectorized version of Toki Pona Sitelen Sitelen glyphs goes to Jan Same. <a href="http://www.jonathangabel.com/2015/jan-same-vectorized-sitelen/">See original post</a>
        </div>
    </body>
</html>
