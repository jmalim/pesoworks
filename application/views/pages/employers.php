<div style="text-align:center">
    <h2>LIST OF REGISTERED EMPLOYERS</h2>
</div>

<div><span style="display:flex; justify-content:flex-end; width:100%; padding: 0px;">
        <input type="button" value="ADD EMPLOYER" class="button" />
    </span></div>
<br>



<table id="example" class="table table-striped table-bordered" style="width:100%">

    <thead>

        <tr>
            <th bgcolor="#015668">
                <p style="color:#FFFFFF" ;>Name of Company / Agency</p>
            </th>
            <th bgcolor="#015668">
                <p style="color:#FFFFFF;";>HR Manager / In-Charge</p>
            </th>
            <th bgcolor="#015668">
                <p style="color:#FFFFFF" ;>Contact No.</p>
            </th>
            <th bgcolor="#015668">
                <p style="color:#FFFFFF" ;>Address</p>
            </th>
            <th bgcolor="#015668">
                <p style="color:#FFFFFF" ;>Action</p>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($establishment as $row) { ?>
            <tr>

                <td><?= $row['ename']; ?>
                    <h5></h5>
                </td>
                <td><?= $row['tin']; ?>
                    <h5></h5>
                </td>
                <td><?= $row['type']; ?>
                    <h5></h5>
                </td>
                <td><?= $row['workforce']; ?>
                    <h5></h5>
                </td>
                <td align="center">
                <input type="button" value="View" class="buttonedit"
                        onclick="window.location.href='<?php echo base_url() ?>pages/view_employers'" />
                    
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