<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CustomModel{
    
    protected $db;

    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
        
    }

    function all(){
        return $this->db->table('posts')->get()->getResult();
    }

    function where()
    {
        return $this->db->table('posts')
                        ->where(['post_id >' => 20])
                        ->where(['post_id <' => 25])
                        ->where(['post_id !=' => 21])
                        ->orderBy('post_id', 'DESC')
                        ->get()->getRow();
    }
    
    function join(){
        return $this->db->table('posts')
                 ->where('post_id >', 50)
                 ->where('post_id <', 60)
                 ->join('users', 'posts.post_author = users.user_id')
                 ->get()
                 ->getResult();

    }

    function like(){
        return $this->db->table('posts')
            ->like("post_title", "end", "both")
            ->join('users', 'posts.post_author = users.user_id')
            ->get()
            ->getResult();
    }

    function grouping()
    {
        $emails = ['fmckenzie@example.org', 'ines.schoen@example.org', 'lebsack.zander@example.net'];
        return $this->db->table('posts')
                    ->groupStart()
                    ->where(['post_id >' => '20', 'post_created_at <' => '1990-01-01 00:00:00'])
                    ->groupEnd()
                    ->orWhereIn('email', $emails)
                    ->join("users", "posts.post_author = users.user_id")
                    ->limit(5, 4)
                    ->get()
                    ->getResult();
    }

    function getPosts(){
        $builder = $this->db->table('posts');
        $builder->join('users', 'users.user_id = posts.post_author');
        $posts = $builder->get()->getResult();
        return $posts;
    }
}
