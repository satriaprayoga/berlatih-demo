<?php include 'template/header.php'; ?>
<article>
    <div class="row-fluid">
        <div class="span8" style="text-align:justify;">
            <div class="page-header">
                <h1><i class="icon-cog"></i> Setting Users &nbsp;<small>web site's users settings</small></h1>
            </div>
            <p class="pull-right">
                <a class="btn btn-success"  href="<?php echo URL ?>dashboard/user_setting/new" ><i class="icon-plus"></i> Create Users</a>
            </p>
             <h3><i class="icon-cog"></i> User List &nbsp;</h3>
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                <th>id</th>
                <th>login</th>
                <th>role</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->users as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $value['id'] . '</td>';
                        echo '<td>' . $value['username'] . '</td>';
                        echo '<td>' . $value['role'] . '</td>';

                        echo '</tr>';
                    }
                    ;
                    ?>
                </tbody>
            </table>



        </div>
    </div>
</article>
<?php include 'template/footer.php'; ?>