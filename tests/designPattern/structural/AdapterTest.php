<?php
/**
 * Created by PhpStorm.
 * User: jyl
 * Date: 2019/5/22
 * Time: 11:26 AM
 */
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use DesignPattern\Structural\Adapter\Book;
use DesignPattern\Structural\Adapter\EBookAdapter;
use DesignPattern\Structural\Adapter\Kindle;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }


    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}