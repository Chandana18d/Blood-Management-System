<?php
    function get_a1_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="A+";
        $a1_count="";
        $query="select count(*) as a1_count from user where blood='A+'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $a1_count=$row["a1_count"];
            }
        return ($a1_count);
    }
    function get_b1_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="A-";
        $b1_count="";
        $query="select count(*) as b1_count from user where blood='A-'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $b1_count=$row["b1_count"];
            }
        return ($b1_count);
    }
    function get_c1_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="B+";
        $c1_count="";
        $query="select count(*) as c1_count from user where blood='B+'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $c1_count=$row["c1_count"];
            }
        return ($c1_count);
    }   
    function get_d1_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="B-";
        $d1_count="";
        $query="select count(*) as d1_count from user where blood='B-'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $d1_count=$row["d1_count"];
            }
        return ($d1_count);
    }
    function get_e1_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="AB+";
        $e1_count="";
        $query="select count(*) as e1_count from user where blood='AB+'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $e1_count=$row["e1_count"];
            }
        return ($e1_count);
    }
    function get_f1_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="AB-";
        $f1_count="";
        $query="select count(*) as f1_count from user where blood='AB-'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $f1_count=$row["f1_count"];
            }
        return ($f1_count);
    }
    function get_g1_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="O+";
        $g1_count="";
        $query="select count(*) as g1_count from user where blood='O+'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $g1_count=$row["g1_count"];
            }
        return ($g1_count);
    }
    function get_h1_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="O-";
        $h1_count="";
        $query="select count(*) as h1_count from user where blood='O-'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $h1_count=$row["h1_count"];
            }
        return ($h1_count);
    }
?>