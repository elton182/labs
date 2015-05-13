<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>

    <?php
        echo $this->Html->meta('icon');
 
        echo $this->Html->css('custom.css');
        echo $this->Html->css('bootstrap.min.css');
        echo $this->Html->script('jquery-2.1.3.min.js');
 
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
    <style>
	    body {      
	      padding-top: 20px;
	      padding-bottom: 20px;
	    }
	     
	    .navbar {
	      margin-bottom: 20px;
	    }
    </style> 
</head>
<body>
 
<div class="container">
    <div class="logo"></div>
    <div class="login">          
    <?php 

      if (!empty(AuthComponent::user())){          
        echo '<h5>Bem vindo <a href="">'.AuthComponent::user('username').'</a> (<a href="/ecomerce/users/logout">Sair</a>)</h5>';        
      }
      else {
        echo '<h5>Bem vindo visitante, '. '<a href="/ecomerce/users/login" >Entre</a>'. ' ou <a href="/ecomerce/users/signup" >Cadastre</a></h5>' ;
        
      }      
    ?>      
    </div>
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">      
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/ecomerce">Home</a>                
      </div>
     
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
          <?php
            if (!empty($categories)){
            foreach ($categories as $category):
            echo '<li>';
            echo $this->Html->link($category['Category']['description'], array('controller'=>'products','action'=>'index','?'=>array('category'=>$category['Category']['id'])),array('escape'=>false));

            echo '</li>';
            endforeach;
            }
            
          ?>                  
        </ul>
        <form class="navbar-form navbar-left" role="search" method="post" action="/ecomerce/products/search">
          <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default" value="a"><span class="glyphicon glyphicon-search"</span></button>
        </form>

        <ul class="nav navbar-nav navbar-right">          

          <li>
      			<?php 
              
              echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart <span class="badge" id="cart-counter">'.$count.'</span>',
                array('controller'=>'carts','action'=>'view'),array('escape'=>false));
              
            ?>                                      
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

     
    <?php echo $this->fetch('content'); ?>
    <div class="footer">
    <footer class="text-center">    
    <h6>Ecomerce - CNPJ:12.123.123/0001-00 / Endereço: Av. Antônio Pincinato, 1236 Jundaí - SP</h6>    
    </footer>
    </div>
     
</div>
     
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>