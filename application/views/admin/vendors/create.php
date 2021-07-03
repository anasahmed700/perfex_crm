<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('vendors/create'); ?>
 <table>
    <tr>
        <td><label for="title">Title</label></td>
        <td><input type="input" name="title" /></td>
    </tr>
    <tr>
        <td><label for="Employee Name">Name</label></td>
        <td><input type="input" name="employee_name" /></td>
    </tr>
    <tr>
        <td><label for="Employee Salary">Salary</label></td>
        <td><input type="input" name="employee_salary" /></td>
    </tr>
    <tr>
        <td><label for="Employee Age">Age</label></td>
        <td><input type="input" name="employee_age" /></td>
    </tr>
    <td><input type="submit" name="submit" value="Create vendors item" /></td>
    </tr>
</table>
</form>