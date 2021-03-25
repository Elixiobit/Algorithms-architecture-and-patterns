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
//        $this->run = [];
    }


    public function insert(int $int)
    {
        $node = new BinaryNode($int);

        if ($this->root === null) {
            $this->root = $node;

        } else {
            $this->insertNode($node, $this->root);
//            echo $this->root->value;
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

    public function passTree($node = null)
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
//            throw new Exception("Дерево пустое");
            echo "Дерево пустое";
        }

        $node = &$this->findNode($int, $this->root);

        if ($node) {
            $this->deleteNode($node);
        } else {
            echo "Число не найдено";
        }
    }

    private function &findNode(int $int, ?BinaryNode &$rootSubtree): ?BinaryNode
    {
        if ($rootSubtree === null || $rootSubtree->value == $int) {

            return $rootSubtree;
        }

        if ($rootSubtree->value > $int) {

            return $this->findNode($int, $rootSubtree->left);
        }
        return $this->findNode($int, $rootSubtree->right);

    }

    private function deleteNode(BinaryNode $node)
    {
        if (is_null($node->right) && is_null($node->left)) {
            echo '2323';
            $node = null;
        } elseif (is_null($node->left)) {
            $node = $node->right;

        } elseif (is_null($node->right)) {
            $node = $node->left;
        } // [1 2 3 4 5] 7 [ 8 9 10]

        else {
            if (is_null($node->right->left)) {
                $node = $node->left;
            } else {
                $node->value = $node->right->left->value;
                $this->deleteNode($node->right->left);
            }
        }

    }
}


$tree = new BinaryTree();

$tree->insert(8);
$tree->insert(5);
$tree->insert(3);
$tree->insert(4);
$tree->insert(2);
$tree->insert(1);
$tree->insert(0);
$tree->insert(7);
$tree->insert(6);
$tree->insert(8);
$tree->insert(9);


//$tree->delete(0);

$tree->passTree();
print_r($tree);