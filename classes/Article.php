<?php

class Article extends Database
{
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        parent::__construct();
    }

    /** Class Method Inserer Les Article:
     * @param string $title
     * @param string $content
     * @param string $tags
     * @param string $categories
     */
    public function insert($title, $content, $tags, $categories)
    {
        $this->query("INSERT INTO $this->tableName (article_title, article_content, article_tags, article_categorie) VALUES (:title, :content, :tags, :categories)");
        $this->bind(':title', $title);
        $this->bind(':content', $content);
        $this->bind(':tags', $tags); // Corrected the typo here
        $this->bind(':categories', $categories);
        $this->execute();
    }

    /** Retrieves all articles from the database
     * @return array Associative array containing all articles
     */
    public function getAllArticles()
    {
        $this->query("SELECT * FROM $this->tableName ORDER BY create_at DESC LIMIT 5");
        $this->execute();
        return $this->resultSet();
    }

    public function getArticleById($articleId)
    {
        $this->query("SELECT * FROM $this->tableName WHERE id = :id");
        $this->bind(':id', $articleId);
        $this->execute();
        return $this->single();
    }

    public function updateArticle($articleId, $title, $content, $tags, $categories)
    {
        $this->query("UPDATE $this->tableName SET article_title = :title, article_content = :content, article_tags = :tags, article_categorie = :categories WHERE article_id = :id");
        $this->bind(':id', $articleId);
        $this->bind(':title', $title);
        $this->bind(':content', $content);
        $this->bind(':tags', $tags);
        $this->bind(':categories', $categories);
        $this->execute();
    }

    public function deleteArticle($articleId)
    {
        $this->query("DELETE FROM $this->tableName WHERE article_id  = :id");
        $this->bind(':id', $articleId);
        $this->execute();
    }
}
