<?php namespace Aymanedu\Resources\Components;

use Cms\Classes\ComponentBase;
//use October\Rain\Exception\ApplicationException;
use ApplicationException;
class Links extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'=>'Aymanedu',
            'description'=>'Displays resource links',
            
        ];
    }

    public function defineProperties()
    {
        return [
            'link1'=>[
                'title'=>'link 1',
                'description'=>'link 1 URL',
                'type'=>'string'
            ],
            'link2'=>[
                'title'=>'link 2',
                'description'=>'link 2 URL',
                'type'=>'string'
            ],
            'link3'=>[
                'title'=>'link 3',
                'description'=>'link 3 URL',
                'type'=>'string'
            ],
        ];
    }

    public function onRun()
    {
        $links=[$this->property('link1'),$this->property('link2'),$this->property('link3')];
        $this->page['links']=$links;
    }
}