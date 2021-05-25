<?php

class Node
{
    public $value;
    public $next = null;

    function __construct($value)
    {
        $this->value = $value;
    }

    public function getNext(): Node
    {
        return $this->next;
    }

    public function setNext(Node $node)
    {
        $this->next = $node;
    }
}

function pushData(Node &$parent_node, $value)
{
    $child_node = new Node($value);
    $parent_node->setNext($child_node);
    return $child_node;
}

function loop_size(Node $node): int
{
    $i = 0;
    while ($node) {
        if (isset($node->flag)) {
            return $i - ($node->flag - 1);
        } else {
            $node->flag = ++$i;
        }
        $node = $node->getNext();
    }
}

$head_node = new Node(1);
$snd_node = pushData($head_node, 2);
$head = pushData($snd_node, 3);
$head = pushData($head, 4);
$head->setNext($snd_node);

echo loop_size($head_node);
