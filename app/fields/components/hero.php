<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero');

$hero
    ->addRepeater('hero', ['label'=> 'Hero'])
        ->addImage('background_image')
        ->addGroup('hero_label')
            ->addTextArea('title',['title'=>'Tekst','new_lines'=>'br'])
            ->addText('label',['title'=>'Tekst'])
        ->endGroup()
        ->addGroup('hero_dsc')
            ->addTextArea('description',['title'=>'Tekst'])
            ->addText('button_desc',['title'=>'Tekst'])
            ->addLink('link',['title'=>'Link'])
        ->endGroup()
        ->endRepeater()
    ;
return $hero;