<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home','/');?>
            </li>
            <li class="active"><?php echo $product['Product']['name'];?>
            </li>
        </ol>
    </div>
</div>
 
<div class="row">
    <div class="col-lg-4 col-md-4">
        <?php 
            echo $this->Html->image($product['Product']['image'],array('class'=>'thumbnail'));
        ?>
    </div>
    <div class="col-lg-1 col-md-1"></div>    
    <div class="col-lg-6 col-md-6">
        <h1>
            <?php echo $product['Product']['name'];?>
        </h1>
        <h2>
            Price: $
            <?php echo $product['Product']['price'];?>
        </h2>
            Quantity in stock: 
            <?php echo $product['Product']['quantity'];?>
        <p>
            <?php 
                echo $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add')));
            ?>
            <?php 
                echo $this->Form->hidden('product_id',array('value'=>$product['Product']['id']))
            ?>
            <?php

                echo $this->Form->submit('Add to cart',array('class'=>'btn-success btn btn-lg'));
            ?>
            <?php echo $this->Form->end();?>
        </p>
    </div>
</div>
        

<script>
    $(document).ready(function(){
        $('#add-form').submit(function(e){
            e.preventDefault();
            var tis = $(this);
            $.post(tis.attr('action'),tis.serialize(),function(data){
                $('#cart-counter').text(data);
            });
        });
    });
</script>