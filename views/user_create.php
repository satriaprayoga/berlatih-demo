<?php include 'template/header.php'; ?>
<article>
    <div class="row-fluid">
        <div class="span8" style="text-align:justify;">
            <div class="page-header">
                <h1><i class="icon-cog"></i> New User &nbsp;<small>web site's users settings</small></h1>
            </div>
           
            <form method="post" action="<?php echo URL; ?>dashboard/addUser" class="form-horizontal">
                <label>Login:</label><input type="text" name="username"/><br/>
                <label>Password:</label><input type="password" name="password"/><br/>
                <label>Role:</label>
                <select name="role">
                    <option value="default">Default</option>
                    <option value="admin">Admin</option>
                    <option value="owner">Owner</option>
                </select><br/>
                <label>&nbsp;</label><button type="submit" class="btn btn-primary">Save</button>
            </form>
            <hr/>


        </div>
    </div>
</article>
<?php include 'template/footer.php'; ?>