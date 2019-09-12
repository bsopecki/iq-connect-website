<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$category = new FieldsBuilder('category');

$category
    ->setLocation('taxonomy', '==', 'category');
  
$category
    ->addWysiwyg('header', ['label'=>'Nagłówek'])
    ->addImage('bg_image', ['label'=>'Zdjęcie w tle'])
    ->addRelationship('projects', ['label'=>'Projekty', 'post_type'=>'project']);
return $category;