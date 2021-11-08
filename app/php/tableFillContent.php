<?php
include "fileBrowser.php";
include "getFileSize.php";

foreach (fileBrowser() as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) !== "") {

        $fileName =  basename($file);
        $fileType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $fileCreate =  date("Y-m-d H:m:s", filectime($file));
        $fileModify =  date("Y-m-d H:m:s", filemtime($file));

        echo ' <tr>' .
            ' <td> ' . $fileName . ' </td> ' .
            ' <td> ' . $fileType . ' </td>' .
            ' <td> ' . $fileCreate . ' </td>' .
            ' <td> ' . $fileModify . ' </td>' .
            ' <td> ' . getFileSize($file) . ' </td>' .
            ' <td> ' .
            '<button id="deleteFile" data-file="' . $file . '">delete</button>' .
            '<button id="openFile"  data-bs-toggle="modal" data-bs-target="#openFileModal" data-file="' . $file . '">open</button>' .
            ' </td>' .
            '</tr> ';
    }
}
?>

<script>
    $(document).ready(function() {
        $("#deleteFile").click(function(e) {
            let fileUrl = e.target.dataset.file;

            $.ajax({
                url: "../../app/php/deleteFile.php",
                type: "post",
                data: {
                    filePath: fileUrl
                },
                success: function(response) {
                    if (response) {
                        Swal.fire({
                            icon: "success",
                            title: "File deleted",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        loadTable();
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                        });
                    }
                }
            })
        })
    })
</script>


<!-- open file -->
<script>
    $(document).ready(function() {
        $("#openFile").click(function(e){
            let fileUrl = e.target.dataset.file;
            $.ajax({
                url: "../../app/php/openFile.php",
                type: "post",
                data:{
                    filePath: fileUrl
                },
                success: function(response) {
                    if (response) {
                        console.log("dani")

                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                        });
                    }
                }
            })
        })
    })
</script>