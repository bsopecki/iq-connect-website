<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder',['placement'=> 'left'])
        ->addFlexibleContent('components',['button_label' => 'Add Component'])
        ->addLayout(get_field_partial('components.hero'))
        ->addLayout(get_field_partial('components.about_us'))
        ->addLayout(get_field_partial('components.blog'))
        ->addLayout(get_field_partial('components.contact_section'))
        ->addLayout(get_field_partial('components.footer'));
return $builder;