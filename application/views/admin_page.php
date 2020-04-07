
    <div style="text-align:center"><h2>LIST OF REGISTERED JOBSEEKERS</h2></div>
 

    <table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>

            <tr>
                <th bgcolor="#015668"><p style="color:#FFFFFF" ;>FULL NAME</p></th>
                <th bgcolor="#015668"><p style="color:#FFFFFF" ;>COMPLETE ADDRESS</p></th>
                <th bgcolor="#015668"><p style="color:#FFFFFF" ;>EMPLOYMENT STATUS</p></th>
                <th bgcolor="#015668"><p style="color:#FFFFFF" ;>ACTION</p></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($empdetails as $row) { ?>
                    <tr>

                        <td align="center">
                            <h5><?= $row['name']; ?></h5>
                        </td>
                        <td align="center">
                            <h5><?= $row['address']; ?></h5>
                        </td>
                        <td align="center">
                            <h5><?= $row['emp_status']; ?></h5>
                        </td>

                        <td align="center">
                        <input type="button" value="View" class="buttonedit"
                        onclick="window.location.href='<?php echo base_url() ?>pages/admindashboard'" />
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