<?php

function create_slug($string) {
    $stringInLowercase = strtolower($string);
    $slug = preg_replace('/[^a-z0-9-]+/', '-', $stringInLowercase);
    return $slug;
}