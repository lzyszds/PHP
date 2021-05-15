<?php
//使用foreach遍历3维出数组，以表格的形式输出
$wage=array(
"市场部"=>array(
array(1,"高某","市场部经理",50000),
array(2,"洛某","职员",5000),
array(3,"峰某","职员",6000)
),
"财务部"=>array(
array(1,"李某","财务部经理",10000),
array(2,"钱某","职员",2000),
array(3,"吴某","职员",3000) 

),
"产品部"=>array(
array(1,"周某","财务部经理",20000),
array(2,"赵某","职员",7000),
array(3,"孙某","职员",8000) 
)
);


foreach($wage as $sector => $table){
echo "<table width='800' align='center' border='10'>";
echo "<caption><h2>{$sector} 10月份工资表</h2></caption>";
echo "<tr bgcolor='#dddddd'>";
echo "<th>编号</th>";
echo "<th>姓名</th>";
echo "<th>职位</th>";
echo "<th>工资</th>";
echo "</tr>";
foreach($table as $row){
echo "<tr align='center'>";
foreach($row as $col){
echo "<td>{$col}</td>";
}
echo "</tr>";
}
echo "</table><br>";
}

