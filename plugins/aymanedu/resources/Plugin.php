<?php namespace Aymanedu\Resources;

use System\Classes\PluginBase;
class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return[
            'name'=>'Aymanedu',
            'description'=>'Providers company resources',
            'author'=>'Ayman Nagy',
            'icon'=>'icon-leaf',
        ];
    }
    public function registerComponents()
    {
        return [
            '\Aymanedu\Resources\Components\Links'=>'resourcesLinks', 
        ];
    }
    
}