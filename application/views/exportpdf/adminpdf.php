<div>
    <div>
        <h4>Table Admin</h4>
        </p>
        <table>
            <thead>
                <tr>
                    <th> NIK </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Gender </th>
                    <th> Date Birth </th>
                    <th> Address </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (1 > 0) {
                    foreach ($admins as $admin) {
                ?>
                        <tr>
                            <td> <?php echo $admin->nik ?> </td>
                            <td> <?php echo $admin->name ?></td>
                            <td> <?php echo $admin->phone ?></td>
                            <td> <?php echo $admin->email ?> </td>
                            <td> <?php echo $admin->gender ?> </td>
                            <td> <?php echo $admin->address ?> </td>
                        </tr>
                <?php }
                } else {
                    echo "Data Tidak Ditemukan";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>