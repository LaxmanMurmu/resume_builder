<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <title>style form</title>
</head>

<body>
    
    <div class="container my-5" id="main_con">

    <p>Resume Builder<p>
        <form>
            <div class="main-form row my-4">

                <?php include 'personal_details.php'; ?>
                <?php include 'education.php'; ?>
                <?php include 'skills.php'; ?>

                <button type="submit" class="btn btn-success mb-2 ml-3">Submit</button>
            </div>
    </div>
    </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script>
    $(document).ready(function() {

        $(document).on('click','.remove-btn', function () {
            $(this).closest('.other-qualification').remove();
            $(this).closest('.other-qualification-percentage').remove();
        });


        $(document).on('click', '.addmore-education', function() {
            $('.paste-new-education').append('<div class="container">\
<div class="other-qualification row my-4">\
<div class="form-group col-md-6">\
    <label for="other-qualification">Other Qualification  <i class="remove-btn fas fa-trash-alt ml-2"></i> </label>\
    <input type="text" name="other-qualification[]" class="form-control" id="other-qualification" placeholder="Any Other quaification">\
</div>\
<div class="form-group col-md-6">\
    <label for="other-percentage">Percentage</label>\
    <input type="text" name="other-percentage[]" class="form-control" id="other-percentage" placeholder="Percentage">\
</div>\
</div>\
</div>');
        });
    });
    </script>



<script>

$()

</script>



<span class="badge badge-danger px-3 py-2 m-1">HTML<input type="hidden" name="skills[]" value="$userskills"> </span>











<!-- <script>
    $(document).ready(function() {

        $(document).on('click','.remove-btn', function () {
            $(this).closest('.adding-skills').remove();
            $(this).closest('.form-group').remove();
        });

        $(document).on('click', '.addmore-skills', function() {
            $('.paste-new-skills').append('<div class="adding-skills form-group col-md-4">\
                <label for="more-skills">More Skills <i class="remove-btn fas fa-trash-alt ml-2"></i></label>\
                <input type="text" name="more-skills[]" class="form-control" id="more-skills" placeholder="">\
                <div class=" form-group mt-2">\
                </div>\
            </div>');
        });

        $(document).on('click', '.remove-single-btn', function() {
            $(this).closest('.form-group').remove();
        });
    });
</script>
 -->





</body>

</html>