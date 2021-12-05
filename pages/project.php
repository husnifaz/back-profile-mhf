<h1 class="h3 mb-4 text-gray-800">Project</h1>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      </table>
    </div>
  </div>
</div>

<?php include('pages/firebase.php'); ?>

<script>
  var dataSet = new Array();
  var i = 1;
  db.collection("project_idn_detail").get().then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
      dataSet.push([doc.data().id, doc.data().title, null])
      i = i + 1
    });

    $('#dataTable').DataTable({
      data: dataSet,
      columns: [{
          title: "No"
        },
        {
          title: "Kategori"
        },
        {
          title: "Aksi",
          render: function(data) {
            return `<a href="" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-pencil"></i></a>
            <a href="" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>`;
          },
          className: 'text-center'
        },
      ]
    })
  });
</script>