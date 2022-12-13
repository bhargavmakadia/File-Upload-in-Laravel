<h1>Form</h1>
<form method="post" action="<?php echo e(URL::to('/form')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?> 
    Your Name : <input type-="text" name="txt1"/> <br/>
    File : <input type="file" name="file123"/> <br/>
    <input type="submit" name="action" value="submit"/>
</form><?php /**PATH C:\Users\HP\laravel-fileupload\resources\views/contact.blade.php ENDPATH**/ ?>