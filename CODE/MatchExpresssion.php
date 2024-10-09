<?php
$food='cake';

$return_value=match($food)
{
    'cake'=>'Cake is a sweet dessert.',
    'pie'=>'Pie is a baked dish.',
    'ice cream'=>'Ice cream is a frozen dessert.',
    default=>'No information available.'
};
var_dump($return_value);