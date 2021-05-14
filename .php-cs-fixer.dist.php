<?php
//.php_cs.dist
$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('var')
    ->exclude('config')
    ->exclude('build')
    ->notPath('src/Kernel.php')
    ->notPath('public/index.php')
    ->in(__DIR__)
    ->name('*.php')
    ->ignoreDotFiles(true);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        '@PHP70Migration:risky' => true,
        '@PHP71Migration:risky' => true,
        '@DoctrineAnnotation' => true,
        'no_superfluous_phpdoc_tags' => false,
        'phpdoc_align' => false,
        'concat_space' => false,
        'declare_strict_types' => false,
        'doctrine_annotation_array_assignment' => false,
        'phpdoc_summary' => false,
    ])
    ->setFinder($finder);