<?php namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CustomModel;

class Blog extends BaseController{
    public function index(){
        $db = db_connect();
        $model = new CustomModel($db);
        echo '<pre>';
        print_r($model->getPosts());
        echo '<pre>';


        $data = [
            'meta_title' => 'Jesus Christ',
            'title' => 'This is a Blog'
        ];

        $data['posts'] = [['post_title' => 'Jesus Christ',
            'post_content' => 'Jesus Christ',
            'post_id' => 3]];

        return view('blog', $data);
    }
    public function post($id)
    {
        $model = new BlogModel();
        $post = $model->find($id);
        if($post){
            $data = [
                'meta_title' => $post['post_title'],
                'title' => $post['post_title'],
                'post_title' => $post['post_title'],
                'post_content' => $post['post_content'],
                'post_id' => $id
            ];
        }else{
            $data = [
                'meta_title' => 'Post Not Found',
                'title' => 'Post Not Found',
                'post_title' => 'Post Not Found',
                'post_content' => 'Post Not Found',
                'post_id' => 0
            ];
        }
        return view('single_post', $data);
    }

    public function new()
    {
        $data = [
            'meta_title' => 'New Post',
            'title' => 'Create New Post'
        ];

        if($this->request->getMethod() == 'post'){
            $model = new BlogModel();
            $model->save($_POST);
        }
        return view('new_post', $data);
    }

    public function delete($id){
        $model = new BlogModel();
        $post = $model->find($id);
        if($post){
            $model->delete($id);
            return redirect()->to('/blog');
        }
    }

    public function edit($id){
        $model = new BlogModel();
        $post = $model->find($id);
        $data = [
            'meta_title' => $post['post_title'],
            'title' => $post['post_title'],
            'post_title' => $post['post_title'],
            'post_content' => $post['post_content'],
            'post_id' => $id
        ];

        if($this->request->getMethod() == 'post'){
            $model = new BlogModel();
            $_POST['post_id'] = $id;
            $model->save($_POST);
            $post = $model->find($id);
        }

        $data = [
            'meta_title' => $post['post_title'],
            'title' => $post['post_title'],
            'post_title' => $post['post_title'],
            'post_content' => $post['post_content'],
            'post_id' => $id
        ];


        return view('edit_post', $data);


    }
}