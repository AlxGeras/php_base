<?php

class Task{

    private string $description;
    private User $user;
    private TaskService $taskservice;
    private ?DateTimeInterface $dateCreated = null;
    private ?DateTimeInterface $dateUpdated = null;
    private ?DateTimeInterface $dateDone = null;
    private ?bool $isDone = false;
    private Array $comments = [];


    public function __construct(
        string $description,
        User $user

    ){
        $this->description= $description;
        $this->user = $user;
        $this->dateCreated = $dateCreated ?? new DateTime();
        $this->dateUpdated = $dateUpdated ?? new DateTime();
    }

    public  function markAsDone(): void
    {
        $this->isDone = true;
        $this->dateDone =  new DateTime();
        $this->dateUpdated =  new DateTime();
    }
    public function setComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->dateUpdated =  new DateTime();
        $this->description = $description;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    //Меням ответственного
    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    public function getDateDone(): ?DateTimeInterface
    {
        return $this->dateDone;
    }

    public function getIsDone(): ?bool
    {
        return $this->isDone;
    }

}