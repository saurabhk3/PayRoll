
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
           
        }else{   // displays an alert 
            echo"<html>
            <script> 
            alert('Input Required!');
            </script>
                </body>
                </html>";
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
            echo"<html>
            <script> 
            alert('An entry with same ID or name already exists');
            </script>
                </body>
                </html>";
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
            echo"<html>
            <script> 
            alert('Department doesn't exists');
            </script>
                </body>
                </html>";
        }else{
            if($result_emp ){
                echo"<html>
            <script> 
            alert('An employee with same ID exists!');
            </script>
                </body>
                </html>";
            }else{
                $q_emp ="INSERT INTO EMPLOYEE (E_ID,E_Name,Email,DoB,Age,SEX,Bank_Acct,DoJ,D_ID)
                                        VALUES('$e_id','$e_name','$e_email','$e_dob','$e_age','$e_sex','$e_act','$e_doj','$e_did')";
                if(mysqli_query($con,$q_emp)){
                    echo"Employee record inserted";
                
                
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
                    echo"<html>
            <script> 
            alert('Failed Payroll entry');
            </script>
                </body>
                </html>";
                }
                // now we have to insert corresponding records in LEAVE and PAYROLL TABLE
                // initialiasing Leave(E_ID,FMLA,Maternity,Person)
                $val = 0;
                $q = "INSERT INTO LEAVE_RECORD (E_ID,FMLA,Maternity,Personal) VALUES('EMP01',$val,$val,$val)";
                    if(mysqli_query($con,$q)){
                        echo"Leave inserted ";
                    }else{
                        echo"<html>
            <script> 
            alert('Leave Failed');
            </script>
                </body>
                </html>";
                    }

            }else{
                echo"<html>
            <script> 
            alert('Employee Failed');
            </script>
                </body>
                </html>";
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
                echo"<html>
            <script> 
            alert('Can not delete!Failed');
            </script>
                </body>
                </html>";
            } 
        }else{
            echo"<html>
            <script> 
            alert('Employee does not exists);
            </script>
                </body>
                </html>";
        }

    }

    /////////////////////////////////SEARCH (view.php)////////////////////////////////

    if(isset($_POST['search'])){
        $s_id = mysqli_real_escape_string($con,$_POST['search_id']);
        $s_name = mysqli_real_escape_string($con,$_POST['search_name']);

        if(empty($s_id) && empty($s_name)){
            echo"<html>
            <script> 
            alert('Input Required!');
            </script>
                </body>
                </html>";
        }else if(!empty($s_id)){
            $find = "SELECT * FROM EMPLOYEE WHERE E_ID='$s_id'";  // query so that it contains all info (PAYROLL,LEaVE_RECORD)
            $result = mysqli_query($con,$find);
            if(mysqli_num_rows($result)>0){
                echo "<table style='position:fixed;top:600px;left:50px;'>
                <tr><th>ID</th><th>Name</th><th>Email</th></tr>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$row['E_ID']."</td><td>".$row['E_Name']."</td><td>".$row['Email']."</td></tr>";
                }
                echo"</table";
            }else{
                echo"<html>
            <script> 
            alert('0 Rows : No such Employee');
            </script>
                </body>
                </html>";
            }
        }
          
        }else if(!empty($s_name)){
            $find = "SELECT * FROM EMPLOYEE WHERE E_Name='$s_name'";  // query so that it contains all info (PAYROLL,LEaVE_RECORD)
            $result = mysqli_query($con,$find);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<table style='position:fixed;top:600px;left:50px;'>
                    <tr><th>ID</th><th>Name</th><th>Email</th></tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr><td>".$row['E_ID']."</td><td>".$row['E_Name']."</td><td>".$row['Email']."</td></tr>";
                    }
                    echo"</table";
                }
            }else{
                echo"<html>
            <script> 
            alert('0 Rows : No such Employee');
            </script>
                </body>
                </html>";
            }
           
    }



    ///////////////////////UPDATE//////////////////////////////
    // if(isset($_POST['update_payoll'])){
    //     $up_id = mysqli_real_escape_string($con,$_POST['update_id']);
    //     if(empty($up_id)){
    //         header("location:update.php");
    //     }
    //     $query = "SELECT * FROM EMPLOYEE WHERE E_ID='$up_id'";
    //     $up_result = mysqli_query($con,$query);
    //     if(mysqli_num_rows($up_result)>0){
    //         header('location:updatedata.php');
    //     }else{
    //         echo"<html>
    //         <script> 
    //         alert(' No such Employee exists');
    //         </script>
    //             </body>
    //             </html>";
    //             header("location:updatedata.php");
    //     }
    // }
    if(isset($_POST['update_payroll'])){
        $u_id = mysqli_real_escape_string($con,$_POST['update_id']);

        if(empty($u_id) ){
            echo"<html>
            <script> 
            alert('Input Required!');
            </script>
                </body>
                </html>";
        }else{
            $u_find = "SELECT * FROM EMPLOYEE WHERE E_ID='$u_id'";  
            $u_result = mysqli_query($con,$u_find);
            if(mysqli_num_rows($u_result)>0){
               header('location:updatedata.php');
            }else{
                echo"<html>
            <script> 
            alert(' No such Employee');
            </script>
                </body>
                </html>";
            }
        }
           
    }


?>
