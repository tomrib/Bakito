<?php
class civilities extends database
{
    public int $id = 0;
    public string $name = '';

    public function __construct()
    {
        parent::__construct();
    }
    // query = pas de marqueur nominatif
    public function getCivilitiesList()
    {
        $query = 'SELECT id, name
    FROM `zvjj1_civilities`;';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }
}
