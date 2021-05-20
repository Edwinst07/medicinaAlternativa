
    let = eliminarElemento= (idElemento) =>{

        $("#"+idElemento).remove();
    }

    let button_delete= '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" '
                    + ' class="bi bi-trash" viewBox="0 0 16 16"> '
                    + ' <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 '
                    + ' 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/> '
                    + ' <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 '
                    + ' 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> '
                    + ' </svg>';

    
    
    function agregarProductoCarrito(id,nombre,costo,cantidadMax){
        
        let sw=0;
        let Html='';
        let tam=document.getElementsByName('idProducto[]').length;
        for(k=0;k<tam;k++)
        {
            if(document.getElementsByName('idProducto[]')[k].value==id)
            {
                sw=1;
            }
        }
        if(sw==0)
        {
            //------------------------------

            Html +='<div class="row align-items-start">'
            +'<div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4">'
                +'<div class="col-group">'
                    +'<h5>'+nombre+'</h5>'
                    +'<input type="hidden" class="form-control" value="'+id+'" name="idProducto[]" id="idProducto'+id+'">'
                +'</div>'
            +'</div>'
            +'<div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">'
                +'<div class="col-group">'
                    +'<h5>$'+costo+'</h5>'
                    +'<input type="hidden" class="form-control" value="'+costo+'" name="costo[]" id="costo'+id+'">'
                +'</div>'
            +'</div>'
            +'<div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">'
                +'<div class="col-group">'
                    +'<input type="number" class="form-control cantidad" min ="1" max="'+cantidadMax+'" value="1" name="cantidad[]" id="cantidad'+id+'" onchange="actualizarTotalPedido();">'
                +'</div>'
            +'</div>'
            +'<div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">'
                +'<div class="col-group">'
                    +'<input type="number" class="form-control cantidad" value="" name="total[]" id="total'+id+'" readonly>'
                +'</div>'
            +'</div>'
            +'<div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2">'
                +'<div class="col-group">'
                    +'<button onclick="eliminarElemento(\'divProductoNuevo'+id+'\'); actualizarTotalPedido();" class="btn btn-danger">'+button_delete+'</button>'
                +'</div>'
            +'</div>'//Cierra columna
            +'</div>'
            +'<br>';//Cierra fila

            let ContenedorPadre=document.getElementById("productosAgregados");
            let divProductoNuevo=document.createElement('div');
            divProductoNuevo.setAttribute('id','divProductoNuevo'+id);
            ContenedorPadre.appendChild(divProductoNuevo)
            $("#"+divProductoNuevo.id).html(Html) ;
        }

        actualizarTotalPedido();
    } 

    let actualizarTotalPedido = () =>{
        let tam=document.getElementsByName('idProducto[]').length;
        let TotalPagar=0;
        for(k=0;k<tam;k++)
        {
            let valorTotal=parseFloat(document.getElementsByName('costo[]')[k].value) * parseFloat(document.getElementsByName('cantidad[]')[k].value);
            document.getElementsByName('total[]')[k].value=valorTotal;
            TotalPagar+=valorTotal;
        }

        let totalPedido = '<input type="number" class="form-control cantidad" id="totPagar" name="totalPagar" value="'+TotalPagar+'"  readonly>';

        
        $('#totalPagar').html(totalPedido);
    }


 
