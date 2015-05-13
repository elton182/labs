
<?php 
	
	echo $this->Session->flash();
	
	echo '<div clas="row">';	
	echo '<div clas="col-sm-4 col-md-4">';
	echo $this->form->create('Product');
	echo $this->form->input('Nome',array('class' => 'form-control', 'value' =>$product['Product']['name'], 'required' => 'true'));
	echo $this->form->label('Descrição');
	echo $this->form->textarea('Descrição',array('class' => 'form-control', 'value' =>$product['Product']['description']));
	echo $this->form->input('Preço',array('class' => 'form-control', 'value' =>$product['Product']['price']));
	echo $this->form->input('Imagem',array('class' => 'form-control', 'value' =>$product['Product']['image']));
	//echo $this->form->com('Category');
	echo $this->form->submit('Gravar');
	echo $this->form->end();
	
	echo '</div>';
	echo '</div>';
?>