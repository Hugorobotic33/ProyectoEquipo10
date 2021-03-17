console.log("hola");

//se selecciona el div que alamacenara los productos
const items=document.getElementById("items");

//se selcciona el div de la plantilla para cada producto
const templateCard=document.getElementById("template-card").content;


//crear fragment
const fragment=document.createDocumentFragment();


/*se lee la url que tiene los datos mediante fetch despues mediante una promesa con then recibe
 como parametro response que devolvera la data en json y otro then para verlo por consola*/





 
    let url="libros/";
    fetch(url)
     .then(response => response.json())
     .then((data) => {
                                                                                                 
        pintarDatos(data);
   })
  .catch(error=>console.log(error))


 
 
   




 
const pintarDatos=data=>{
    console.log(data);
   data.forEach(producto => {
       templateCard.querySelector('h5').textContent=producto.name;
       templateCard.querySelector('p').textContent=producto.paginas;
       templateCard.querySelector('h6').textContent=producto.autor;
       templateCard.querySelector('span').textContent=producto.genero;
       const clone=templateCard.cloneNode(true);

       fragment.appendChild(clone);
                                                                                               //    console.log(producto);
   });

   items.appendChild(fragment);

}














// function pintarDatos(data){
//    console.log(data);
// }