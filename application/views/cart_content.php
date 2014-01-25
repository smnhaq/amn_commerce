<?php
$cdata = $this->cart->contents();
// echo '<pre>';
//  print_r($cdata);
//  exit();
?>

<script>
    $(document).ready(function() {
        $("tr:even").css("background-color", "#DFDFDF");
    });
</script>
<div class="view_cart">
    <table class="table_view_cart">
        <thead>
            <tr>

                <th>Image</th>
                <th>Item Name</th>
                <th>QTY</th>
                <th>Unit Price</th>
                <th>Total</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($cdata as $items) { ?>
                <tr>

                    <td style="text-align: center"><img src="<?php echo $items['image']; ?>" width="50" height="50"></td>
                    <td style="text-align: center;"><?php echo $items['name']; ?></td>
                    <td style="text-align: center;">
                        <form action="<?php echo base_url(); ?>cart/update_cart" method="post">
                            <input type="hidden" name="rowid" value="<?php echo $items['rowid']; ?>">
                            <input style="width: 30px;" type="text" name="qty" value="<?php echo $items['qty']; ?>" >
                            <input type="submit" value="Update"/>
                        </form>
                    </td>
                    <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?>&nbsp;Tk.</td>
                    <td style="text-align:right"><?php echo $this->cart->format_number($items['subtotal']); ?>&nbsp;Tk.</td>
                    <td style="width: 100px; text-align: center">
                        <a href="<?php echo base_url(); ?>cart/update_cart/<?php echo $items['rowid']; ?>/<?php echo $items['qty']; ?>"><img src="<?php echo base_url(); ?>images/pen_icon.png" alt="" border="0" width="16" height="16" /></a> &nbsp;&nbsp;
                        <a href="<?php echo base_url(); ?>cart/delete_item/<?php echo $items['rowid']; ?>"><img src="<?php echo base_url(); ?>images/cross.png" alt="" border="0" width="16" height="16" /></a>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="3"> </td>
                <td class="right"><strong>Sub-Total</strong></td>
                <td class="right"><?php echo $this->cart->format_number($this->cart->total()); ?>&nbsp;Tk.</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3"> </td>
                <td class="right"><strong>Vat</strong></td>
                <td class="right"><?php echo '0' ?>&nbsp;Tk.</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3"> </td>
                <td class="right"><strong>Total</strong></td>
                <td class="right"><?php echo $this->cart->format_number($this->cart->total()); ?>&nbsp;Tk.</td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="view_cart_button_sh_che">
    <div class="title_box float_left"><a href="<?php echo base_url(); ?>">Shopping Continue</a></div>
    <div class="title_box float_right"><a href="<?php echo base_url()?>checkout/customer_area">Checkout</a></div>
</div>