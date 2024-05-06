<?php
    function get_a_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="A+";
        $a_count="";
        $query="select count(*) as a_count from don where blood='A+'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $a_count=$row["a_count"];
            }
        return ($a_count);
    }
    function get_b_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="A-";
        $b_count="";
        $query="select count(*) as b_count from don where blood='A-'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $b_count=$row["b_count"];
            }
        return ($b_count);
    }
    function get_c_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="B+";
        $c_count="";
        $query="select count(*) as c_count from don where blood='B+'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $c_count=$row["c_count"];
            }
        return ($c_count);
    }   
    function get_d_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="B-";
        $d_count="";
        $query="select count(*) as d_count from don where blood='B-'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $d_count=$row["d_count"];
            }
        return ($d_count);
    }
    function get_e_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="AB+";
        $e_count="";
        $query="select count(*) as e_count from don where blood='AB+'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $e_count=$row["e_count"];
            }
        return ($e_count);
    }
    function get_f_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="AB-";
        $f_count="";
        $query="select count(*) as f_count from don where blood='AB-'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $f_count=$row["f_count"];
            }
        return ($f_count);
    }
    function get_g_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="O+";
        $g_count="";
        $query="select count(*) as g_count from don where blood='O+'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $g_count=$row["g_count"];
            }
        return ($g_count);
    }
    function get_h_count(){
        $con = mysqli_connect("localhost","root","","register");
        $blood="O-";
        $h_count="";
        $query="select count(*) as h_count from don where blood='O-'";
        $query_run=mysqli_query( $con, $query );
        while($row= mysqli_fetch_assoc($query_run)){
            $h_count=$row["h_count"];
            }
        return ($h_count);
    }
?>