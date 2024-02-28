# StructureTree
```
include 'tree.php';

$Text = 'Structure Tree'.PHP_EOL;
$data = ["one"=>["first"=>"First Data Of One","secound"=>"Secound Data Of One"],"two"=>"One Data Of Two"];

$tree = Tree($data);
$Text .= $tree;

print $Text;

Result: 

Structure Tree
 ├ one: 
 ┊  ├ first: First Data Of One
 ┊  └ secound: Secound Data Of One
 └ two: One Data Of Two
```
