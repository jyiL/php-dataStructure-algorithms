<?php

declare(strict_types = 1);

namespace DataStructure\LinkedList;

use DataStructure\LinkedList\ListNode;
use phpDocumentor\Reflection\Types\Object_;

class SingleLinkedList
{
    private $header;    // header 头节点

    public function __construct(string $data)
    {
        $this->header = new ListNode($data);
    }

    /**
     * find node 查找节点
     *
     * @param string $item
     *
     * @return mixed
     */
    public function find($item)
    {
        $current = $this->header;

        if ($item === 'USA') {
            var_dump($current);
        }
        while ($current->data !== $item) {
            $current = $current->next;
        }

        return $current;
    }

    /**
     * insert 插入节点
     *
     * @param string $item
     * @param string $new
     *
     * @return bool
     */
    public function insert($item, $new) : bool
    {
        $newNode = new ListNode($new);

        $current = $this->find($item);
        $newNode->next = $current->next;
        $current->next = $newNode;

        return true;
    }

    /**
     * update 更新节点
     *
     * @param string $old
     * @param string $new
     *
     * @return mixed
     */
    public function update($old, $new) : mixed
    {
        $current = $this->header;

        if ($current->next == null) {
            echo "ListNode IS NULL！";
            return false;
        }

        while ($current->next != null) {
            if ($current->data == $old) {
                break;
            }
            $current = $current->next;
        }

        return $current->data = $new;
    }

    /**
     * find previous 查找待删除节点的前一个节点
     *
     * @param string $item
     *
     * @return object
     */
    public function findPrevious($item) : object
    {
        $current = $this->header;

        while ($current->next != null && $current->next->data != $item) {
            $current = $current->next;
        }

        return $current;
    }

    /**
     * delete 从链表中删除一个节点
     *
     * @param string $item
     */
    public function delete($item)
    {
        $previous = $this->findPrevious($item);

        if ($previous->next != null) {
            $previous->next = $previous->next->next;
        }
    }

    /**
     * remove findPrevious和delete的整合
     *
     * @param string $item
     */
    public function remove($item)
    {
        $current = $this->header;
        while ($current->next != null && $current->next->data != $item) {
            $current = $current->next;
        }
        if ($current->next != null) {
            $current->next = $current->next->next;
        }
    }

    /**
     * clear 清空链表
     */
    public function clear()
    {
        $this->header = null;
    }

    /**
     * display 显示链表中的元素
     */
    public function display()
    {
        $current = $this->header;

        if ($current->next == null) {
            echo "ListNode IS NULL！";
            return false;
        }

        while ($current->next != null) {
            echo $current->next->data . PHP_EOL;
            $current = $current->next;
        }
    }
}