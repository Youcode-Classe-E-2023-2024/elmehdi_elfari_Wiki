<?php

class Article extends Database
{

    /** Class Method Inserer Les Article:
     * @param string $title
     * @param string $content
     * @param string $tags
     * @param string $categories
     */
    public function insert($title, $content, $tags, $categories)
    {
        $sql = "INSERT INTO articles (article_title, article_content, article_tags, article_categorie) VALUES (:title, :content, :tags, :categories)";
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':tags', $tags);
        $stmt->bindParam(':categories', $categories);
        $stmt->execute();
    }
}
