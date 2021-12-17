<?php

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val  = $val;
        $this->next = $next;
    }
}

//$list = [4,2, 1, 3];
$list = [2, 1, 3];
$node = $main = new ListNode(4);
foreach ($list as $value) {
    $node = $node->next = new ListNode($value);
}


function sortList($head)
{
    $current  = $head;
    $previous = null;

    while ($current != null) {
        $next          = $current->next;
        $current->next = $previous;
        $previous      = $current;
        $current = $next;
    }
    echo '<pre>';
    print_r($previous);
}

sortList($main);