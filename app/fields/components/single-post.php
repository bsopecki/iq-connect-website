<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$spost = new FieldsBuilder('single-post');

$spost
    ->addImage('img', ['title'=>'Zdjęcie'])
    ;
return $spost;