<?php
class dashboardModel
{
    private $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function getAllArticles()
    {
        return $this->article->countAllArticles();
    }
}
