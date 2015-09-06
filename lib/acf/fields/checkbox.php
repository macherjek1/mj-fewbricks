<?php

namespace fewbricks\acf\fields;

/**
 * Class checkbox
 * @package fewbricks\acf
 */
class checkbox extends field
{

    /**
     * @param string $label
     * @param string $name
     * @param string $key
     */
    public function __construct($label, $name, $key)
    {

        $base_settings = [
            'prefix' => '',
            'type' => 'checkbox',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'choices' => [],
            'default_value' => [],
            'layout' => 'vertical',
        ];

        parent::__construct($label, $name, $key, $base_settings);

    }

}
