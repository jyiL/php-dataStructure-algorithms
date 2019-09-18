<?php

declare(strict_types = 1);

namespace DataStructure\LinkedList;

class ListNode
{
    public $data = NULL;
    public $next = NULL;
    public $previous = NULL;

    public function __construct(string $data = NULL)
    {
        $this->data = $data;
        $this->previous = NULL;
        $this->next = NULL;
    }
}