<?php
class book extends database
{
    public int $id = 0;
    public string $bookName = '';
    public string $tomeNumber = '';
    public string $description = '';
    public string $releaseDate = '';
    public string $cover = '';
    public string $price = '';
    public string $id_conditions = '';
    public string $id_editors = '';
    public string $id_languages = '';
    public string $id_authors = '';
    public string $id_categories = '';

    public function __construct()
    {
        parent::__construct();
    }
    public function getBookList()
    {
        $query = 'SELECT id,cover,bookName,tomeNumber,releaseDate 
    FROM zvjj1_mangabooks 
    GROUP BY zvjj1_mangabooks.id DESC;';
        $request = $this->db->query($query);
        return $request->fetchAll(PDO::FETCH_OBJ);
    }

    public function getckBookListById()
    {
        $query = "SELECT zvjj1_mangabooks.id,bookName,tomeNumber,description,DATE_FORMAT(releaseDate, '%d %b %Y') AS releaseDate,cover,price, 
    zvjj1_languages.languagesName, 
    zvjj1_conditions.conditionsName, 
    zvjj1_editors.editorsName, 
    zvjj1_authors.authorsName, 
    zvjj1_categories.catagorieName 
    FROM zvjj1_mangabooks 
    INNER JOIN zvjj1_languages ON zvjj1_mangabooks.id_languages = zvjj1_languages.id 
    INNER JOIN zvjj1_conditions ON zvjj1_mangabooks.id_conditions = zvjj1_conditions.id 
    INNER JOIN zvjj1_editors ON zvjj1_mangabooks.id_editors = zvjj1_editors.id 
    INNER JOIN zvjj1_authors ON zvjj1_mangabooks.id_authors = zvjj1_authors.id 
    INNER JOIN zvjj1_categories ON zvjj1_mangabooks.id_categories = zvjj1_categories.id
    WHERE zvjj1_mangabooks.id = :id;";
        $request = $this->db->prepare($query);
        $request->bindValue(':id', $this->id, PDO::PARAM_INT);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_OBJ);
    }

    public function checkBookList()
    {
        $query = "SELECT zvjj1_mangabooks.bookName
    FROM zvjj1_mangabooks 
    WHERE zvjj1_mangabooks.bookName = :name";
        $request = $this->db->query($query);
        $request->bindValue(':bookName', '%' . $this->bookName . '%', PDO::PARAM_INT);
        $request->execute();
        return $request->fetchAll(PDO::FETCH_OBJ);
    }

    public function addBook()
    {
        $query = 'INSERT INTO 
        zvjj1_mangabooks
        (bookName,tomeNumber,description,releaseDate,cover, price,id_conditions,id_editors,id_languages,id_authors,id_categories) 
        VALUES (:bookName,:tomeNumber,:description,:releaseDate,:cover,price,:id_conditions,:id_editors,:id_languages,:id_authors,:id_categories);';
    $request =$this->db->prepare($query);
    $request->bindValue(':bookName',$this->bookName,PDO::PARAM_STR);
    $request->bindValue(':tomeNumber',$this->tomeNumber,PDO::PARAM_STR);
    $request->bindValue(':description',$this->description,PDO::PARAM_STR);
    $request->bindValue(':releaseDate',$this->releaseDate,PDO::PARAM_STR);
    $request->bindValue(':cover',$this->cover,PDO::PARAM_STR);
    $request->bindValue(':price',$this->price,PDO::PARAM_INT);
    $request->bindValue(':id_conditions',$this->id_conditions,PDO::PARAM_INT);
    $request->bindValue(':id_editors',$this->id_editors,PDO::PARAM_INT);
    $request->bindValue(':id_languages',$this->id_languages,PDO::PARAM_INT);
    $request->bindValue(':id_authors',$this->id_authors,PDO::PARAM_INT);
    $request->bindValue(':id_authors',$this->id_authors,PDO::PARAM_INT);
    $request->bindValue(':id_categories',$this->id_categories,PDO::PARAM_INT);
    return $request->execute();
}
}
