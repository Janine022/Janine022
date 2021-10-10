<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 jQuery Autocomplete Text Search Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

  <style>
    .container {
      max-width: 500px;
    }
  </style>
</head>

<body>
<input type="text"  id="autouser" class="form-control" placeholder="fullname">
<input type="text" id="userid" name="userid" value='0' >
</body>

<script>

$(document).ready(function(){
    // Initialize
    $( "#autouser" ).autocomplete({
        source: function( request, response ) {
            // Fetch data
            $.ajax({
                url: "/panel/services/userList",
                type: 'post',
                dataType: "json",
                data: {
                    search: request.term
                },
                success: function( data ) {
                    response( data );
                }
            });
        },
        select: function (event, ui) {
            // Set selection
            $('#autouser').val(ui.item.label); // display the selected text
            $('#userid').val(ui.item.value); // save selected id to input
            return false;
        }
    });

});
          

</script>

</html>