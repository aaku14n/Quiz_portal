<?php 
$data= new database_inc('idiot');
$query_quiz_list = "Select * from `name of quiz` ";
$result_quiz_list = $data->r_query($query_quiz_list);
$result_insert_answer = $result_quiz_list;
?>