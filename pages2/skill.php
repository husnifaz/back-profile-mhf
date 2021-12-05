<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skill</title>
  <link rel="stylesheet" href="../css/newstyle.css">
</head>

<body>
  <h1>Seminar</h1>
  <div class="row">
    <div class="column">
      <table border="1" id="skill">
        <tr>
          <th>No</th>
          <th>Skill</th>
          <th>Aksi</th>
        </tr>
      </table>
    </div>
    <div class="column">
      <form action="" method="post">
        <input type="text" name="id" placeholder="id" />
        <input type="text" name="nama" placeholder="nama" />
        <input type="submit" name="Simpan" />
      </form>
    </div>
  </div>

</body>

<?php
include('../pages/js.php');
include('../resources/firebase.php');
?>
<script>
  var i = 1;
  db.collection("skill").get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
      $('#skill').append(`
          <tr>
              <td>` + i + `</td>
              <td>` + doc.data().name + `</td>
              <td><a href="javascript:myEdit(` + doc.data().name + `)">Edit</a> <a>Hapus</a></td>
          </tr>
      `)
      i++
    });
  });

  function myEdit(myname) {
    console.log(myname)
  }
</script>

</html>