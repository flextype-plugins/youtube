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

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\Event\Event;

// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [youtube url="https://www.youtube.com/watch?v=iYnliHrcQyo"]
    Entries::shortcode()->addHandler('youtube', function(ShortcodeInterface $s) {
        return youtube($s->getParameter('url'),
                       ((null !== $s->getParameter('width')) ? $s->getParameter('width') : 560 ),
                       ((null !== $s->getParameter('height')) ? $s->getParameter('height') : 315 ));
    });
});


function youtube(string $url, int $width = 560, int $height = 315) : string
{
    return '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.substr($url, strpos($url, "=") + 1).'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
}
