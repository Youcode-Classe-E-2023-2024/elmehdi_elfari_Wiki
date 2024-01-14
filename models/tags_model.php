<?php
class TagModel
{
    private $tag;

    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function insert($tag_name)
    {
        $this->tag->insert($tag_name);
    }

    public function getTag()
    {
        return $this->tag->getTag();
    }

    public function deleteTags($tagId)
    {
        $this->tag->deleteTags($tagId);
    }

    public function updateTags($tagId, $tag_name)
    {
        $this->tag->updateTags($tagId, $tag_name);
    }
}
