<?php 
class Cms6063c8da1a2e6136428600_6c31610dfed46ff1ad1af9aab66cbbf5Class extends Cms\Classes\PageCode
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
