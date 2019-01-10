<?php

namespace MateuszBieniek\EzPlatformFormBuilderCountry\Form\Type;

use EzSystems\EzPlatformFormBuilder\Form\Type\Field\AbstractFieldType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class CountryFieldType extends AbstractFieldType
{
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    public function getBlockPrefix()
    {
        return 'mateuszbieniek_country';
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(): string
    {
        return CountryType::class;
    }
}
