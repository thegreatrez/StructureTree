# StructureTree
<i>
include 'tree.php';</br>

$Text = 'Structure Tree'.PHP_EOL;
$Data = ["one"=>["first"=>"First Data","secound"=>"Secound Data"]];

$tree = Tree($data);
$Text .= $tree;

print $Text;

</i>
