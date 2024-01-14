<?php
class TagModel
{
    private $tag;

    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    /** Method pour inserer les tags:
     * @param string $tag_name
     */
    public function insert($tag_name)
    {
        $this->tag->insert($tag_name);
    }

    public function gettag()
    {
        return $this->tag->getTag();
    }

    public function deleteTag($tagId)
    {
        $this->tag->deleteTag($tagId);
    }

    public function updateTag($tagId, $tag_name)
    {
        $this->tag->updateTag($tageId, $tag_name);
    }
}
