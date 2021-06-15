<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - <?php echo $__env->yieldContent('title'); ?> </title>
    <link rel="stylesheet" href="../../css/build.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>


<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <?php echo $__env->make('includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="page-content-wrapper">
            
            <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Page Content-->

            <div class="container-fluid ">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

    </div>
    <div>




</body>

</html>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js">
</script>
<!--  toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../../Ajax/ajax.js"></script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });



    $("#main_form").on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: new FormData(this),
            processData: false,
            dataType: "json",
            contentType: false,
            beforeSend: function() {
                $(document).find('span.text-error').text('');
            },
            success: function(data) {
                alert(data);

                if (data.status == 0) {
                    $.each(data.error, function(prefix, val) {
                        $('span.' + prefix + '_error').text(val[0]);

                    });
                } else {
                    $('#main_form')[0].reset();
                    alert(data.msg);
                }
                console.log(data);

            },
            error: function(data) {
                alert(data);
                console.log(data);
            }

        });
    });

</script>
<?php /**PATH C:\xampp\htdocs\citasProject\App\Views/includes/base.blade.php ENDPATH**/ ?>