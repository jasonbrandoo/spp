<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>SPP</title>

<!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
<link href="/assets/css/layout.min.css" rel="stylesheet" type="text/css">
<link href="/assets/css/components.min.css" rel="stylesheet" type="text/css">
<link href="/assets/css/colors.min.css" rel="stylesheet" type="text/css">
<!-- /global stylesheets -->

<!-- Core JS files -->
<script src="/global_assets/js/main/jquery.min.js"></script>
<script src="/global_assets/js/main/bootstrap.bundle.min.js"></script>
<script src="/global_assets/js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script src="/global_assets/js/plugins/tables/datatables/extensions/select.min.js"></script>
<script src="/global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
<script src="/global_assets/js/plugins/forms/selects/select2.min.js"></script>
<script src="/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

<script src="/assets/js/app.js"></script>
<script>
  $(() => {
    $.ajaxSetup({
      headers :{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      }
    });

    $('.form-control-select2').select2();
    $('.form-input-styled').uniform();
    
  })
</script>

<!-- /theme JS files -->
