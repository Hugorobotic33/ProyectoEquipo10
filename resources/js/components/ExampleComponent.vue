<template>
    <div class="container">
        <div>
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#guardarModal"><i class="bi bi-plus-circle"></i></button>
        </div>
        
        <div class="row justify-content-center">
            
                    
                     <table class="table table-hover table-striped">
                         
                            <thead>
                                
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Editorial</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Genero</th>
                                <th scope="col">Precio</th>
                                <th scope="col">ISBN</th>
                                <!--libro-->
                                <!-- <th scope="col">Image</th> -->
                                <!--finlibro-->
                                <th scope="col">Acciones</th>
                                
                            </thead>
                            <tbody>
                              <tr v-for="libro in librosxd" :key="libro.id">
                                  <td v-text="libro.id"></td>
                                  <td v-text="libro.name"></td>
                                  <td v-text="libro.editorial"></td>
                                  <td v-text="libro.autor"></td>
                                  <td v-text="libro.genero"></td>
                                  <td v-text="libro.paginas"></td>
                                  <td v-text="libro.isbn"></td>
                                  <!--libro-->
                                  <!-- <td v-text="libro.image"></td> -->
                                  <!--libro-->
                                  <td>
                                      <button type="button" class="btn btn-danger" @click="deleteBook(libro)"><i class="bi bi-trash"></i></button>
                                      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#actualizarModal" @click="loadBook(libro)"><i class="bi bi-pencil-square"></i></button>
                                  </td>

                              </tr>

                            </tbody>

                        </table> 




                <!--modal para añadir un nuevo libro--> 

<div class="modal fade" id="guardarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Añadir Libro</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>


              <div class="modal-body">
                <!--formdata enctype="multipart/form-data" method="POST"-->
                <form>
                <!--end-->
                 <div class="form-group">
                  <label for="nom" class="col-form-label">Nombre:</label>
                    <input type="text" v-model="name" class="form-control" id="nom">
                 </div>

                <div class="form-group">
                      <label for="edit" class="col-form-label">Editorial:</label>
                      <input type="text" v-model="editorial" class="form-control" id="edit">
                    
                </div>
                <div class="form-group">
                      <label for="aut" class="col-form-label">Autor:</label>
                      <input type="text" v-model="autor" class="form-control" id="aut">
                    
                </div>
                <div class="form-group">
                      <label for="gen" class="col-form-label">Genero:</label>
                      <input type="text" v-model="genero" class="form-control" id="gen">
                    
                </div>
                <div class="form-group">
                      <label for="pag" class="col-form-label">Precio:</label>
                      <input type="text" v-model="paginas" class="form-control" id="pag">
                    
                </div>
                <div class="form-group">
                      <label for="isb" class="col-form-label">ISBN:</label>
                      <input type="text" v-model="isbn" class="form-control" id="isb">
                    
                </div>

                <!--libro-->
                  <div class="form-group">
                      <label for="image" class="col-form-label">Imagen:</label>
                      <input type="text" v-model="image" class="form-control" id="image">
                    
                </div>
               <!--finlibro--> 
                 
                 
              </form>
            </div>


              <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                   <button  @click="addBook()" type="button" class="btn btn-primary" id="guardar">Guardar</button>
              </div>
           </div>
    </div>
</div>

                     <!--Modal para actualizar libro-->

<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Actualizar Libro</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>


              <div class="modal-body">
                <form>
                 <div class="form-group">
                  <label for="nom" class="col-form-label">Nombre:</label>
                    <input type="text" v-model="name" class="form-control" id="nom">
                 </div>

                <div class="form-group">
                      <label for="edit" class="col-form-label">Editorial:</label>
                      <input type="text" v-model="editorial" class="form-control" id="edit">
                    
                </div>
                <div class="form-group">
                      <label for="aut" class="col-form-label">Autor:</label>
                      <input type="text" v-model="autor" class="form-control" id="aut">
                    
                </div>
                <div class="form-group">
                      <label for="gen" class="col-form-label">Genero:</label>
                      <input type="text" v-model="genero" class="form-control" id="gen">
                    
                </div>
                <div class="form-group">
                      <label for="pag" class="col-form-label">Precio:</label>
                      <input type="text" v-model="paginas" class="form-control" id="pag">
                    
                </div>
                <div class="form-group">
                      <label for="isb" class="col-form-label">ISBN:</label>
                      <input type="text" v-model="isbn" class="form-control" id="isb">
                    
                </div>
                <div class="form-group">
                      <label for="image" class="col-form-label">Imagen:</label>
                      <input type="text" v-model="image" class="form-control" id="image">
                    
                </div>
                 
                 
              </form>
            </div>


              <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                   <button  @click="updateBook()" type="button" class="btn btn-primary" id="guardar">Guardar</button>
              </div>
           </div>
    </div>
