<?php


namespace Flextype;

use Thunder\Shortcode\ShortcodeFacade;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Shortcode: [youtube url="https://www.youtube.com/watch?v=iYnliHrcQyo"]
$flextype['shortcodes']->addHandler('youtube', function (ShortcodeInterface $s) use ($flextype) {
    return $flextype->YoutubeController->youtube($s->getParameter('url'),
                   ((null !== $s->getParameter('width')) ? $s->getParameter('width') : 560 ),
                   ((null !== $s->getParameter('height')) ? $s->getParameter('height') : 315 ));
});