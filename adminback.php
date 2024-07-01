<?php

include 'connectdb.php';
if(isset($_POST["addemp"]))
{
    $id=$_POST["uid"];
    $emp=$_POST["empname"];
    $query="update user set employee=? where id=?";
    $result=$con->prepare($query);
    $result->bind_param("si",$emp,$id);
    $result->execute();
    if($result->affected_rows>0)
    {
        $arr["msg"]="Employee Added Successfully";
    }
    else
    {
        $arr["msg"]=" Employee Not Added SUccessfully";
    }
    echo json_encode($arr);
}

if(isset($_POST["fetchuser"]))
{
    $query="select * from user order by added asc ,submitted_work desc";
    $result=$con->prepare($query);
    $result->execute();
    $result->bind_result($id,$name,$pass,$work,$emp,$add);
    $result->store_result();
    if($result->num_rows>0)
    {
        $arr["table"]="<thead><tr><th scope='col'>Sr No.</th><th scope='col'>Username</th><th scope='col'>Password</th><th scope='col'>Added On</th><th scope='col'>Work</th><th scope='col'>Add Employee</th><th scope='col'></tr></thead><tbody>";
        
        
        $i=1;
        while($result->fetch())
        {
            if(!$emp){
            $arr["table"].="<tr><td>".$i."</td><td>".$name."</td><td>".$pass."</td><td>".$add."</td><td>".$work."</td><td><input type='text' id='addem".$id."' name='addem' /><button class='btn btn-primary' onclick='return addemp(addem".$id.".value,".$id.");'>Add</button></td><td><button class='btn btn-danger' onclick='deleteuser(".$id.");'>Delete</button></td>
            </tr>";
            }
            else{
                $arr["table"].="<tr><td>".$i."</td><td>".$name."</td><td>".$pass."</td><td>".$add."</td><td>".$work."</td><td>".$emp."</td><td><button class='btn btn-danger' onclick='deleteuser(".$id.");'>Delete</button></td>
            </tr>";
            }
            
            $i++;
        }
        $arr["table"].="</tbody>";
        $arr["msg"]="success";
    }
    else
    {
        $arr["msg"]="No User Found";
    }
    echo json_encode($arr);
}
if(isset($_POST["adduser"]))
{
    $u=$_POST["un"];
    $p=$_POST["ps"];
    $d=date("Y-m-d");
    echo "$d";
    $query="insert into user(username,password,added) values(?,?,?)";
    $result=$con->prepare($query,);
    $result->bind_param("sss",$u,$p,$d);
    $result->execute();
    if($result->affected_rows>0)
    {
        $arr["msg"]="User Added Successfully";
    }
    else
    {
        $arr["msg"]=" UserName Already Exist";
    }
    echo json_encode($arr);
}
if(isset($_POST["deleteuser"]))
{
    $id=$_POST["uid"];
    $query="delete from user where id=?";
    $result=$con->prepare($query);
    $result->bind_param("i",$id);
    $result->execute();
    if($result->affected_rows>0)
    {
        $arr["msg"]="User Deleted Successfully";
    }
    else
    {
        $arr["msg"]=" User Not Deleted SUccessfully";
    }
    echo json_encode($arr);
}


if(isset($_POST["addpara"]))
{
    $p=$_POST["para"];
    $query="insert into data(content) values(?)";
    $result=$con->prepare($query);
    $result->bind_param("s",$p);
    $result->execute();
    if($result->affected_rows>0)
    {
        $arr["msg"]="Paragraph Added Successfully";
    }
    else
    {
        $arr["msg"]=" Paragraph Not added SUccessfully";
    }
    echo json_encode($arr);
}
if(isset($_POST["fetchpara"]))
{
    $query="select * from data order by id desc";
    $result=$con->prepare($query);
    $result->execute();
    $result->bind_result($id,$content);
    $result->store_result();
    if($result->num_rows>0)
    {
        $arr["table"]="<thead><tr><th scope='col'>Sr No.</th><th scope='col'>Content</th></tr></thead><tbody>";
        
        
        $i=1;
        while($result->fetch())
        {
            $arr["table"].="<tr><td>".$id."</td><td>".$content."</td></tr>";
        }
        $arr["table"].="</tbody>";
        $arr["msg"]="success";
    }
    else
    {
        $arr["msg"]="No Paragraph Found";
    }
    echo json_encode($arr);
}

if(isset($_POST["deletepara"]))
{
    $id=$_POST["pid"];
    $query="delete from data where id=?";
    $result=$con->prepare($query);
    $result->bind_param("i",$id);
    $result->execute();
    if($result->affected_rows>0)
    {
        $arr["msg"]="paragraph Deleted Successfully";
    }
    else
    {
        $arr["msg"]=" paragraph Not Deleted SUccessfully";
    }
    echo json_encode($arr);
}

?>