<?php

class AuthorController {

    private $blade;

    public function __construct($blade) {
        $this->blade = $blade;
    }

    private function getAuthors() {
        return [
            [
                "id" => 1,
                "name" => "Abraham Silberschatz",
                "image" => "/images/authors/Abrahamsilberschatz.jpg",
                "nationality" => "Israeli / American",
                "birth_year" => 1952,
                "fields" => "Database Systems, Operating Systems",
                "biography" => "Avi Silberschatz (born in Haifa, Israel) is an Israeli computer scientist and researcher. He graduated in 1976 with a Ph.D. in Computer Science from the State University of New York (SUNY) at Stony Brook. He became the Sidney J. Weinberg Professor of Computer Science at Yale University, USA in 2005. He was the chair of the Computer Science department at Yale from 2005 to 2011. Prior to coming to Yale in 2003, he was the Vice President of the Information Sciences Research Center at Bell Labs. He previously held an endowed professorship at the University of Texas at Austin, where he taught until 1993."
            ],
            [
                "id" => 2,
                "name" => "Andrew S. Tanenbaum",
                "image" => "/images/authors/andrewtanenbaum1.jpg",
                "nationality" => "American / Dutch",
                "birth_year" => 1994,
                "fields" => "Distributed Computing, operating Systems",
                "biography" => "Andrew S. Tanenbaum is an computer scientist and professor emeritus at the Vrije Universiteit Amsterdam. Best known for creating the educational operating system MINIX and writing widely used computer science textbooks, his work, including the Minix operating system, influenced the development of Linux."
            ]
        ];
    }

    public function index() {
        $authors = $this->getAuthors();
        return $this->blade->run('authors.index', compact('authors'));
    }

    public function show($id) {
    $authors = $this->getAuthors();
    $books = $this->getBooks();

    foreach ($authors as $author) {
        if ($author['id'] == $id) {

            // filtra libros del autor
            $authorBooks = [];

            foreach ($books as $book) {
                if ($book['author_id'] == $id) {
                    $authorBooks[] = $book;
                }
            }

            // envia libros a la vista
            return $this->blade->run('authors.viewmore', [
                'author' => $author,
                'books' => $authorBooks
            ]);
        }
    }

    return "Autor no encontrado";
    }

    private function getBooks() {
    return [
        ["id"=>1,"title"=>"Operating System Concepts","author_id"=>1],
        ["id"=>2,"title"=>"Database System Concepts","author_id"=>1],
        ["id"=>3,"title"=>"Computer Networks","author_id"=>2],
        ["id"=>4,"title"=>"Modern Operating Systems","author_id"=>2],
    ];
    }

}