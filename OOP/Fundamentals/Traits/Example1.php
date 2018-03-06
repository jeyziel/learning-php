<?php 

interface Sociable
{
    public function share(string $item);
    public function like();
}

trait Shareable
{
    public function share( string $item )
    {
         printf("%s \n",$item);
    }   
}

class Post implements Sociable
{
    use Shareable;

    public function like()
    {

    }
}



$post = new Post();
$post->share('compartilhando foto');