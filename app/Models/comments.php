<?php

namespace App\Models;

class comments
{
    private static $comments = [
        [
            'name' => 'John Doe',
            'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam corporis rem quaerat distinctio facilis ad sed, facere est, adipisci placeat repudiandae odio voluptate vitae laborum officiis neque nemo consequatur provident.'
        ],
        [
            'name' => 'Giyats_a',
            'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.'
        ]
    ];

    public static function all()
    {
        return self::$comments;
    }
}
