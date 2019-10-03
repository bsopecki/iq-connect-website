<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer = new FieldsBuilder('footer');

$footer
    ->addTextArea('Contact',['title'=>'Tekst'])
        ->addRepeater('footer contact', ['label'=> 'Contact'])
            ->addLink('contact link',['title'=>'Link'])
            ->endRepeater()
    ->addTextArea('Services',['title'=>'Tekst'])
        ->addRepeater('footer services', ['label'=> 'Services'])
            ->addLink('service link',['title'=>'Link'])
            ->endRepeater()
    ->addTextArea('About us',['title'=>'Tekst'])
        ->addRepeater('footer about us', ['label'=> 'About us'])
            ->addLink(' about link',['title'=>'Link'])
            ->endRepeater()
    ->addTextArea('Social Media',['title'=>'Tekst'])
    ->addTextArea('description',['title'=>'Tekst'])
        ->addRepeater('footer social media', ['label'=> 'Social  Media'])
            ->addTextArea('icon class',['title'=>'Tekst'])
            ->endRepeater()
    ->addTextArea('copyright',['title'=>'Tekst'])
    ;
return $footer;
