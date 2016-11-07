<?php
require __DIR__ . '/vendor/autoload.php';
use PhpSlugger\PhpSlugger;

$phpSlugger = new PhpSlugger();
echo $phpSlugger->slugit('∆ € $ Þ λ ₫ Sad asd as dfasif hasoif h');
