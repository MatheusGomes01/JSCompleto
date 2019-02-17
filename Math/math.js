Math.min(1,2,3) //retorna o menor valor no caso 1
Math.max(1,2,3) //retorna o maior valor no caso 3
Math.round(55,50) //arredonda para o mais proximo
Math.floor(55,50) //arredonda para baixo
Math.ceil(55,1) //arredonda para cima
Math.pow(2,3)
Math.pow(2,3) ||  2**3 //resultado de um numero a sua potencia
Math.sqrt(25) //raiz quadrada do numero
Math.cbrt(25) //raiz cubica do numero
Math.random() // retorna um randomico de 0 até 0.9999999999 (quase 1)
Math.PI //Retorna o PI

var fn_sortear = (n) => {
	var _n = n || 1;
	var nSorteado = Math.random();

	nSorteado = nSorteado*_n;
	nSorteado = Math.floor(nSorteado);

	return nSorteado;
}
