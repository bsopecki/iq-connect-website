<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$projects = new FieldsBuilder('projects');

$projects
    ->setLocation('post_type', '==', 'projects');
  
$projects
    ->addImage('background_image')
    ->addImage('img')
    ->addText('title',['title'=>'Tekst'])
    ->addText('subtitle',['title'=>'Tekst'])
    ->addTextarea('description',['title'=>'Tekst'])
    ->addRepeater('colors',['label'=>'Colors'])
        ->addText('color',['title'=>'Color'])
        ->addTrueFalse('border')
    ->endRepeater()
    ->addImage('image');
return $projects;