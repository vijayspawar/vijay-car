
<!-- Main content -->
<section class="content pt-3">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div lass="float-left">
              <h3 class="card-title">Manage Categories</h3>
            </div>
            <div class="float-right">
              <a class="btn btn-success btn-sm" href="#"> Add Categorie </a>
            </div>
          </div>
          <!-- /.card-header -->
          <?php $i = 0; $i++; ?>
          <div class="card-body">

            
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>

  </div><!-- /.container-fluid -->
</section>
<style>
  .w-5 {
    display: none;
  }
</style>
<!-- /.content -->
@endsection
@section('myjsfile')
<script>
 $(document).ready( function () {
    $('#example2').DataTable();
} );
</script>
@stop