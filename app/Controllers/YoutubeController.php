<?php

namespace Flextype;

class YoutubeController extends Controller {
	public function youtube(string $url, int $width = 560, int $height = 315) : string
	{
		return '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.substr($url, strpos($url, "=") + 1).'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
	}
}
