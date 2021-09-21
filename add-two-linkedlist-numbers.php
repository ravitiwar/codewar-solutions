<?php

/**
 * Class ListNode
 * Leetcode Link
 * @link  https://leetcode.com/problems/add-two-numbers/submissions/
 */
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

class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $carry = 0;
        $list = null;
        $parent = null;
        while ($l1 || $l2) {
            $v1 = !is_null($l1) ? $l1->val : 0;
            $v2 = !is_null($l2) ? $l2->val : 0;
            $sum = $v1 + $v2 + $carry;
            if (!$list) {
                $parent = $list = new ListNode(($sum % 10));
            } else {
                $list = $list->next = new ListNode(($sum % 10));
            }
            $carry = (int)($sum / 10);
            $l1 = (!is_null($l1)) ? $l1->next : null;
            $l2 = (!is_null($l2)) ? $l2->next : null;
        }
        if ($carry > 0) {
            $list->next = new ListNode($carry);
        }
        return $parent;
    }
}

/**
 * Function for create linkedlist for test
 * @param array $ar
 * @return ListNode
 */
function createLinkList(array $ar): ListNode
{
    $parent = null;
    $node = null;
    for ($i = 0; $i < count($ar); $i++) {
        if (is_null($parent)) {
            $node = $parent = new ListNode($ar[$i]);
        } else {
            $node = $node->next = new ListNode($ar[$i]);
        }
    }
    return $parent;
}