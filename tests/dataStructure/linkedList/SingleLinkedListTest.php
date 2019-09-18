<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use DataStructure\LinkedList\SingleLinkedList;

class SingleLinkedListTest extends TestCase
{
    /**
     * init
     *
     * @return SingleLinkedList
     */
    public function testInit()
    {
        $linkedList = new SingleLinkedList('header');

        $this->assertInstanceOf(SingleLinkedList::class, $linkedList);

        return $linkedList;
    }

    /**
     * @depends testInit
     *
     * @param SingleLinkedList $linkedList
     *
     * @return SingleLinkedList
     */
    public function testInsert($linkedList)
    {
        $linkedList->insert('header', 'China');
        $linkedList->insert('China', 'USA');
        $linkedList->insert('USA','England');
        $linkedList->insert('England','Australia');

        $this->assertEquals($linkedList->findPrevious('China')->data, 'header');
        $this->assertEquals($linkedList->findPrevious('USA')->data, 'China');
        $this->assertEquals($linkedList->findPrevious('England')->data, 'USA');
        $this->assertEquals($linkedList->findPrevious('Australia')->data, 'England');

        return $linkedList;
    }

    /**
     * @depends testInsert
     *
     * @param SingleLinkedList $linkedList
     */
    public function testDelete($linkedList)
    {
        $linkedList->delete('USA');

        var_dump($linkedList->find('USA'));
        exit;
    }
}