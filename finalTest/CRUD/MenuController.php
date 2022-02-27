<?php
require_once '../CRUD/connectObject.php';

class MenuController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from ardi');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO ardi (Name, Surname, Username, Email, Password)
        VALUES (:name, :surname, :username, :email, :password)');

        $query->bindParam(':name', $request['name']);
        $query->bindParam(':surname', $request['surname']);
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':password', $request['password']);
        $query->execute();

        return header('Location:display.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from ardi WHERE ID = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE ardi SET Name = :name,
        Surname = :surname, Username = :username, Email = :email, Password = :password WHERE ID = :id');
        $query->bindParam(':name', $request['name']);
        $query->bindParam(':surname', $request['surname']);
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':password', $request['password']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: display.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from ardi WHERE ID=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: display.php');
    }
}
?>