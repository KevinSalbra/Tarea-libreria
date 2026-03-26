<?php

class PublisherController {

    private $blade;

    public function __construct($blade) {
        $this->blade = $blade;
    }

    private function getPublishers() {
        return [
            [
                "id" => 1,
                "name" => "John Wiley & Sons",
                "image" => "/images/publishers/john-wiley-sons-ltd.svg",
                "country" => "United States",
                "foundation_year" => 1807,
                "genre" => "Academic",
                "history" => "John Wiley & Sons, Inc., commonly known as Wiley, is an American multinational publishing company founded in 1807 that focuses on academic publishing and instructional materials. The company produces books, journals, and encyclopedias, in print and electronically, as well as online products and services,training materials, and educational materials for undergraduate, graduate, and continuing education students."
            ],
            [
                "id" => 2,
                "name" => "Pearson Education",
                "image" => "/images/publishers/pearsonlogo.png",
                "country" => "United Kingdom",
                "foundation_year" => 1998,
                "genre" => "Academic",
                "history" => "Pearson Education, rebranded as Pearson in 2011, is a global education company founded in 1998 by combining Addison-Wesley Longman with Simon & Schuster’s education business. Initially a 19th-century construction firm, Pearson transitioned into media before becoming the world's largest education publisher by the 1990s, focusing on digital learning, textbooks, and assessment. "
            ]
        ];
    }

    private function getBooks() {
        return [
            ["id"=>1,"title"=>"Operating System Concepts","publisher_id"=>1],
            ["id"=>2,"title"=>"Database System Concepts","publisher_id"=>1],
            ["id"=>3,"title"=>"Computer Networks","publisher_id"=>2],
            ["id"=>4,"title"=>"Modern Operating Systems","publisher_id"=>2],
        ];
    }

    public function index() {
        $publishers = $this->getPublishers();
        return $this->blade->run('publishers.index', compact('publishers'));
    }

    public function show($id) {
        $publishers = $this->getPublishers();
        $books = $this->getBooks();

        foreach ($publishers as $publisher) {
            if ($publisher['id'] == $id) {

                $publisherBooks = [];

                foreach ($books as $book) {
                    if ($book['publisher_id'] == $id) {
                        $publisherBooks[] = $book;
                    }
                }

                return $this->blade->run('publishers.viewmore', [
                    'publisher' => $publisher,
                    'books' => $publisherBooks
                ]);
            }
        }

        return "Editorial no encontrada";
    }
}