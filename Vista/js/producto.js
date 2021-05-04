// function producto(id){

//     if(id==2){
//         console.log("romero");
//     }else if(id==3){
//         console.log("albahaca");
//     }else if(id==4){
//         console.log("ortiga");
//     }else if(id==6){
//         console.log("quina");
//     }else if(id==7){
//         console.log("aloe vera");
//     }else if(id==8){
//         console.log("moringa");
//     }

// }

// let prod = document.getElementById("prod");

// alert(prod.value);

    // if(prod.value==2){
    //     console.log("romero");
    // }else if(prod.value==3){
    //     console.log("albahaca");
    // }else if(prod.value==4){
    //     console.log("ortiga");
    // }else if(prod.value==6){
    //     console.log("quina");
    // }else if(prod.value==7){
    //     console.log("aloe vera");
    // }else if(prod.value==8){
    //     console.log("moringa");
    // }

   

    function producto(id){

        $('#selectMun').load('Vista/Modulos/ClienteModulos/ingresoProducto.php?idProd='+id,
        function(producto){
            producto = JSON.parse(producto);
            console.log(producto);
             $('#prodIngresado').empty();
             producto.forEach(function(prod){
                $('#prodIngresado').append('<tr> <td>'+prod.nombre+'</td> <td>'+prod.costo+'</td> <td>'+prod.cantidad_prod+'</td> <td>'+prod.estado+'</td> </tr>');
                
            })
        });

    }
