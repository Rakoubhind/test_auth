<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"
    integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA=="
    crossorigin="anonymous"></script>
  <title>AJAX CRUD</title>
</head>
@if(Auth::check() && Auth::user()->role_id == 1 )


<body>
  <section style="pading-top:100px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <b>ETUDIANTS</b>
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#StudentModal">
                Ajouter ËTUDIANT</button>
              <a href="#" class="btn btn-danger" id="deleteall">Supprimer par selection</a>
            </div>
            <div class="card-body">
              <table id="studentTable" class="table">
                <thead>
                  <tr>
                    <th><input type="checkbox" id="checkAll" /></th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>email</th>
                    <th>téléphone</th>
                    <th>Action</th>

                  </tr>
                </thead>

                <tbody>
                  @foreach($students as $student)
                  <tr id="sid{{$student->id}}">
                    <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$student['id']}}" /></td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->lname}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>
                      @if(Auth::check() && Auth::user()->role_id == 1 )
                      <a href="javascript:void(0);" onclick="editStudent({{$student['id']}})"
                        class="btn btn-info btn-sm">Modifier</a>
                      <button href="javascript:void(0);" onclick="deleteStudent({{$student['id']}})" id="deleteBtn"
                        class="btn btn-danger btn-sm">Supprimer</button>

                      @else
                      <a href="javascript:void(0);" onclick="editStudent({{$student['id']}})"
                        class="btn btn-info btn-sm">Modifier</a>
                      <button href="javascript:void(0);" onclick="deleteStudent({{$student['id']}})" id="deleteBtn"
                        class="btn btn-danger btn-sm">Supprimer</button>

                      @endif
                    </td>

                  </tr>
                  {{-- <div class="modal fade" id="deletestudent{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title custom_align" id="Heading">Supprimer cette entrée</h4>
                                </div> -->
                            <form action="{{route('student.destroy', $student->id)}}" method="post">

                                @csrf
                                <div class="modal-body">
                                    <div class="alert mt-3"><span class="glyphicon
                                            glyphicon-warning-sign"></span>
                                        <b>Voulez vous supprimer
                                            cet etudiant?</b>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success"><span
                                            class="glyphicon
                                            glyphicon-ok-sign"></span>
                                        Oui</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                            class="glyphicon
                                            glyphicon-remove"></span>
                                        Non</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div> --}}
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    $('#name')
  </script>

  <!-- ADD STUDENT Modal -->

  <div class="modal fade" id="StudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter Nouveau Etudiant</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="studentForm">
            {{ csrf_field() }}


            <div class="form-group">
              <label for="name" class="form-label">Nom</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="lname" class="form-label">Prénom</label>
              <input type="text" class="form-control" name="lname" id="lname">
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
              <label for="phone" class="form-label">Téléphone</label>
              <input type="text" class="form-control" name="phone" id="phone">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
              <button type="submit" class="btn btn-success">ajouter Etudiant</button>
              <button type="button" class="btn btn-info " id="reinitialise">Réinitiliser</button>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $('#studentForm').on('submit', function (e) {
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: "{{route('store.students')}}",
        data: $('#studentForm').serialize(),
        success: function (response) {
          console.log(response);
          if (response) {
            $("#studentTable tbody").prepend('<tr><td><input type="checkbox" name="ids" class="checkBoxClass" value="' + response.id + '"/></td><td>' + response.name + '</td><td>' + response.lname + '</td> <td>' + response.email + '</td> <td>' + response.phone + '</td> <td><a href="javascript:void(0);" onclick="editStudent(' + response.id + ')" class="btn btn-info btn-sm">Modifier</a>  <a href="javascript:void(0);" onclick="deleteStudent(' + response.id + ')" class="btn btn-danger btn-sm">Supprimer</a> </td></tr>');
            $("#studentForm")[0].reset();
            Swal.fire({
              position: 'top-center',
              icon: 'success',
              title: 'ajouté',
              showConfirmButton: false,
              timer: 1500
            })
          }
          $("#StudentModal").modal('hide');

        }
      });
    });
  </script>
  {{-- //*************************************************************************************************************
  --}}
  <!-- EDIT STUDENT Modal -->
  <div class="modal fade" id="EditStudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajouter Nouveau Etudiant</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="EditstudentForm">
            {{ csrf_field() }}
            <input type="hidden" id="student_id" name="student_id" />
            <div class="form-group">
              <label for="name" class="form-label">Nom</label>
              <input type="text" name="name" class="form-control" id="name2">
            </div>
            <div class="form-group">
              <label for="lname" class="form-label">Prénom</label>
              <input type="text" class="form-control" name="lname" id="lname2">
            </div>
            <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email2">
            </div>
            <div class="form-group">
              <label for="phone" class="form-label">Téléphone</label>
              <input type="text" class="form-control" name="phone" id="phone2">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
              <button type="submit" class="btn btn-success">Modifier</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function editStudent(id) {
      // /students/'+id c'est l'url de la route edit
      $.get('/students/' + id, function (student) {
        $("#student_id").val(student.id);
        $("#name2").val(student.name);
        $("#lname2").val(student.lname);
        $("#email2").val(student.email);
        $("#phone2").val(student.phone);
        $("#EditStudentModal").modal('toggle');


      });
    };

    $('#EditstudentForm').on('submit', function (e) {
      e.preventDefault();
      let id = $('#student_id').val();
      let name = $('#name2').val();
      let lname = $('#lname2').val();
      let email = $('#email2').val();
      let phone = $('#phone2').val();
      let _token = $("input[name=_token]").val();
      $.ajax({
        type: 'PUT',
        url: "{{route('update.students')}}",
        data: {
          id: id,
          name: name,
          lname: lname,
          email: email,
          phone: phone,
          _token: _token
        },
        success: function (response) {
          if (response) {
            // #sid c est le id de la <tr>
            $('#sid' + response.id + ' td:nth-child(2)').text(response.name);
            $('#sid' + response.id + ' td:nth-child(3)').text(response.lname);
            $('#sid' + response.id + ' td:nth-child(4)').text(response.email);
            $('#sid' + response.id + ' td:nth-child(5)').text(response.phone);
            $("#EditStudentModal").modal('toggle');
            $("#EditstudentForm")[0].reset();

            Swal.fire({
              position: 'top-center',
              icon: 'success',
              title: 'Modifié',
              showConfirmButton: false,
              timer: 1500
            })

          }
        }

      });


    });

  </script>

  <!-- {{-- script de suppression --}} -->
  <script>
    function deleteStudent(id) {

      $.ajax({
        url: '/students/' + id,
        type: 'DELETE',
        data: {
          _token: $("input[name=_token]").val()
        },
        success: function (response) {
          // #sid c'est le nom de id de la <tr>
          $("#sid" + id).remove();
          Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'Supprimé',
            showConfirmButton: false,
            timer: 1500
          })

        }
      });
    }
  </script>


  <!-- {{-- script pour checkbox --}} -->
  <script>
    $(function (e) {
      // checkAll c est le nom de id du <th> 
      $("#checkAll").click(function () {
        // checkBoxClass c est le nom de la class du <td>
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
      });
      $("#deleteall").click(function (e) {
        e.preventDefault();
        let allids = [];

        $("input:checkbox[name=ids]:checked").each(function () {
          allids.push($(this).val());
        });
        $.ajax({
          url: "{{route('delete.students')}}",
          type: "DELETE",
          data: {
            _token: $("input[name=_token]").val(),
            //  c est le name de la td du checkboxx
            ids: allids
          },
          success: function (response) {
            $.each(allids, function (key, val) {
              // "#sid" c est id de la <tr>
              $("#sid" + val).remove();
            })
          }
        });
      })
    });

  </script>
  <script>
    $('#reinitialise').on('click', function () {
      $('#name').val('');
      $('#lname').val('');
      $('#email').val('');
      $('#phone').val('');
    });

  </script>
</body>
@endif

</html>