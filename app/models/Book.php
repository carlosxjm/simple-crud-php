<?php

namespace App\Models;

use App\Support\DB;

class Book
{
    private $connection;
    private $table = 'books';

    public function __construct()
    {
        $this->connection = DB::connect();
    }

    public function find($id)
    {
        $stmt = $this->connection->prepare("SELECT * FROM $this->table WHERE id = :id");
    	$stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function all()
    {
        $stmt = $this->connection->prepare("SELECT * FROM $this->table");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function save()
    {
        if (isset($book->id)) {
            return $this->update($book);
        }
        $stmt = $this->connection->prepare("INSERT INTO $table (title, author, synopsis) VALUES (:title, :author , :synopsis)");
        $stmt->bindParam(':title', $book->title);
        $stmt->bindParam(':author', $book->author);
        $stmt->bindParam(':synopsis', $book->synopsis);
        return $stmt->execute();
    }

    public function update()
    {
        if (!isset($book->id)) {
        	return false;
        }
        $stmt = $this->connection->prepare("UPDATE $this->table SET title = :title, author = :author, synopsis = :synopsis WHERE id = :id");
        $stmt->bindParam(':id', $book->id);
        $stmt->bindParam(':title', $book->title);
        $stmt->bindParam(':author', $book->author);
        $stmt->bindParam(':synopsis', $book->synopsis);
        return $stmt->execute();
    }
}