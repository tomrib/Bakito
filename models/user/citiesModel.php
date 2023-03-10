<?php
class cities extends database{
    public int $id = 0;
    public string $postalCode = '';
    public string $city = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function getCitiesList(){
        $query = 'SELECT`id`,`postalCode`,`city` FROM `zvjj1_cities`;';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }
}