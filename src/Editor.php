<?php

namespace Jxlwqq\Simditor;

use Encore\Admin\Form\Field;

class Editor extends Field
{
    protected $view = 'laravel-admin-simditor::editor';

    protected static $css = [
        'vendor/laravel-admin-ext/simditor/simditor-2.3.20/styles/simditor.css',
    ];

    protected static $js = [
        'vendor/laravel-admin-ext/simditor/simditor-2.3.20/scripts/module.js',
        'vendor/laravel-admin-ext/simditor/simditor-2.3.20/scripts/hotkeys.js',
        'vendor/laravel-admin-ext/simditor/simditor-2.3.20/scripts/uploader.js',
        'vendor/laravel-admin-ext/simditor/simditor-2.3.20/scripts/simditor.js',
    ];

    public function render()
    {
        $token = csrf_token();
        $config = json_encode((array)config('admin.extensions.simditor.config'));
        $this->script = <<<EOT
        var config = {$config}
        config['textarea'] = $('#{$this->id}')
        config['upload']['params'] = {_token: '{$token}'}
$(document).ready(function(){
      var editor = new Simditor(config);
 });
EOT;
        return parent::render();
    }
}
