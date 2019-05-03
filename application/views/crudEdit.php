<?php $this->load->view('includes/header');?>
    <div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $row->nombre; ?>" aria-describedby="emailHelp" placeholder="Enter nombre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Rbd</label>
                <input type="text" class="form-control" name="rbd" value="<?php echo $row->rbd; ?>" aria-describedby="emailHelp" placeholder="Enter rbd">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Fecha Registro</label>
                <input type="date" class="form-control" name="fecha_registro" value="<?php echo $row->fecha_registro; ?>" aria-describedby="emailHelp" placeholder="Enter fecha_registro">
            </div>
            <button type="submit" class="btn btn-primary" value="save">Submit</button>
            <a href="<?php echo site_url('CrudController')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>  
    </div>


  </body>
</html>