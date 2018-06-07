<?php  
  include 'DB.class.php';  
  $db=new DB('127.0.0.1','root','root');  
  $arr=$_POST;  
  $res=$db->add('message',$arr);  
  if($res){  
    echo "<script>alert('添加成功');location.href='show.php'</script>";  
  }else{  
    echo "<script>alert('添加失败');location.href='add.php'</script>";  
  }  
?>  








