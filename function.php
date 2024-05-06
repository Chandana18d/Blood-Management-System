<?php
    function get_user_count(){
        $con = mysqli_connect("localhost","root","","register");
        $user_count="";
        $query="select count(*) as user_count from dbms";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $user_count=$row["user_count"];
        }
        return ($user_count);
    }
    function get_donor_count(){
        $con = mysqli_connect("localhost","root","","register");
        $donor_count="";
        $query="select count(*) as donor_count from don";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $donor_count=$row["donor_count"];
        }
        return ($donor_count);
    }
    function get_patient_count(){
        $con = mysqli_connect("localhost","root","","register");
        $patient_count="";
        $query="select count(*) as patient_count from user";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $patient_count=$row["patient_count"];
        }
        return ($patient_count);
    }

    function get_req_count(){
        $con = mysqli_connect("localhost","root","","register");
        $req_count="";
        $query="select count(*) as req_count from request";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $req_count=$row["req_count"];
        }
        return ($req_count);
    }
?>