</div>

    


















               
        
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
       
        data(){

            return {
                name:"",
                editorial:"",
                autor:"",
                genero:"",
                paginas:"",
                isbn:"",
                image:"",
                update:0,
                librosxd:[],
                
            }  
        },
         mounted() {
             this.getLibros();
             console.log('Component mounted.');
        },
        methods:{
               getLibros:function(){
               axios.get("/libros")
               .then(response=>this.librosxd=response.data);
                },

                // obtenerImage(e){

                //   this.image=e.target.files[0];
                  

                  // this.image=e.target.files[0];
                //   file.readAsDataUrl(e.target.files[0]);
                //   console.log(e.target.files[0]);

                //  var file=new FileReader();

                // if (file.readAsDataURL) {

                //  file.readAsDataURL(e.target.files[0]);

                // }else if (file.readAsDataurl) {

                //   file.readAsDataurl(e.target.files[0]);
                //  }
               
                // file.onload=(e)=>{
                //   this.image=e.target.result;
                //  }
                // console.log(this.image);
                // console.log("xd");
                // },


            

               deleteBook(data){
                   let xd=this;
                   let libro_id=data.id;
                   if(confirm("Seguro que quieres eliminar el libro "+data.name+"?")){
                       axios.delete("libros/delete/"+ libro_id)
                       .then(function(response){
                           xd.getLibros();
                        })
                       .catch(function(error){
                           console.log("error")
                           })
                   }

                 },


                 loadBook(data){
                    this.update=data.id;
                 
                   let xd=this;
                   let url="libros/buscar/"+this.update;
                   axios.get(url).then(function(response){
                       xd.name=response.data.name;
                       xd.editorial=response.data.editorial;
                       xd.autor=response.data.autor;
                       xd.genero=response.data.genero;
                       xd.paginas=response.data.paginas;
                       xd.isbn=response.data.isbn;
                       xd.image=response.data.image;

                   }).catch(function(error){
                       console.log(error);
                   })
                  

                 },


                 updateBook(){
                   

                   let xd=this;
                   let url="libros/update/"+this.update;
                   axios.put(url,{
                     "id":this.update,
                     "name":this.name,
                     "editorial":this.editorial,
                     "autor":this.autor,
                     "genero":this.genero,
                     "paginas":this.paginas,
                     "isbn":this.isbn,
                     "image":this.image,

                   }).then(function(response){
                     
                     xd.getLibros();
                     xd.limpiarCampos();
                     $("[data-dismiss=modal]").trigger({ type: "click" });
                   })
                   .catch(function(error){
                     console.log(error);
                   });

                 },




                addBook(){
                  
                 
                    // const fd= new FormData();
                    // const re=fd.append('image',this.image);
                    let xd=this;
                    let url="libros/guardar";
                    axios.post(url,{
                        'name':this.name,
                        'editorial':this.editorial,
                        'autor':this.autor,
                        'genero':this.genero,
                        'paginas':this.paginas,
                        'isbn':this.isbn,
                        'image':this.image
                        
                        
                    }).then(function(response){
                      xd.getLibros(),
                      xd.limpiarCampos()
                      $("[data-dismiss=modal]").trigger({ type: "click" });
                     

                    }).catch(function(error){
                        console.log(error);
                    });


                },

                  limpiarCampos(){
                  this.name="",
                  this.editorial="",
                  this.autor="",
                  this.genero="",
                  this.paginas="",
                  this.isbn="",
                  this.image="",
                  this.update=0;
                },
        }
    }
</script>
