 <?php
 $path=$_SERVER['DOCUMENT_ROOT'];
 require_once $path."/pro1/db/db.php";
 $dbo=new Database();
 $c="create table student
 (
    id int auto_increment primary key,
    roll_no varchar(20) unique,
    name varchar(50)
 )";
$s=$dbo->conn->prepare($c);
try{ 
$s->execute();
echo("<br>student created");
    }
catch(PDOException $o)
{ 
echo("<br>student not created"); 
}


$c="insert into student(id,roll_no,name)values(1,'9100','thiru'),(2,'9101','veera')";
 
$s=$dbo->conn->prepare($c);
try{ 
    $s->execute();
    
        }
catch(PDOException $o)
    {
    echo("<br>dulicate entry"); 
    }
    
    
    ?>