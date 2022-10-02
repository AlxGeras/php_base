<?php

class Comment{
    private User $author;
    private Task $task;
    private string $text;

    public function __construct(
        User $author,
        Task $task,
        string $text
    ){
        $this->task= $task;
        $this->user = $author;
        $this->text = $text;
    }


    public function getAuthor(): User
    {
        return $this->author;
    }


    public function getTask(): Task
    {
        return $this->task;
    }

    public function getText(): string
    {
        return $this->text;
    }

    //Меняем текст комментария
    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

}