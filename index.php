<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" ></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  <title>File System</title>

</head>
<body>
  <header>header</header>
  <main class="container">

    <button class="btn btn-primary">add</button>
    <table id="file-explorer" class="table table-primary table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Folder</th>
                <th>File</th>
                <th>Type</th>
                <th>Download/edit/delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Row 1 Data 1</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
                <td>Row 1 Data 2</td>
            </tr>
            <tr>
                <td>Row 2 Data 1</td>
                <td>Row 2 Data 2</td>
                <td>Row 2 Data 2</td>
                <td>Row 2 Data 2</td>
            </tr>
        </tbody>
    </table>
  </main>
  <script>
    $(document).ready( function () {
      $('#file-explorer').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        // "ajax": {
        //   url: "get_files.php",
        //   type: "POST",
        // },
        "columnsDefs":[{
          "targets": [0, 3, 4],
          "orderable": false
        }]
      });
  } );
  </script>
</body>
</html>