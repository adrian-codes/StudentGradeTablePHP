<?php
$students = [
    ['name'=>'George Takei', 'Class'=>'Warp Physics', 'Grade'=>75],
    ['name'=>'Leonard Nimoy', 'Class'=>'Anger Management', 'Grade'=>98],
    ['name'=>'William Shatner', 'Class'=>'Ethics & the Chain of Command', 'Grade'=>69],
    ['name'=>'James Doohan', 'Class'=>'Warp Physics', 'Grade'=>92],
    ['name'=>'George Takei', 'Class'=>'Piloting', 'Grade'=>95],
    ['name'=>'Leonard Nimoy', 'Class'=>'Warp Physics', 'Grade'=>35],
    ['name'=>'Deforest Kelley', 'Class'=>'Botony', 'Grade'=>85],
    ['name'=>'Nichelle Nichols', 'Class'=>'Communications', 'Grade'=>100],
    ['name'=>'Zoe Saldana', 'Class'=>'Communications', 'Grade'=>35],
    ['name'=>'William Shatner', 'Class'=>'Trible Care', 'Grade'=>100],
];

$highestGrade = 0;
$highestIndex = 0;
$lowestGrade = 99999999;
$lowestIndex = 0;

    for($i = 0; $i < count($students); $i++){
        
        if($students[$i]['Grade'] > $highestGrade) {
            $highestIndex = $students[$i];
            $highestGrade = $students[$i]['Grade'];
    }
    }
    for($i = 0; $i < count($students); $i++){
        if($students[$i]['Grade'] < $lowestGrade) {
            $lowestIndex = $students[$i];
            $lowestGrade = $students[$i]['Grade'];
    }
}
?>



<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Student Grade Table</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table id="student_grade_table">
        <tr>
            <td>Name</td>
            <td>Class</td>
            <td>Grade</td>
        </tr>
        <?php 
         $student_counter = 0;
         $student_grade_total = 0;
        for($i = 0; $i < count($students); $i++) { 
            
            $class ='';
            if($students[$i]['Grade'] == $highestGrade){
                $class = 'highestRow';   
            } 
            
            else if($students[$i]['Grade'] == $lowestGrade){
                $class = 'lowestRow';
            }
                echo "<tr class=".$class."> 
                        <td>".$students[$i][ 'name']."</td>
                        <td>".$students[$i][ 'Class']."</td>
                        <td>".$students[$i][ 'Grade']."</td>
                        <td id='btn'><button>DELETE</button></td>
                     </tr>";
            $student_grade_total += $students[$i]['Grade'];
            }
            $student_average = $student_grade_total / count($students);

        
        ?>
        <tr>
            <td>&nbsp;</td>
            <td>Average:</td>
            <td><?php echo $student_average?></td>
        </tr>
    
    </table>
</body>
</html>