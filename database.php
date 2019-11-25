<?php
    $server = 'localhost';
    $username = 'root';
    $pass = "";
    $dbname = "PayRoll";
    $connection = new mysqli($server,$username,$pass,$dbname); // create connection
    if($connection->connect_error){
        die("Connection Failed:". $connection->connect_error);
    }else{
        echo"Successfully connected\n";
    }
    $dept = "CREATE TABLE DEPARTMENT(
        D_ID VARCHAR(6) PRIMARY KEY, 
        D_NAME VARCHAR(30) NOT NULL)";

    $emp = "CREATE TABLE EMPLOYEE (
        E_ID VARCHAR(6) PRIMARY KEY ,E_Name VARCHAR(20),
        Email VARCHAR(20) ,DoB DATE ,Age INT(5) ,SEX VARCHAR(1),
        Bank_Acct VARCHAR(14), DoJ DATE, D_ID VARCHAR (6)
        )";
    
    $leave = 'CREATE TABLE leave(
        Eid varchar (6),Fmla int(6),maternity int(6) , Personal int(6))';
    $payroll = "CREATE TABLE PAYROLL(
    P_ID VARCHAR (6) PRIMARY KEY,E_ID VARCHAR(6), Gross FLOAT ,
    BONUS FLOAT ,ALOWANCE FLOAT,
    DEDUCTION FLOAT, TAX FLOAT ,NET_SALARY FLOAT,
    FOREIGN KEY(E_ID) REFERENCES EMPLOYEE(E_ID))";

    $receipt = "CREATE TABLE RECEIPTS (
    P_ID VARCHAR(6) NOT NULL,E_ID VARCHAR(6) NOT NULL
    ,FOREIGN KEY (P_ID) REFERENCES PAYROLL(P_ID),
    PRIMARY KEY(P_ID , E_ID),
    FOREIGN KEY(E_ID) REFERENCES EMPLOYEE(E_ID))";
    // if(mysqli_query($connection,$dept)===TRUE){
    //     echo"Table dept created\n";
    // }else{
    //     echo"Error dept\n".$connection->error;
    //  }
    // if(mysqli_query($connection,$emp)){
    //     echo"Table emp created\n";
    // }else{
    //     echo"Error emp\n".$connection->error;
    // }
    // $l = "CREATE TABLE LEAVES(
    //     E_ID VARCHAR(6) NOT NULL, FMLA FLOAT(6,2) NOT NULL ,
    //     Maternity FLOAT(6,2) NOT NULL ,Personal FLOAT(6,2) NOT NULL,
    //     FOREIGN KEY (E_ID) REFERENCES EMPLOYEE(E_ID)
    //     )";

    // if(mysqli_query($connection,$l)===TRUE){
    //     echo"\nLeave created\n";
    // }else{
    //     echo"Error leave\n".$connection->error;
    // }
    // if(mysqli_query($connection,$payroll)===TRUE){
    //     echo" \nPayroll created\n";
    // }else{
    //     echo"Error payroll ".$connection->error;
    // }
    // if(mysqli_query($connection,$receipt)===TRUE){
    //     echo"\nREceipt created\n";
    // }else{
    //     echo"Error receipt \n".$connection->error;
    // }    
    
    $d = "CREATE TABLE LEAVE_RECORD (E_ID VARCHAR(6),FMLA INT(6), Maternity INT(6), Personal INT(6))";
    if(mysqli_query($connection,$d)){
        echo"Created";
        echo"<tr>Yes </tr>";
    }else{
        echo"Can't create";
        echo"<tr>No </tr>";
    }

    if(mysqli_close($connection)){
        echo"Closed\n";
    }

?>