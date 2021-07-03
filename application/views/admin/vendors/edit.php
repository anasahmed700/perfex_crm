<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('vendors/edit/'.$vendors_item['id']); ?>
<table>
    <tr>
        <td><label for="title">Title</label></td>
        <td><input type="input" name="title" value="<?php echo $vendors_item['title'] ?>" /></td>
    </tr>
    <tr>
        <td><label for="Employee Name">Name</label></td>
        <td><input type="input" name="employee_name" value="<?php echo $vendors_item['employee_name'] ?>" /></td>
    </tr>
    <tr>
        <td><label for="Employee Salary">Salary</label></td>
        <td><input type="input" name="employee_salary" value="<?php echo $vendors_item['employee_salary'] ?>" /></td>
    </tr>
    <tr>
        <td><label for="Employee Age">Age</label></td>
        <td><input type="input" name="employee_age" value="<?php echo $vendors_item['employee_age'] ?>" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Edit vendors item" /></td>
    </tr>
</table>
</form>