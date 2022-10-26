<?php

class Dog {
    public $name;
    public $likes;
    public $owner;

    public function __construct(
        $name,
        $likes,
        $owner
    )
    {
        $this->name = $name;
        $this->likes = $likes;
        $this->owner = $owner;
    }

    public function dogLikes() {
        echo $this->name . " " . "likes" . " " . $this->likes;
    }

}

$roxy = new Dog("Roxy", "chicken", "Karen");
$roxy->dogLikes();