<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Usuários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
</head>
<body>
  <?php include('navbar.php'); ?>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Lista de Usuários
              <a href="aluno-create.php" class="btn btn-primary float-end">Adicionar usuário</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Data nascimento</th>
                  <th>Ações</th>
                </tr>
              </thead>
            <tbody>
              <tr>
                  <td>1</td>
                  <td>test1</td>
                  <td>@gmail.com</td>
                  <td>1/1/1111</td>
                  <td>
                <a href="" class="btn btn-secondary btn-sm">
                    Visualizar
                </a>
                <a href="" class="btn btn-success btn-sm">
                    Editar
                </a>
                <form action="" method="POST" class="d-inline">
                <button type="submit" name="delete_usuario" value="1" class="btn btn-danger btn-sm">
                  Excluir
                </button>
                </form>
                </td>
                </tr>
            </tbody>
             </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-...YypcrYf0t3Y1HB6ONNnkC5s9fDVZLE5AA5NDz0xhyGkcIds1k1en7N6j1ehZ" crossorigin="anonymous"></script>
</body>
</html>
