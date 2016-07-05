<!-- insertar_proveedores.php -->
<div class=" col-sm-12" id="respuesta"></div>
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Nuevo Proveedor</h3>
  </div>
  <div class="panel-body">
<form autocomplete="off" id="proveedor" method="POST">
 
 <div class="form-group col-md-6"><br> 
    <label>
            Nombre
    </label>  
   
    <input type="text" class="form-control" id="nombre_proveedor" name="nombre_proveedor"  placeholder="Nombre del Proveedor"> 
</div> 

<div class="form-group col-md-2" style="margin-bottom: 10px"> <br> 
    <label>
         Tipo
    </label>        
     <select title="Tipo de Documento" id="tipo_documento" name="tipo_documento" class="form-control">
        <option value="V">V</option>
        <option value="J">J</option>
        <option value="G">G</option>
    </select>   
</div>   

<div class="form-group col-md-4">  <br> 
    <label>
         N° de Rif / Cedula
    </label>        
     
    <input type="text" onkeypress="return isNumberKey(event)" onkeyup="rif_cedula(this,'-',patron,true)" maxlength="10" class="form-control " id="numero_documento" name="numero_documento" placeholder="Numero de RIF/Cedula"> 

</div> 

 <br>
 
  <div style="margin-bottom: -11px;" class="form-group col-md-6"><br> 
    <label>
            Estado
    </label>      
    <select id="estado" name="estado" class="form-control">
        <?php 
            $wsqli ="select * from ubicacion";
            $result=$linki->query($wsqli);
            while($row=$result->fetch_array()){
                $ide=$row['id_ubicacion'];
                $ne=$row['estado'];
            ?>
                <option  value="<?php echo $ide; ?>">
                     <?php echo $ne; ?>
                </option>
            <?php
            }
            ?>
    </select>   
</div>
  
  <br>

<div class="form-group col-md-6"> <br>
    <label>
            Ciudad
    </label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="ciudad">  

</div> 
<br>
 
  <div style="margin-bottom: -11px;" class="form-group col-md-12"><br>
    <label>
            Dirección
    </label>
    <textarea style="resize: none;" placeholder="Dirección" name="direccion" id="direccion" class="form-control" rows="2"></textarea>
</div>
 
<br>

  <div style="margin-top: 10px;" class="form-group col-md-3"><br>
    <label>
            Codigo Tlf.
    </label>
    <input type="text" onkeypress="return isNumberKey(event)"  maxlength="4" class="form-control" id="codigo_telefono" name="codigo_telefono"   placeholder="Codigo de telefono"> 
</div>


  <div style="margin-top: 10px;" class="form-group col-md-3"><br>
    <label>
           N° Telefono
    </label>
    <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="numero_telefono" name="numero_telefono"  maxlength="7"  placeholder="Numero de Telefono"> 
</div>

  <div style="margin-top: 10px;" class="form-group col-md-6"><br>
    <label>
            Contacto
    </label>
    <input type="text"  class="form-control" id="nombre_contacto" name="nombre_contacto"   placeholder="Nombre de Contacto"> 
</div>

<br>
<div class="form-group col-md-12"><br> 
    <input type="submit" name="insertar" id="insertar" class="btn btn-success" value="Guardar Proveedor">   
</div>  
</form>
</div>
</div>
</div>
