<?php

/**
 *
 * Flextype Youtube Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

include_once 'app/Controllers/YoutubeController.php';
include_once 'shortcodes/YoutubeShortcode.php';
include_once 'twig/YoutubeTwigExtension.php';

$flextype['YoutubeController'] = function ($container) {
    return new YoutubeController($container);
};

// Add Twig Extension
$flextype->view->addExtension(new YoutubeTwigExtension($flextype));
