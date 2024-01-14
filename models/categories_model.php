<?php
class CategorieModel
{
    private $categorie;

    public function __construct(Categorie $categorie)
    {
        $this->categorie = $categorie;
    }


    /** Method pour inserer les categories:
     * @param string $categorie_name
     */
    public function insert($categorie_name)
    {
        $this->categorie->insert($categorie_name);
    }


    public function getCategorie()
    {
        return $this->categorie->getCategorie();
    }



    public function deleteCategorie($categorieId)
    {
        $this->categorie->deleteCategorie($categorieId);
    }


    public function updateCategorie($categorieId, $categorie_name)
    {
        $this->categorie->updateCategorie($categorieId, $categorie_name);
    }
}
