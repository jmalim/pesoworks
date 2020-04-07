
<div style="text-align:center">
    <h2>LIST OF REGISTERED JOBSEEKERS</h2>
    <h3>March 2020</h3>

    <br>

    <div><span style="display:flex; justify-content:flex-end; width:100%; padding: 0px;">
        <input type="button" value="PRINT" class="button" />
    </span></div>
<br>


    <table id="example" class="table table-striped table-bordered" style="width:100%">


        <thead>

            <tr>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>FULL NAME</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>ADDRESS</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>SKILLS</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>WAGE EMPLOYMENT</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>GENDER</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>CIVIL STATUS</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>AGE</p>
                    
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>EDUCATION</p>
                    
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>WORK EXPERIENCE</p>
                    
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>DATE REGISTERED</p>
                    
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>REGISTERED AT(Name of Establishment)</p>
                    
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>ESTABLISHMENT ADDRESS</p>
                    
                </th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($report_employed_data as $row) { ?>

                <tr>

                    <td align="center">
                    <h5><?= $row['name']; ?></h5>  
                    </td>
                    <td align="center">
                    <h5><?= $row['address']; ?></h5>    
                    </td>
                    <td align="center">
                    <h5><?= $row['skills']; ?></h5>   
                    </td>
                    <td align="center">
                    <h5><?= $row['wage_employment']; ?></h5>   
                    </td>
                    <td align="center">
                    <h5><?= $row['gender']; ?></h5>   
                    </td>
                    <td align="center">
                    <h5><?= $row['civil_status']; ?></h5>   
                    </td>
                    <td align="center">
                    <h5><?= $row['age']; ?></h5>   
                    </td>
                    <td align="center">
                    <h5><?= $row['education']; ?></h5>   
                    </td>
                    <td align="center">
                    <h5><?= $row['work_experience']; ?></h5>  
                    </td>
                    <td align="center">
                    <h5><?= $row['date_employed']; ?></h5>   
                    </td>
                    <td align="center">
                    <h5><?= $row['establishment_name']; ?></h5>   
                    </td>
                    <td align="center">
                    <h5><?= $row['establishment_address']; ?></h5>
                    </td>
                    <?php

                    } ?>

        </tbody>


    </table>


    <script>
        $(document).ready(function() {

            $('#example ').DataTable();
        });
    </script>