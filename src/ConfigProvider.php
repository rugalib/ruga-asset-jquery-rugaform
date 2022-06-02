<?php

declare(strict_types=1);

namespace Ruga\Asset\jquery_rugaform;

/**
 * ConfigProvider.
 *
 * @author Roland Rusch, easy-smart solution GmbH <roland.rusch@easy-smart.ch>
 */
class ConfigProvider
{
    public function __invoke()
    {
        return [
            'ruga' => [
                'asset' => [
                    'rugalib/ruga-asset-jquery-rugaform' => [
                        'scripts' => ['jquery.rugaform.js'],
                        'stylesheets' => ['jquery.rugaform.css'],
                    ],
                ],
            ],
        ];
    }
}
