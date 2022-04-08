<?php


class PostRepository
{
    public function getAllPost(){
        return (new Post())->getListPost([],"ORDER BY 'name'");
    }

}