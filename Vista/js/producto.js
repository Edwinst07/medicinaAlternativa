class Producto{

    constructor(idProducto,producto,precio){
        this._idProducto = idProducto;
        this._producto = producto;
        this._precio = precio;
        // this._cantidad = cantidad;
    }

    get idProducto(){
        return this._idProducto;
    }

    get producto(){
        return this._producto;
    }

    set producto(producto){
        this._producto = producto;
    }

    get precio(){
        return this._precio;
    }

    set precio(precio){
        this._precio = precio;
    }

    // get cantidad(){
    //     return this._cantidad;
    // }

    // set cantidad(cantidad){
    //     this._cantidad = cantidad;
    // }

}