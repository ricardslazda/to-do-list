<?php
session_start();
class ActionModel extends Model{
    public function add(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($post['add'])) {
        $this->query('INSERT INTO posts (title,body,date) VALUES (:title, :body, :date)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':date', $post['date']);
            $this->execute();

            if($this->lastInsertId()) {
                header('Location:'.ROOT_URL);
            }
        }
    }
        public function edit(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $uri = $_SERVER['REQUEST_URI'];
        $id = explode("/", $uri)[4];
        $this->query('SELECT * FROM posts WHERE id = :id');
        $this->bind(':id', $id);
        $task = $this->single();
        $_SESSION['task'] = $task;
        if(isset($post['edit'])) {
            $this->query('UPDATE posts SET title = :title, body = :body, date = :date WHERE id = :id');
                $this->bind(':title', $post['title']);
                $this->bind(':body', $post['body']);
                $this->bind(':date', $post['date']);
                $this->bind(':id', $id);
                $this->execute();
                header('Location:'.ROOT_URL);
        };
    }
        public function delete(){
        $uri = $_SERVER['REQUEST_URI'];
        $id = explode("/", $uri)[4];
        $this->query('DELETE FROM posts WHERE id = :id');
        $this->bind(':id', $id);
        $this->execute();
        }
    }