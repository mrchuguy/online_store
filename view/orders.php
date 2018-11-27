<?php
    $obj_orders = new OrdersModel();
    $orders = $obj_orders->getOrder();
?>
<table>
<?php 
    foreach($orders as $order){
        if($order['status']==='not processed'){
?>
            <tr>  
                <td><?= $order['name'].' '.$order['surname']?></td>
                <td><?= $order['comment']?></td>
                <td><?= $order['status']?></td>
                <td>
                    <form method="post">
                        <input type="submit" value="add to processed">
                        <input type="hidden" name="action" value="change_status_order">
                        <input type="hidden" name="id" value="<?= $order['id']?>">
                    </form>
                </td>
            </tr>
<?php
        }
    }
    foreach($orders as $order){
        if($order['status']==='processed'){
?>
            <tr>  
                <td><?= $order['name'].' '.$order['surname']?></td>
                <td><?= $order['comment']?></td>
                <td><?= $order['status']?></td>
            </tr>
<?php
        }
    }
?>
</table>