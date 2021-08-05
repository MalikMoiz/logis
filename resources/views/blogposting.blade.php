

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Silk Cargos-Meeting the Requirements with Coherence and Trustship Since 2002</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
      <link rel="stylesheet" href="{{asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
      <link rel="stylesheet" href="{{asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
      <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
      <style>
        body {
              overflow-x: hidden; /* Hide vertical scrollbar */

              }
      </style>
    </head>
    <body class="hold-transition sidebar-mini">
      @include('sidebar')
        <div class="content-wrapper">
            <form action="{{url('/blogposting')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row ml-2">
                  <div class="col-6">
                     <div class="form-group">
                     <label for="">Date</label>
                   <input type="date" name="date" id="" class="form-control">
                     </div>
                 </div>
                 <div class="col-4">
                  <div class="form-group">
                  <label for="">Image</label>
                <input type="file" name="image" id="" class="form-control">
                  </div>
              </div>
              </div>
        <div class="row ml-2">
             <div class="col-8">
                <div class="form-group">
                <label for="">Blog Heading</label>
               <textarea id="" cols="30" rows="05" class="form-control" name="heading" wrap="hard"></textarea>
                </div>
            </div>
         </div>
         <div class="row ml-2">
          <div class="col-8">
             <div class="form-group">
             <label for="">Display Lines (2-3 Lines)</label>
            <textarea id="" cols="30" rows="05" class="form-control" name="display" wrap="hard"></textarea>
             </div>
         </div>
      </div>

        <div class="row ml-2">
            <div class="col-10">
               <div class="form-group">
               <label for="">Blog Body</label>
              <textarea  id="" cols="30" rows="20" class="form-control" name="details" wrap="hard"></textarea>
               </div>
           </div>
        </div>
        <div class="row ml-2">
            <div class="col-3">
               <div class="form-group">
               <button class="btn btn-primary" type="submit">Post Blog</button>
               </div>
           </div>
        </div>
            </form>
        </div>
      <script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
      <script src="{{asset('/plugins/jszip/jszip.min.js')}}"></script>
      <script src="{{asset('/plugins/pdfmake/pdfmake.min.js')}}"></script>
      <script src="{{asset('/plugins/pdfmake/vfs_fonts.js')}}"></script>
      <script src="{{asset('/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
      <script src="{{asset('/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
      <script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
      <script src="{{asset('/dist/js/demo.js')}}"></script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        
    </body>
  </html>

