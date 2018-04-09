<!DOCTYPE html>

	<body>
	<script type="text/javascript">

			var countt=0;

			function sandwich1(){
				//alert("adsf");
				var quantity1=document.getElementById('quantity1').value;
				document.getElementById('total1').value=quantity1*4.75;
			
				//alert(quantity1);

				//var quantity1 = parseInt(document.getElementById('quantity1').value);
				//countt=countt+quantity1;
				//var tot1 = document.getElementById('total1').value = (quantity1 * 4.75);
				//return tot1;
					subtotal();
			}

			function sandwich2(){
				var v=document.getElementById('quantity2').value;
				document.getElementById('total2').value=v*5.50;
				subtotal();

				/*var quantity2 = parseInt(document.getElementById('quantity2').value);
				countt=countt+quantity2;
				var tot2 = document.getElementById('total2').value = (quantity2 * 5.50);
				return tot2;*/
			}

			function sandwich3(){
				var v=document.getElementById('quantity3').value;
				document.getElementById('total3').value=v*4.50;

				/*var quantity3 = parseInt(document.getElementById('quantity3').value);
				countt=countt+quantity3;
				var tot3 = document.getElementById('total3').value = (quantity3 * 4.50);
				return tot3;*/
				subtotal();
			}

			function salad1(){
				var v=document.getElementById('quantity4').value;
				document.getElementById('total4').value=v*2.50;
				subtotal();
				
				/*var quantity4 = parseInt(document.getElementById('quantity4').value);
				countt=countt+quantity4;
				var tot4 = document.getElementById('total4').value = (quantity4 * 2.50);
				return tot4;*/
	
			}

			function salad2(){
				var v=document.getElementById('quantity5').value;
				document.getElementById('total5').value=v*3.25;
				/*var quantity5 = parseInt(document.getElementById('quantity5').value);
				countt=countt+quantity5;
				var tot5 = document.getElementById('total5').value = (quantity5 * 3.25);
				return tot5;*/
				subtotal();
			}
			function drinks(){
				var v=document.getElementById('quantity6').value;
				document.getElementById('total6').value=v*1.75;

				/*var quantity6 = parseInt(document.getElementById('quantity6').value);
				countt=countt+quantity6;
				var tot6 = document.getElementById('total6').value = (quantity6 * 1.75);
				return tot6;*/
				subtotal();
	
			}

			function dessert1(){
				var v=document.getElementById('quantity7').value;
				document.getElementById('total7').value=v*1.50;
				subtotal();
			}

			function dessert2(){
				var v=document.getElementById('quantity8').value;
				document.getElementById('total8').value=v*2.25;

				/*var quantity8 = parseInt(document.getElementById('quantity8').value);
				countt=countt+quantity8;
				var tot8 = document.getElementById('total8').value = (quantity8 * 2.25);
				return tot8;*/
				subtotal();
	
			}

			function dessert3(){
				var v=document.getElementById('quantity9').value;
				document.getElementById('total9').value=v*1.75;

				/*var quantity9 = parseInt(document.getElementById('quantity9').value);
				countt=countt+quantity9;
				var tot9 = document.getElementById('total9').value = (quantity9 * 1.75);
				return tot9;*/
				subtotal();
	
			}

			function subtotal(){

				var subtotal=parseFloat(document.getElementById('total1').value)+parseFloat(document.getElementById('total2').value);
				//alert(subtotal);
				subtotal+=(parseFloat(document.getElementById('total3').value)+parseFloat(document.getElementById('total4').value));
				subtotal+=(parseFloat(document.getElementById('total5').value)+parseFloat(document.getElementById('total6').value));
				subtotal+=(parseFloat(document.getElementById('total7').value)+parseFloat(document.getElementById('total8').value));
				subtotal+=parseFloat(document.getElementById('total9').value);
				//alert(subtotal);
				document.getElementById('subtot').value = "$"+ subtotal;
				//subtot.value = "$"+ subtotal;
				//document.getElementById('qty').value = countt;
				//return subtotal;
			}

			function shiptotal(){

				var subtot = subtotal();
				var shiptotal = countt * 10;
				countt=0;
				document.getElementById('shippingtot').value = "$"+shiptotal;
				var totfinal = document.getElementById('ordertot').value = "$"+(shiptotal+subtot);
				//countt=0;
				return totfinal;
				
				
			}

			function confirm(){
				if(document.getElementById('subtot').value==0){
					alert("cart empty");
				}
				else{

				alert("Confirm");}
				
			}

			</script>
		<center>
			<h1>SANDWICH SHOP</h1>

		<table border="0">

			<form method="POST" id="memoform" onsubmit="return false;">	
				<tr bgcolor="grey">
					<th align="left">Sandwiches</th>
					<th>Quantity</th>
					<th>X</th>
					<th>Unit price</th>
					<th>=</th>
					<th>Total Price</th>
				</tr>

				<tr>
					<td>The Classic - Slices of your choice of meat* with lettuce, tomato, and cheese.</td>
					<td>
						<input type="number" id="quantity1" onkeypress=sandwich1()>
					</td>
					<td>X</td>
					<td>$4.75</td>
					<td>
						&nbsp=
					</td>
					<td>
						<input type="Number" id="total1"  value="0">
					</td>
				</tr>

				<tr>
					<td>Croissant Sandwich - Slices of your choice of meat* with lettuce, tomato, and cheese on a croissant.</td>
					<td>
						<input type="number" id="quantity2" onkeypress=sandwich2() >
					</td>
					<td>X</td>
					<td>$5.50</td>
					<td>
						&nbsp=
					</td>
					<td>
						<input type="Number" id="total2"  value="0">
					</td>
				</tr>

				<tr>
					<td>Veggie Wrap - Lettuce, tomato, peppers, olives, and cheese in an oversized tortilla wrap. * Meats include chicken, ham, turkey, and roast beef.</td>
					<td>
						<input type="number" id="quantity3" onkeypress=sandwich3()>
					</td>
					<td>X</td>
					<td>$4.50</td>
					<td>
						&nbsp=
					</td>
					<td>
						<input type="Number" id="total3"  value="0">
					</td>
				</tr>

				<tr>
					<th bgcolor="grey" colspan="6" align="left">Salad</th>
				</tr>
				<tr>
					<td>Caesar Salad - A classic salad with Ranch dressing.</td>
					<td>
						<input type="number" id="quantity4" onkeypress=salad1() >
					</td>
					<td>X</td>
					<td>$2.50</td>
					<td>
						&nbsp=
					</td>
					<td>
						<input type="Number" id="total4"  value="0">
					</td>
				</tr>

				<tr>
					<td>Grilled Chicken Salad - Strips of grilled chicken on top of salad with Ranch dressing.</td>
					<td>
						<input type="number" id="quantity5" onkeypress=salad2()>
					</td>
					<td>X</td>
					<td>$3.25 </td>
					<td>
						&nbsp=
					</td>
					<td>
						<input type="Number" id="total5"  value="0">
					</td>
				</tr>

				<tr>
					<th bgcolor="grey" colspan="6" align="left">Beverage</th>
				</tr>
				<tr>
					<td>Lemonade, Tea, Juices, and Soda</td>
					<td>
						<input type="number" id="quantity6" onkeypress=drinks() >
					</td>
					<td>X</td>
					<td>$1.75</td>
					<td>
						&nbsp=
					</td>
					<td>
						<input type="Number" id="total6"  value="0">
					</td>
				</tr>

				<tr>
					<th bgcolor="grey" colspan="6" align="left">Dessert</th>
				</tr>
				<tr>
					<td>Sundae - Vanilla ice-cream with chocolate syrup and a cherry.</td>
					<td>
						<input type="number" id="quantity7" onkeypress=dessert1()>
					</td>
					<td>X</td>
					<td>$1.50</td>
					<td>
						&nbsp=
					</td>
					<td>
						<input type="Number" id="total7"  value="0">
					</td>
				</tr>

				<tr>
					<td>Brownie Sundae - Vanilla ice-cream with chocolate syrup and a cherry on top of a warm brownie.</td>
					<td>
						<input type="number" id="quantity8" onkeypress=dessert2() >
					</td>
					<td>X</td>
					<td>$2.25</td>
					<td>
						&nbsp=
					</td>
					<td>
						<input type="text" id="total8" value="0">
					</td>
				</tr>

				<tr>
					<td>Freshly Baked Pie - A slice of warm pie. Flavors include cherry, blueberry, and apple.</td>
					<td>
						<input type="number" id="quantity9" onkeypress=dessert3()>
					</td>
					<td>X</td>
					<td>$1.75</td>
					<td>
						<button type="button">=</button>
					</td>
					<td>
						<input type="text" id="total9"  value="0">
					</td>
				</tr>
				<br>
				<tr>
					<td colspan="4" align="right">Product SUBTOTAL</td>
					<td align="center">
						<button type="button" onclick="subtotal();"> = </button>
					</td>
					<td>
						<input type="text" id="subtot">
					
					</td>
				</tr>
				<tr>
					
					<td colspan="6" align="right">
						<button type="button" onclick="confirm();"> Confirm Order </button>
					</td>
				</tr>
			</form>
		</table>
	
	</body>


</html>