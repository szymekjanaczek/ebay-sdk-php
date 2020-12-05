<?php

// ecs.php
use PHP_CodeSniffer\Standards\Squiz\Sniffs\Arrays\ArrayDeclarationSniff;
use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\Operator\AlignDoubleArrowFixerHelper;
use PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ContainerConfigurator $containerConfigurator): void {
//    // A. standalone rule
    $services = $containerConfigurator->services();
//    $services->set(ArraySyntaxFixer::class)
//        ->call('configure', [[
//            'syntax' => 'short',
//        ]]);

    $services->set(BinaryOperatorSpacesFixer::class)
        ->call('configure', [[
            'default' => 'align_single_space_minimal'
        ]]);

    // B. full sets
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::SETS, [SetList::PSR_1, SetList::PSR_12, SetList::ARRAY]);
};
