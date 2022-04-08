<?php
require_once('Models/Model.php');

class Post extends Model {
    protected $table = 'post';

    protected $attributes = [
        'title',
        'content',
        'id_create',
        'id_lastCreate',
        'link'
    ];

    public function __construct($data = [])
    {
        parent::__construct($data);
    }



}
