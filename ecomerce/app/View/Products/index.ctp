<div class="row">
    <?php foreach ($products as $product):?>
    <div class="col-sm-4 col-md-4">
        <div class="">
            <?php 
                if (!empty($product['Product']['image'])){                    
                    echo $this->Html->link($this->Html->image($product['Product']['image'],['alt' => 'No Image recorded']),
                        array('action'=>'view',$product['Product']['id']),
                        array('escape'=>false,'class'=>'thumbnail'));                    
                }
                else {
                    echo $this->Html->link($this->Html->image('#',['alt' => 'No Image recorded']),
                        array('action'=>'view',$product['Product']['id']),
                        array('escape'=>false,'class'=>'thumbnail'));                                        
                    
                }
            ?>    
            <div class="caption">
                <h5>
                    <?php echo $product['Product']['name'];?>
                </h5>
                <h5>
                    Price: $
                    <?php echo $product['Product']['price'];?>
                </h5>
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div>