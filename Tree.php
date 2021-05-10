<?php

class BinaryNode
{
    public $value;
    public $left = null;
    public $right = null;

    public function __construct($value)
    {
        $this->value = $value;
    }
}

class BinaryTree
{
    public $root;

//    public $run;

    public function __construct()
    {

        $this->root = null;

    }

    public function insert(int $int)
    {
        $node = new BinaryNode($int);

        if ($this->root === null) {
            $this->root = $node;

        } else {
            $this->insertNode($node, $this->root);

        }
    }

    private function insertNode(BinaryNode $node, &$rootSubtree)
    {
        if ($rootSubtree === null) {
            $rootSubtree = $node;
        } elseif ($rootSubtree->value < $node->value) {
            $this->insertNode($node, $rootSubtree->right);
        } else {
            $this->insertNode($node, $rootSubtree->left);
        }
    }

    public function passTree($node = null) // первое задание
    {

        if ($node == null) {
            $node = $this->root;
        }
//        echo $node->value; // nlr 5321047689

        if (!is_null($node->left)) {
            $this->passTree($node->left);
        }
        echo $node->value; // lnr 0123456789

        if (!is_null($node->right)) {
            $this->passTree($node->right);
        }
//        echo $node->value; // lrn 0124369875

    }


    public function delete(int $int)
    {
        if ($this->root === null) {
            throw new Exception("Дерево пустое");

        }

        $node = &$this->findNode($int, $this->root);

        if ($node) {
            $this->deleteNode($node);
        } else {
            echo "Число не найдено";
        }
    }

    private function &findNode(int $int, BinaryNode &$rootSubtree): ?BinaryNode
    {
        if ($rootSubtree === null || $rootSubtree->value == $int) {

            return $rootSubtree;
        }

        if ($rootSubtree->value > $int) {
            return $this->findNode($int, $rootSubtree->left);
        }
        return $this->findNode($int, $rootSubtree->right);

    }

    private function deleteNode(BinaryNode &$node)
    {
        if (is_null($node->right) && is_null($node->left)) {
            $node = null;
        } elseif (is_null($node->left)) {
            $node = $node->right;

        } elseif (is_null($node->right)) {
            $node = $node->left;
        } // [1 2 3 4 5] 7 [ 8 9 10]

        else {
            $maxNode = $this->getMax($node->left);
            $minNode = $this->getMin($node->right);
            $node->value = $maxNode->value;
            $this->deleteNode($maxNode);


//            if (is_null($node->right->left)) {
//                $node->right->left = $node->left;
//                $node = $node->right;
//            } else {
//                $node->value = $node->right->left->value;
//                $this->deleteNode($node->right->left);
        }
    }


    function getMax(BinaryNode $node)
    {
        if (!is_null($node->right)) {
            $this->getMax($node->right);
        } else {
            return $node;
        }
    }

    private
    function getMin(BinaryNode $node)
    {
        if (!is_null($node->left)) {
            $this->getMin($node->left);
        } else {
            return $node;
        }
    }
}


$tree = new BinaryTree();

//$tree->insert(5);
//$tree->insert(3);
//$tree->insert(4);
//$tree->insert(2);
//$tree->insert(1);
//$tree->insert(0);
//$tree->insert(7);
//$tree->insert(6);
//$tree->insert(8);
//$tree->insert(9);


$tree->insert(8);
$tree->insert(3);
$tree->insert(4);
$tree->insert(2);
$tree->insert(1);
$tree->insert(0);
$tree->insert(7);
$tree->insert(6);
$tree->insert(5);
$tree->insert(9);
$tree->insert(10);
$tree->insert(12);
$tree->insert(11);
$tree->insert(14);
$tree->insert(15);

//$tree2 = new BinaryTree();
//$tree2->insert(6);
//$tree2->insert(5);
//$tree2->insert(8);
//$tree2->insert(9);
//$tree2->insert(3);
//$tree2->insert(1);
//$tree2->insert(0);
//$tree2->insert(7);
//$tree2->insert(4);
//$tree2->insert(2);


$tree->delete(12);
//$tree->delete(9);
//$tree->delete(9);

//$tree->passTree();
print_r($tree);