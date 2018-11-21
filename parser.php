<?php
include_once('simple_html_dom.php');

function scraping_toto($url)
{
    // create HTML DOM
    $html = file_get_html($url);


    foreach ($html->find('div.tir_result span.ball-white') as $e)
        echo ($e->innertext) . '<br>';

    $html->clear();
    unset($html);
}


// ------
//-----------------------------------------------------------------------
// test it!
$ret = scraping_toto('http://www.toto.bg/results/6x49/2018-92');

?>