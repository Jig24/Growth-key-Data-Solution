<?php
include 'connectdb.php';
session_start();
if(isset($_POST["fetch"]))
{

    $query="select * from user where username=?";
    $result=$con->prepare($query);
    $result->bind_param("s",$_SESSION['uname']);
    $result->execute();
    $result->bind_result($id,$name,$pass,$work,$emp,$add);
    $result->store_result();
    if($result->num_rows>0)
    {
        $result->fetch();
        if($work)
        $arr['sub']=$work;
        else
        $arr['sub']=0;
        $arr['emp']=$emp;
        $d=date("Y-m-d");
        $date1=date_create($add);
$date2=date_create($d);
        $diff=date_diff($date1,$date2);
        $s=$diff->format("%a");
        $arr['udate']=$s;
        $query="select count(*) from data";
        $result1=$con->prepare($query);
        $result1->execute();
        $result1->bind_result($tot);
        $result1->store_result();
        $result1->fetch();
        $arr['tot']=$tot;
        $arr['rem']=$tot-$work;
    }
    echo json_encode($arr);
}
if(isset($_POST["sub"]))
{
    $query="select submitted_work from user where username=?";
    $result=$con->prepare($query);
    $result->bind_param("s",$_SESSION['uname']);
    $result->execute();
    $result->bind_result($work);
    $result->store_result();
    if($result->num_rows>0)
    {
        
        $result->fetch();
        if(!$work){
            $work=0;
        }
        $work=$work+1;
        echo "hii".$work;
        $query="update user set submitted_work=? where username=?";
        $result1=$con->prepare($query);
        $result1->bind_param("is",$work,$_SESSION['uname']);
        $result1->execute();
        $result1->store_result();
        if($result1->affected_rows>0)
        {
            $arr['msg']='suc';
        }
        else
        {
            $arr['msg']='fail';
        }
        
    }
    echo json_encode($arr);
}
if(isset($_POST["fetchwork"]))
{

    $query="select submitted_work from user where username=?";
    $result=$con->prepare($query);
    $result->bind_param("s",$_SESSION['uname']);
    $result->execute();
    $result->bind_result($work);
    $result->store_result();
    if($result->num_rows>0)
    {
        
        $result->fetch();
        
        if(!$work){
        $query="select * from data where id=1";
        $result1=$con->prepare($query);
        $result1->execute();
        $result1->bind_result($id,$cont);
        $result1->store_result();
        $result1->fetch();
        $arr['id']=$id;
        $arr['cont']=$cont;
        }
        else
        {
            $work=$work+1;
        $query="select * from data where id=?";
        $result1=$con->prepare($query);
        $result1->bind_param("i",$work);
        $result1->execute();
        $result1->bind_result($id,$cont);
        $result1->store_result();
        $result1->fetch();
        if($id){
        $arr['id']=$id;
        $arr['cont']=$cont;
        }
        else
        $arr['msg']='fin';
    }
        
    }
    echo json_encode($arr);
}
?>
