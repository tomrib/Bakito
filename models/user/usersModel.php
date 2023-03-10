<?php
class users extends database{
    public int $id = 0;
    public string $lastname = '';
    public string $firstname = '';
    public string $email = '';
    public string $address = '';
    public string $password = '';
    public string $reference = '';
    public string $qrCode = '';
    public string $points = '';
    public int $id_civilities = 0;
    public int $id_cities = 0;
    public int $id_useradmin = 0;

    public function __construct()
    {
        parent::__construct();
    }

    public function addUser(){
        $query = 'INSERT INTO `'. $this->prefix .'users` (`lastname`, `firstname`, `email`, `address`, `password`, `reference`,`id_civilities`,`id_cities`,`id_useradmin`) 
        VALUES (:lastname,:firstname,:email,:address,:password,:reference,:id_civilities,:id_cities,1);';
        $request = $this->db->prepare($query);
        $request->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $request->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $request->bindValue(':email', $this->email, PDO::PARAM_STR);
        $request->bindValue(':address', $this->address, PDO::PARAM_STR);
        $request->bindValue(':password', $this->password, PDO::PARAM_STR);
        $request->bindValue(':reference', uniqid(), PDO::PARAM_STR);
        $request->bindValue(':id_civilities', $this->id_civilities, PDO::PARAM_INT);
        $request->bindValue(':id_cities', $this->id_cities, PDO::PARAM_INT);

        return $request->execute();
    }

    public function checkIfUserExists($column)
    {
        $query = 'SELECT count(' . $column . ') 
        FROM `' . $this->prefix . 'users` 
        WHERE ' . $column . ' = :' . $column;
        $request = $this->db->prepare($query);
        $request->bindValue(':' . $column, $this->$column, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_COLUMN);
    }

    public function getPassword()
    {
        $query = 'SELECT password 
        FROM `' . $this->prefix . 'users` 
        WHERE email = :email';
        $request = $this->db->prepare($query);
        $request->bindValue(':email', $this->email, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_COLUMN);
    }

    public function getIds()
    {
        $query = 'SELECT `id`,`id_useradmin`
        FROM `' . $this->prefix . 'users` 
        WHERE email = :email';
        $request = $this->db->prepare($query);
        $request->bindValue(':email', $this->email, PDO::PARAM_STR);
        $request->execute();
        return $request->fetch(PDO::FETCH_ASSOC);
    }
}
