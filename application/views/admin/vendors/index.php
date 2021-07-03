<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
             
            <div class="pull-right">
                <a class="btn btn-success" href="http://demo.itsolutionstuff.com/itemCRUD/create">Add vendors</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tbody><tr>
            <th>Title</th>
            <th>Employee Name</th>
            <th>Salary</th>
            <th>Age</th>
            <th width="280px">Action</th>
        </tr>
<?php foreach ($vendors as $vendors_item): ?>
        <tr>
            <td><?php echo $vendors_item['title']; ?></td>
            <td><?php echo $vendors_item['employee_name']; ?></td>
            <td><?php echo $vendors_item['employee_salary']; ?></td>
            <td><?php echo $vendors_item['employee_age']; ?></td>
            <td>
                <a class="btn btn-info" href="<?php echo site_url('vendors/'.$vendors_item['slug']); ?>">Show</a>
                <a class="btn btn-primary" href="<?php echo site_url('vendors/edit/'.$vendors_item['id']); ?>">Edit</a>
                <a class="btn btn-primary" href="<?php echo site_url('vendors/delete/'.$vendors_item['id']); ?>">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
        </tbody></table>
</div>