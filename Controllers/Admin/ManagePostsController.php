<?php
require_once('Controllers/Controller.php');
require_once ('Models/User.php');
require_once ('Repositories/PostRepository.php');
require_once ('Models/Post.php');

class ManagePostsController extends Controller{

    protected $repository;
    public function __construct(){
        parent::__construct();
        $this->repository = new PostRepository();
    }

    public function index(){
        $posts = $this->repository->getAllPost();
        return $this->view('admin/manage_posts/index', compact('posts'));
    }

//    public function edit(){
//        return $this->view('admin/manage_posts/edit');
//    }
//
//    public function create(){
//        return $this->view('admin/manage_posts/create');
//    }
//    public function detail(){
//        return $this->view('admin/manage_posts/detail');
//    }

}
