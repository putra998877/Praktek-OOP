<?php
include_once'book.php';

class model {
    public function getData()
    {
        return array(
            new book('One Piece vl 1080','Eichiro Oda','Gramedia','2020'),
            new book('Pemrograman Web Laravel','Bagoes','Gramedia','2022'),
            new book('Pemrograman Python','Agus','Gramedia','2021'),
            new book('Pemrograman Framework','Putra','Gramedia','2023')
        );
    }
}
?>