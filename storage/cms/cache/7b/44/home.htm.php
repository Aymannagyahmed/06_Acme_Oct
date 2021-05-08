<?php 
class Cms6062559f10d56522962277_b8228cf44e034d2bd9a24f3e84e38373Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
