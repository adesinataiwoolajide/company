<script>
    function confirmToDelete(){
        return confirm("Click Okay to Delete Details and Cancel to Stop");
    }
</script>

<script>
    function confirmToEdit(){
        return confirm("Click Okay to Edit and Cancel to Stop");
    }
</script>

<script>
    function confirmToRestore(){
        return confirm("Click Okay to Restore The Deleted Data and Cancel to Stop");
    }
</script>
<script>
    function confirmToSuspend(){
        return confirm("Click Okay to Suspend The User Account and Cancel to Stop");
    }
</script>

<script>
    function confirmToUnSuspend(){
        return confirm("Click Okay to Un Suspend The User Account and Cancel to Stop");
    }
</script>


@if(session('success'))
    <?php $message = session('success'); ?>
    <script type="text/javascript">
        new Toast({ message: '<?php echo $message; ?>', type: 'success' });
    </script><?php
    unset($message); ?>

@endif

@if(session('error'))
    <?php $mess = session('error'); ?>
    <script type="text/javascript">
        new Toast({ message: '<?php echo $mess; ?>', type: 'error' });
    </script><?php
    unset($mess); ?>
@endif
