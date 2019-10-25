<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$footer = new FieldsBuilder('footer');

$footer
    ->addTextArea('Contact',['title'=>'Tekst'])
    ->addRepeater('footer_contact', ['label'=> 'Contact'])
        ->addLink('contact_link',['title'=>'Link'])
        ->endRepeater()
    ->addTextArea('Services',['title'=>'Tekst'])
    ->addRepeater('footer_services', ['label'=> 'Services'])
        ->addLink('service_link',['title'=>'Link'])
        ->endRepeater()
    ->addTextArea('About_us',['title'=>'Tekst'])
    ->addRepeater('footer_about_us', ['label'=> 'About us'])
        ->addLink('about_link',['title'=>'Link'])
        ->endRepeater()
    ->addTextArea('Social_Media',['title'=>'Tekst'])
    ->addTextArea('description',['title'=>'Tekst'])
    ->addRepeater('footer_social_media', ['label'=> 'Social  Media'])
        ->addTextArea('icon_class',['title'=>'Tekst'])
        ->endRepeater()
    ->addTextArea('copyright',['title'=>'Tekst'])
    ;
return $footer;
