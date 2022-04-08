<?php

class CategoryRepository
{
    public function getAllCategory(){
        return (new Category())->getListCategory([],"ORDER BY 'name'");
    }

    public function updateCategory($category, $data){
        $dataUpdate = array(
            'name'    => isset($data['name']) ? $data['name'] : $category->name,
        );
//        dd($dataUpdate);
        $category->update($dataUpdate);
        return $category;
    }

    public function createCategory($data){
        $dataCreate = [
            'name'    => isset($data['name']) ? $data['name'] : '',
        ];

//        dd($dataCreate);
        return (new Category())->create($dataCreate);
    }

}