
<?php
    $flg = 0;
    session_start();
    //initalise the variable
    $server = "localhost";
    $username = "";
    $pass = "";
    $dbname = "PayRoll";

    // an array for errors
    $errors = array();


    //connect to database    
    $con = new mysqli($server,"root",$pass,$dbname) or die("Couldn't connect to database");

    ///////////////////////////////////////////////////// Admin Login
    ///////////////////login.php/////////////////////////////////////////////////////
    ////////////////////////////////////////////////////
    if(isset($_POST['login'])){  

    
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        

        //form validation
        //let's check whether username and password are correct
        if($username == "admin" and $password == "admin3"){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in Successfuly";
            header('location:admin_index.php');
            $flg =0;
        }else{
            $flg = 1;
            array_push($errors,"Username or Password is incorrect");
        } 
    }

    ////////////////////////GUEST LOGIN//////////////////////////

    if(isset($_POST['guest'])){
        header("location:admin_index.php");
    }


     /////////////////////////////////////////////////////Adding a new department
    ///////////////////add_dept.php/////////////////////////////////////////////////////
    ////////////////////////////////////////////////////
    if(isset($_POST['dept'])){
        $new_dept_name = mysqli_real_escape_string($con,$_POST['dept_name']);
        $new_dept_id = mysqli_real_escape_string($con,$_POST['dept_id']);
            // check whether any duplicate entry is there
        $check_dup_dep = "SELECT * FROM DEPARTMENT WHERE D_ID='$new_dept_id' or D_NAME='$new_dept_name' LIMIT 1";  //only show 1 row(LIMIT 1)
        $results_dep = mysqli_query($con,$check_dup_dep);
        $result_dep = mysqli_fetch_assoc($results_dep);
        if($result_dep){
            //header('location:error.php');  // to be created such that errors can be displayed
            echo"An entry with same ID or Name already exists";
        }else{
            $q_dep = "INSERT INTO DEPARTMENT (D_ID,D_NAME) VALUES('$new_dept_id','$new_dept_name')";
            if(mysqli_query($con,$q_dep)){
                echo"Yaaay!";
            }else{
                echo"Ooops! ".$con->error;
            }
        }
    }

    /////////////////////////////////////////////////////Adding a new employee
    ///////////////////add_emp.php/////////////////////////////////////////////////////
    ////////////////////////////////////////////////////

    if(isset($_POST['emp'])){
        $e_name = mysqli_real_escape_string($con,$_POST['e_name']);
        $e_id = mysqli_real_escape_string($con,$_POST['e_id']);
        $e_email = mysqli_real_escape_string($con,$_POST['e_email']);
        $e_dob = mysqli_real_escape_string($con,$_POST['e_dob']);
        $e_age = mysqli_real_escape_string($con,$_POST['e_age']);
        $e_sex = mysqli_real_escape_string($con,$_POST['e_sex']);
        $e_act = mysqli_real_escape_string($con,$_POST['e_act']);
        $e_doj = mysqli_real_escape_string($con,$_POST['e_doj']);
        $e_did = mysqli_real_escape_string($con,$_POST['e_did']);
            //check for any existing employee with same E_ID
        $check_dup_emp = "SELECT * FROM EMPLOYEE WHERE E_ID='$e_id'LIMIT 1";  
        $results_emp = mysqli_query($con,$check_dup_emp);
        $result_emp = mysqli_fetch_assoc($results_emp);
        //check whether the given department exists or not---if dept doesn't exists
        // we can't add the employee
        $check_dup_dep_emp = "SELECT * FROM DEPARTMENT WHERE D_ID='$e_did'";
        $results_dep_emp = mysqli_query($con,$check_dup_dep_emp);
        $result_dep_emp = mysqli_fetch_assoc($results_dep_emp);
        if(!$result_dep_emp){
            echo"Department does not exists";
        }else{
            if($result_emp ){
                // header('location:error.php');// to be created such that errors can be displayed
                echo"An employee with same ID exists";
            }else{
                $q_emp ="INSERT INTO EMPLOYEE (E_ID,E_Name,Email,DoB,Age,SEX,Bank_Acct,DoJ,D_ID)
                                        VALUES('$e_id','$e_name','$e_email','$e_dob','$e_age','$e_sex','$e_act','$e_doj','$e_did')";
                if(mysqli_query($con,$q_emp)){
                    echo"Employee record inserted";
                
                // now we have to insert corresponding records in LEAVE and PAYROLL TABLE
                // initialiasing Leave(E_ID,FMLA,Maternity,Person)
                $start_val = 0;
                $init = "INSERT INTO LEAVES (E_ID,FMLA,Maternity,Person) VALUES 
                            ('$e_id','$start_val','$start_val','$start_val')";
                if(mysqli_query($con,$init)){
                    echo"Inserted LEAVE";
                }else{
                    echo"FAiled LEave";
                }
                // adding data to PAYROLL TABLE(P_ID,E_ID,Gross_Salary,Basic_Salary,ALLOWANCE,DEDUCTION,TAX,NET_SALARY)
                
                $p_id = mysqli_real_escape_string($con,$_POST['e_pid']);
                $e_basic = mysqli_real_escape_string($con,$_POST['e_basic']);
                $e_al = mysqli_real_escape_string($con,$_POST['e_al']);
                $e_ded = mysqli_real_escape_string($con,$_POST['e_ded']);
                $p_id = mysqli_real_escape_string($con,$_POST['e_pid']);
                $e_tax = mysqli_real_escape_string($con,$_POST['e_tax']);

                $gross = $e_basic + $e_al ;
                $net = $gross - $e_ded - $e_tax;

                $pay_query = "INSERT INTO PAYROLL (P_ID,E_ID,Gross_Salary,Basic_Salary,ALLOWANCE,DEDUCTION,TAX,NET_SALARY)
                                VALUES('$p_id','$e_id','$gross','$e_basic','$e_al','$e_ded','$e_tax','$net')";
                if(mysqli_query($con,$pay_query)){
                    echo"Successfull PAyroll";
                }else{
                    echo"Failed PAyroll";
                }

            }else{
                echo"Employee failed" .$con->error;
                }
            }
        }
    }

    /////////////////////////////DELETE///////////////////////////////

    if(isset($_POST['delete'])){  // still have to again check when PAyroll and  leaves table is maintained
        $delete_id = mysqli_real_escape_string($con,$_POST['delete_id']);
        
        $query_id = "SELECT * FROM EMPLOYMENT WHERE E_ID='$delete_id' LIMIT 1";
        if(mysqli_query($con,$query_id)){
            $del = "DELETE FROM EMPLOYEE WHERE E_ID='$delete_id'";
            if(mysqli_query($con,$del)){
                echo"succesfully deleted";
            }else{
                echo"failed!" .$con->error;
            } 
        }else{
            echo"employee does not exists";
        }

    }


?>
