<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-09-08 00:42:35
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\preformer_invoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1906455e9bcc2734e49-97881383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21d328d89b0f6b32702bd742b4a7c2b4c8262898' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\preformer_invoice.tpl',
      1 => 1441665748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1906455e9bcc2734e49-97881383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55e9bcc27a62e3_76859929',
  'variables' => 
  array (
    'customer' => 0,
    'invoiceNumber' => 0,
    'jobid' => 0,
    'stockRows' => 0,
    'labour' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9bcc27a62e3_76859929')) {function content_55e9bcc27a62e3_76859929($_smarty_tpl) {?><?php echo '<script'; ?>
 src="../js/preformerInvoice.js" ><?php echo '</script'; ?>
>
<div id="page-wrap" data-role="none">
  
		<h2 id="invoice_header" class="center">PREFORMER INVOICE</h2>
		
		<div id="identity">
		  <div id="logo_carrier">
              <img id="image_carrie" src="../css/images/carrierLogo.png" alt="logo" />
            </div>
		
            <p data-role="none" id="address_job_card">
	      <strong class="main-title">Norman Industries Ltd.</strong>
	      <br/><strong>Mandilas Building:</strong>35 Simpsons Street, P.O.Box 35 Lagos.Tel:234-0-8129017302,08129017310 
	     <br/>email:-norman@mandilasng.com,website:-www.mandilasng.com.
	    </p>

            <div id="logo">
              <img id="image" src="../css/images/norman.jpg" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer" data-role="none">
		  <p data-role="none"><label  class="customer-title">Customer:</label>
		    <label data-role="none" id="customer-name"  >
	      Union Bank Nig. Plc,<br/>	      
	      Major Projects Department,<br/>	      
	      3<sup>rd</sup> Floor, Stallion Plaza,<br/>
	      36 Marina Lagos.<br/><br/>
	      
		<em class="customer-titles">Branch:<?php echo $_smarty_tpl->tpl_vars['customer']->value;?>
</em>
		    </label>
		    </p>
			
            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td id="invoiceNumber"><?php echo $_smarty_tpl->tpl_vars['invoiceNumber']->value;?>
</td>
                </tr>
		<tr>
                    <td class="meta-head">TIN:</td>
                    <td>01669305-0001</td>
                </tr>
		<tr>
                    <td class="meta-head">VAT REG NO:</td>
                    <td>1KV 160029679</td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td id="invoiceDate" class="date" >December 15, 2009</td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><span class="due" data-role="none" id="amountDue">875.00</span></td>
                </tr>
		<tr>
                    <td class="meta-head">Job ID</td>
                    <td><span class="jobid" data-role="none" id="jobid"><?php echo $_smarty_tpl->tpl_vars['jobid']->value;?>
</span></td>
                </tr>

            </table><!--End of meta table-->
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>S/N</th>
		      <th>Model No</th>
		      <th>Description</th>
		      <th>Rate</th>
		      <th>Quantity</th>
		      <th>Price</th>
		      </tr>
		<?php echo $_smarty_tpl->tpl_vars['stockRows']->value;?>
			  
		  <tr id="hiderow">
		    <td> <input type="button"  onclick="addInvoiceRow();"data-icon="plus" id="preformer_add_row" data-iconpos="notext" value="Icon only"></td>
		    <td colspan="5">&nbsp;<br/>&nbsp;<br/></td>
		    
		  </tr>
		  
		  <tr>
		      <td colspan="4" class="blank"> </td>
		      <td colspan="1" class="total-line">Labour</td>
		      <td class="total-value"><del>N</del><textarea  data-role="none" id="labourcost"><?php echo $_smarty_tpl->tpl_vars['labour']->value;?>
</textarea></td>
		  </tr>
		  <tr>
		      <td colspan="4" class="blank"> </td>
		      <td colspan="1" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">80.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="4" class="blank"> </td>
		      <td colspan="1" class="total-line">VAT</td>
		      <td class="total-value"><div id="vat">80.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="4" class="blank"> </td>
		      <td colspan="1" class="total-line">Total</td>
		      <td class="total-value"><div id="total">875.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="4" class="blank"> </td>
		      <td colspan="1" class="total-line">Amount Paid</td>

		      <td class="total-value"><span><strong><del>N</del></strong><textarea  data-role="none" id="paid">0.00</textarea></span></td>
		  </tr>
		  <tr>
		      <td colspan="4" class="blank"> </td>
		      <td colspan="1" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due" id="due">875.00</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <p>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</p>		  
		  <p>A 15% VAT is applied to the overall purchase</p>
		  <p><button data-role="none" id="print_invoice" class="invoice_button">Print Invoice</button><button data-role="none" id="save_pref_invoice" class="invoice_button">Save Invoice</button></p>
		</div>
	
	</div>
<?php }} ?>
