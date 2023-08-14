<table width="100%" class="spa__list--view">

    <thead>
        <tr>
            <th>Id</th>
            <th>First name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Register Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php

        if (isset($data) && is_array($data)) {
            foreach ($data as $user) { ?>
                <tr>
                    <td><?php echo $user["id"]; ?></td>
                    <td><?php echo $user["firstName"]; ?></td>
                    <td><?php echo $user["lastName"]; ?></td>
                    <td><?php echo $user["email"]; ?></td>
                    <td><?php echo $user["registerDate"]; ?></td>
                    <td><?php echo $user["status"]; ?></td>
                    <td>
                        <a href="?page=user&todo=edit&id=<?php echo $user["id"]; ?>">Edit</a>
                        <a href="?page=user&todo=delete&id=<?php echo $user["id"]; ?>">Delete</a>
                    </td>
                </tr>
        <?php

            }
        }

        ?>

    </tbody>
</table>