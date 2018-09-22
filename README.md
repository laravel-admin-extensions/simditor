# Simditor extension for laravel-admin


这是一个 `laravel-admin` 扩展，用来将 [Simditor](https://github.com/mycolorway/simditor) 集成进 `laravel-admin` 的表单中。

## 截图

<img alt="simditor" src="https://user-images.githubusercontent.com/2421068/45915071-0e9c8f00-be81-11e8-94b5-8094113b71f1.png">

## 安装

```bash
composer require jxlwqq/simditor

php artisan vendor:publish --tag=laravel-admin-simditor
```

## 配置

在`config/admin.php`文件的`extensions`，加上属于这个扩展的一些配置
```php

'extensions' => [
    'simditor' => [
        // 如果要关掉这个扩展，设置为false
        'enable' => true,
        // 编辑器的配置
        'config' => [
            'upload' => [
                'url' => '/admin/api/upload', # example api route: admin/api/upload
                'fileKey' => 'upload_file',
                'connectionCount' => 3,
                'leaveConfirm' => 'Uploading is in progress, are you sure to leave this page?'
            ],
            'tabIndent' => true,
            'toolbar' => ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent', 'alignment'],
            'toolbarFloat' => true,
            'toolbarFloatOffset' => 0,
            'toolbarHidden' => false,
            'pasteImage' => true,
            'cleanPaste' => false,
        ]
    ]
]
```

编辑器的配置可以到 [Simditor 文档](https://simditor.tower.im/docs/doc-usage.html) 找到。

## 使用

在 form 表单中使用它：
```php
$form->editor('content');
```

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
