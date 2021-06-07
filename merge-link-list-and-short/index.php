<?php

//  Definition for a singly-linked list.
class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

function createList(array $lst)
{
    $node = null;
    $temp_node = null;
    foreach ($lst as $item) {
        if (is_null($temp_node)) {
            $node = $temp_node = new ListNode($item);
        } else {
            $temp_node = $temp_node->next = new ListNode($item);
        }
    }
    return $node;
}

/**
 * @param  ListNode[]  $lists
 */
function mergeKLists($lists)
{
    $value_in_array = [];
    foreach ($lists as $list) {
        while ($list != null) {
            $value_in_array[] = $list->val;
            $list = $list->next;
        }
    }
    asort($value_in_array);
    $value_in_array = array_values($value_in_array);
    print_r($value_in_array);
    $node = $temp_node = null;
    if (!empty($value_in_array)) {
        $temp_node = $node = new ListNode($value_in_array[0]);
        unset($value_in_array[0]);
    }
    print_r($value_in_array);
    foreach ($value_in_array as $item) {
        $temp_node = $temp_node->next = new ListNode($item);
    }
    return $node;
}

echo '<pre>';

print_r(mergeKLists([createList([1]), createList([0])]));