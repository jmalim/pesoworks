<div style="text-align:center">
    <h2>JOB POSTING</h2>
    <div><span style="display:flex; justify-content:flex-end; width:100%; padding: 0px;">
            <input type="button" value="POST A JOB" class="button"
            onclick="window.location.href='<?php echo base_url() ?>send_data_controller/savedata'" />
        </span></div>
    <br>




    <table id="example" class="table table-striped table-bordered" style="width:100%" align="center">


        <thead align="center">

            <tr>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>JOB TITLE</p>
                </th>
                <th bgcolor="#015668" align="center">
                    <p style="color:#FFFFFF" ;>QUALIFICATION</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>ESTABLISHMENT</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>JOB TYPE</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>RATE</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>JOB LOCATION</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>DATE POSTED</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>STATUS</p>
                </th>
                <th bgcolor="#015668">
                    <p style="color:#FFFFFF" ;>ACTION</p>

                </th>
            </tr>
        </thead>

        <tbody >

            <?php foreach ($jobpost as $row) { ?>
                <tr>

                    <td align="center"><?= $row['jobtitle']; ?>

                    </td>
                    <td align="center"><?= $row['jobdetails']; ?>

                    </td>
                    <td align="center"><?= $row['establishment']; ?>

                    </td>
                    <td align="center"><?= $row['jobtype']; ?>

                    </td>
                    <td align="center"><?= $row['rate']; ?>

                    </td>
                    </td>
                    <td align="center"><?= $row['joblocation']; ?>

                    </td>
                    <td align="center"><?= $row['postingdate']; ?>

                    </td>
                    <td align="center"><?= $row['postingstatus']; ?>

                    </td>
                    <td>
                    


                    <input type="button" value="VIEW" class="buttonedit" name="edit"
                        onclick="window.location.href='<?php echo base_url() ?>send_data_controller/view_job/<?= $row['jobID'];?>'" />
<!--                      
                        <a href="<?php echo base_url();?>send_data_controller/view_job/<?= $row['jobpostingID'];?>">VIEW</a> -->


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