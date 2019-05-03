<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add
        </button>
    <br>
    <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('CrudController/create')?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp" placeholder="Enter nombre">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Rbd</label>
                        <input type="text" class="form-control" name="rbd" aria-describedby="emailHelp" placeholder="Enter rbd">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">fecha_Registro</label>
                        <input type="date" class="form-control" name="fecha_registro" aria-describedby="emailHelp" placeholder="Enter fecha_registro">
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>


        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">rbd</th>
                <th scope="col">fecha_registro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $row->id; ?></th>
                <td><?php echo $row->nombre; ?></td>
                <td><?php echo $row->rbd; ?></td>
                <td><?php echo $row->fecha_registro; ?></td>
                <td> <a href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>">Edit</a>  | 
                   <a href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?>">Delete</a> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

  </body>
</html>