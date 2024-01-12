<?php

class ArticleModel
{
    private $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /** Method pour inserer les articles:
     * @param string $title
     * @param string $content
     * @param string $tags
     * @param string $categories
     */
    public function insertArticle($title, $content, $tags, $categories)
    {
        $this->article->insert($title, $content, $tags, $categories);
    }
}
