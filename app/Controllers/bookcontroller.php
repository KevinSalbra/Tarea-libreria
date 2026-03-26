<?php

class BookController {

    private $blade;

    public function __construct($blade) {
        $this->blade = $blade;
    }

    // arreglos
    private function getBooks() {
        return [
            [
                "id" => 1,
                "image" => "/images/books/operatingSystemsConcepts.jpg",
                "title" => "Operating System Concepts",
                "edition" => "9th",
                "copyright" => 2012,
                "language" => "ENGLISH",
                "pages" => 976,
                "description" => "Operating System Concepts, now in its ninth edition, continues to provide a solid theoretical foundation for understanding operating systems. The ninth edition has been thoroughly updated to include contemporary examples of how operating systems function. The text includes content to bridge the gap between concepts and actual implementations. End-of-chapter problems, exercises, review questions, and programming exercises help to further reinforce important concepts. A new Virtual Machine provides interactive exercises to help engage students with the material.",
                "author" => "Abraham Silberschatz",
                "author_id" => 1,
                "publisher" => "John Wiley & Sons",
                "publisher_id" => 1
            ],
            [
                "id" => 2,
                "image" => "/images/books/DatabaseSystemsConcepts.jpg",
                "title" => "Database System Concepts",
                "edition" => "6th",
                "copyright" => 2010,
                "language" => "ENGLISH",
                "pages" => 1376,
                "description" => "Database System Concepts is a premier academic text covering database management fundamentals. It provides an intuitive, example-driven approach suitable for undergraduates and graduates, focusing on relational database design, SQL, and system implementation, with a new running university database example.",
                "author" => "Abraham Silberschatz",
                "author_id" => 1,
                "publisher" => "John Wiley & Sons",
                "publisher_id" => 1
            ],
            [
                "id" => 3,
                "image" => "/images/books/computernetworks.jpg",
                "title" => "Computer Networks",
                "edition" => "5th",
                "copyright" => 2010,
                "language" => "ENGLISH",
                "pages" => 960,
                "description" => "Computer Networks is a classic, comprehensive textbook covering networking principles from the physical layer up to applications. Using a top-down, structured approach, it highlights modern technologies like 802.11, Bluetooth, 3G, and IPv6, with a dedicated focus on network security and real-world examples.",
                "author" => "Andrew S. Tanenbaum",
                "author_id" => 2,
                "publisher" => "Pearson Education",
                "publisher_id" => 2
            ],
            [
                "id" => 4,
                "image" => "/images/books/ModernOperatingSystems.jpg",
                "title" => "Modern Operating Systems",
                "edition" => "4th",
                "copyright" => 2014,
                "language" => "ENGLISH",
                "pages" => 1136,
                "description" => "Modern Operating Systems is a comprehensive textbook covering fundamental and advanced OS concepts, including process management, memory, file systems, and security. This edition offers updated content on virtualization, cloud computing, and multi-core systems, featuring detailed case studies on Linux, Android, and Windows 8.",
                "author" => "Andrew S. Tanenbaum",
                "author_id" => 2,
                "publisher" => "Pearson Education",
                "publisher_id" => 2
            ]
        ];
    }

    // lista
    public function index() {
        $books = $this->getBooks();
        return $this->blade->run('books.index', compact('books'));
    }

    // detalle
    public function show($id) {
        $books = $this->getBooks();

        foreach ($books as $book) {
            if ($book['id'] == $id) {
                return $this->blade->run('books.viewmore', compact('book'));
            }
        }

        return "Libro no encontrado";
    }
}