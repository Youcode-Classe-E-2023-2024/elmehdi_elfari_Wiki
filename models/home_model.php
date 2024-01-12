<?php

class WikiModel
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
    public function deleteArticle($articleId)
    {
        $this->article->deleteArticle($articleId);
    }

    public function updateArticle($articleId, $title, $content, $tags, $categories)
    {
        $this->article->updateArticle($articleId, $title, $content, $tags, $categories);
    }
}
