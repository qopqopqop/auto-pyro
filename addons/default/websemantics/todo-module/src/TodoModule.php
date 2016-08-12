<?php namespace Websemantics\TodoModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class TodoModule extends Module
{

    /**
     * The navigation icon.
     *
     * @var string
     */
    protected $icon = 'addon';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'example'
    ];

}