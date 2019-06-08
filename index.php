<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">	
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Subtotal & Grandtotal | Rahul Barui ( Php Developer ) </title>
	
	<!-- Use The Latest JQuery Library -->
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
            $(document).ready(function() {
				$('.marks1,.subtotal,.marks2,.subtotal2,.marks3,.subtotal3').keyup(function () {
				
					//____________$('.marks1,.subtotal,......') ___________ Called Multiple Classes Using This Way
				
					// __________ Getting the value from textboxex __________________
					
					var subtot1 = $("#subtot1").val();
					var subtot2 = $("#subtot2").val();
					var subtot3 = $("#subtot3").val();
					var grandtotal = $("#grandtotal").val();
					
					// __________ Code For Subtotal-1 [ Beng + Eng ] __________________
					
					var getSubTotal1 = null;
					$('.marks1').each(function() {
						getSubTotal1 += Number($(this).val());
					});
					if(getSubTotal1!=''){
						$('#subtot1').val(getSubTotal1.toFixed(2));
					} else {
						$('#subtot1').val(null);
					}
					
					// __________ Code For Subtotal-2 [ Math + Phy + Lsc ] __________________
					
					var getSubTotal2 = null;
					$('.marks2').each(function() {
						getSubTotal2 += Number($(this).val());
					});
					if(getSubTotal2!=''){
						$('#subtot2').val(getSubTotal2.toFixed(2));
					} else {
						$('#subtot2').val(null);
					}
					
					// __________ Code For Subtotal-3 [ Hist + Geo ] __________________
					
					var getSubTotal3 = null;
					$('.marks3').each(function() {
						getSubTotal3 += Number($(this).val());
					});
					if(getSubTotal3!=''){
						$('#subtot3').val(getSubTotal3.toFixed(2));
					} else {
						$('#subtot3').val(null);
					}
					
					// __________ Code For GRAND TOTAL __________________
					
					var grandtot = (Number(getSubTotal1)+Number(getSubTotal2)+Number(getSubTotal3));
					$("#grandtotal").val(grandtot.toFixed(2));
				})
			})
	</script>

</head>

<body>
		<div>     
		</div>   
		<h2 align="center"> <font color="#0000CC">Calculate Subtotal and Grandtotal Using JQuery (Keyup) </font></h2> 
		<hr />
		
		<table cellspacing="5px" cellpadding="5%"; align="center">
			<tr>  
				<td  align="right" class="style1">Bengali :</td>  
				<td class="style1"><input type="number" class="marks1" step="0.01" min="0" name="beng" /></td>  
			</tr>
			<tr>  
              <td align="right">English :</td>  
              <td><input type="number" name="eng" class="marks1" step="0.01" min="0" /></td>  
			  <td><input type="text" name="subtot" class="subtotal" id="subtot1" placeholder="Subtotal [ Beng+Eng ]" readonly="" tabindex="-1" /></td>  
       		</tr>
			
			<tr>  
				<td  align="right" class="style1">Mathematics :</td>  
				<td class="style1"><input type="number" class="marks2" step="0.01" min="0" name="math" /></td>  
			</tr>
			<tr>  
				<td  align="right" class="style1">Life Science :</td>  
				<td class="style1"><input type="number" class="marks2" step="0.01" min="0" name="lsc" /></td>  
			</tr>
			<tr>  
              <td align="right">Phy Science :</td>  
              <td><input type="number" name="psc" class="marks2" step="0.01" min="0" /></td>  
			  <td><input type="text" name="subtot_sc" class="subtotal2" id="subtot2" placeholder="Subtotal [ Math+Lsc+Psc ]" readonly="" tabindex="-1" /></td>  
       		</tr>
			
			<tr>  
				<td  align="right" class="style1">History :</td>  
				<td class="style1"><input type="number" class="marks3" step="0.01" min="0" name="hist" /></td>  
			</tr>
			<tr>  
              <td align="right">Geography :</td>  
              <td><input type="number" name="geo" class="marks3" step="0.01" min="0" /></td>  
			  <td><input type="text" name="subtot" class="subtotal" id="subtot3" placeholder="Subtotal [ Hist+Geo ]" readonly="" tabindex="-1" /></td>  
       		</tr>
			
			<tr>  
              <td align="right"><b>Grand Total :</b></td>  
              <td><input type="text" id="grandtotal" placeholder=" [ Subtotal (1+2+3) ]" readonly="" /></td>  
			 <!-- <td><input type="text" name="avg" class="avg" id="avg_id" placeholder=" Avg [ Tot Marks / Tot Sub ]" readonly="" /></td>  -->
       		</tr>
			
			<tr>  
				<td> <input type="button" value="Submit" align="right"/>
				<input type="button" value="Reset" /></td>  
        	</tr> 
			
		</table>
		<hr />
</body>
</html>
