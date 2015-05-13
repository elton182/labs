<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home','/');?>
            </li>
            <li class="active">Cart</li>
        </ol>
    </div>
</div>
 
<?php echo $this->Form->create('Cart',array('url'=>array('action'=>'update')));?>
<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $total=0;?>
                <?php foreach ($products as $product):?>
                <tr>
                    <td><?php echo $product['Product']['name'];?></td>
                    <td>$<?php echo $product['Product']['price'];?>
                    </td>
                    <td><div class="col-xs-3">
                            <?php echo $this->Form->hidden('product_id.',array('value'=>$product['Product']['id']));?>
                            <?php echo $this->Form->input('count.',array('type'=>'number', 'label'=>false,
                                    'class'=>'form-control input-sm', 'value'=>$product['Product']['count']));?>
                        </div></td>
                    <td>$<?php echo $count*$product['Product']['price']; ?>
                    </td>
                    <td>
                    
                    <?php
                        //echo $this->Form->create('Cart',array('url'=>array('action'=>'delete')));
                        
                        echo '<a href="/ecomerce/carts/delete/?delete='.$product['Product']['id'].'"">Delete</a>';
                        //echo $this->Form->hidden('product_id.',array('value'=>$product['Product']['id']));
                        //echo $this->Form->submit('Delete',array('class'=>'btn btn-danger'));

                        //echo $this->Form->end();

                    ?>     
                    </td>
                </tr>
                <?php $total = $total + ($count*$product['Product']['price']);?>
                <?php endforeach;?>
 
                <tr class="success">
                    <td colspan=3></td>
                    <td>$<?php echo $total;?>
                    </td>
                    <td></td>                    
                </tr>
            </tbody>
        </table>        
        <p class="text-right">
            <?php echo $this->Form->submit('Update',array('class'=>'btn btn-warning','div'=>false));?>
            <a class="btn btn-success"
                onclick="alert('Implement a payment module for buyer to make a payment.');">CheckOut</a>
        </p>
 
    </div>
</div>
<?php echo $this->Form->end();?>