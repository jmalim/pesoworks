
<div style="text-align:center">
    <h2>LIST OF EMPLOYEES</h2>

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
                    <p style="color:#FFFFFF" ;>EMPLOYMENT STATUS</p>
                </th>

                    <p style="color:#FFFFFF" ;>EMPLOYMENT STATUS</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>REGISTERED AT(Name of Establishment)</p>
                    
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>WAGE</p>
                    
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>DATE EMPLOYED</p>
                    
                </th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($report_employed_data as $row) { ?>

                <tr>

                    <td align="center">
                    <h5><?= $row['fname']; ?></h5>  
                    </td>
                    <td align="center">
                    <h5><?= $row['emp_status']; ?></h5>    
                    </td>
                    <td align="center">
                    <h5><?= $row['establishment']; ?></h5>   
                    </td>
                    <td align="center">
                    <h5><?= $row['wage']; ?></h5>   
                    </td>
                    <td align="center">
                    <h5><?= $row['date_employed']; ?></h5>   
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