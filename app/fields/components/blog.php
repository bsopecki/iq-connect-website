<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$blog = new FieldsBuilder('blog');

$blog
->addText('title',['title'=>'Tekst'])
->addText('slogan',['title'=>'Tekst'])
->addTextArea('description',['title'=>'Tekst'])
    ->addRepeater('blog', ['label'=> 'Blog'])
        ->addImage('background-image')
        ->addTextArea('subtitle',['title'=>'Tekst'])
        ->addTextArea('desc',['title'=>'Tekst'])
        ->addLink('link',['title'=>'Link'])
        ->endRepeater()
    ;
return $blog;
