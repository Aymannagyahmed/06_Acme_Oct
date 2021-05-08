<?php 
class Cms6062562ad1297413398335_c797d8c0a1a98e02db47b0c31c64c860Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
