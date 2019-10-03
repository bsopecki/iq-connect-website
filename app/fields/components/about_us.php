<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$about_us = new FieldsBuilder('about_us');

$about_us
->addText('title',['title'=>'Tekst'])
->addText('slogan',['title'=>'Tekst'])
->addTextArea('description',['title'=>'Tekst'])
->addRepeater('about-us', ['label'=> 'About Us'])
    ->addImage('logo')
    ->addTextArea('subtitle',['title'=>'Tekst'])
    ->addTextArea('desc',['title'=>'Tekst'])
    ->addLink('link',['title'=>'Link'])
    ->endRepeater()
    ;
return $about_us;