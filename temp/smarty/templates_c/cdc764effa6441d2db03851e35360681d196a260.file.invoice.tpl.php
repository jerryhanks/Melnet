<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-29 12:40:48
         compiled from "C:\wamp\www\melnet\temp\smarty\templates\invoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26190550fee57f01d45-04593260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdc764effa6441d2db03851e35360681d196a260' => 
    array (
      0 => 'C:\\wamp\\www\\melnet\\temp\\smarty\\templates\\invoice.tpl',
      1 => 1440844845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26190550fee57f01d45-04593260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550fee580b3544_94010986',
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
<?php if ($_valid && !is_callable('content_550fee580b3544_94010986')) {function content_550fee580b3544_94010986($_smarty_tpl) {?><?php echo '<script'; ?>
 src="../js/invoice.js" ><?php echo '</script'; ?>
>
<div id="page-wrap" data-role="none">
  
		<h2 id="invoice_header" class="center">INVOICE</h2>
		
		<div id="identity">
		
            <p data-role="none" id="address">
	      Norman Industries Ltd.,
	      35 Simpsons Street, P.O.Box 35 Lagos.
	      <br/>Mandilas Phone:01 791 8387,01 793 6522
	      <br/>email:-norman@mandilasng.com, norman_mandilas@multilinks.com
	      <br/>website:-www.mandilasng.com
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
                    <td><textarea data-role="none" id="invoiceNumber"><?php echo $_smarty_tpl->tpl_vars['invoiceNumber']->value;?>
</textarea></td>
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
                    <td><textarea id="invoiceDate" class="date" data-role="none">December 15, 2009</textarea></td>
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
		      <th>Stock Code</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		      </tr>
		<?php echo $_smarty_tpl->tpl_vars['stockRows']->value;?>
			  
		  <tr id="hiderow">
		    <td colspan="6">&nbsp;<br/>&nbsp;<br/>&nbsp;<br/></td>
		  </tr>
		  
		  <tr>
		      <td colspan="4" class="blank"> </td>
		      <td colspan="1" class="total-line">Labour</td>
		      <td class="total-value"><del>N</del><span id="labourcost"><?php echo $_smarty_tpl->tpl_vars['labour']->value;?>
</span></td>
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
		  <p><button data-role="none" id="print_invoice" class="invoice_button">Print Invoice</button><button data-role="none" id="save_invoice" class="invoice_button">Save Invoice</button></p>
		</div>
	
	</div><?php }} ?>
