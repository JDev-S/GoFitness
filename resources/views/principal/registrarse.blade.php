@extends('welcome') 

@section('contenido')

<div class="breadcrumb-wrapper ">
    <div class="container">
        <h1>Registrarse</h1>   </div>
</div>

<div id="main-content">
              <div class="container">
                  <div class="dt-sc-hr-invisible"></div>
                  <div class="dt-sc-hr-invisible"></div>
  
                    
                                          <section id="primary" class="content-full-width">
                    
                    <article id="post-8" class="post-8 page type-page status-publish hentry">
<div class="woocommerce">

		<h2>Formulario de registro</h2>
    <?php
    
    if(empty($message))
    {
        
    }
    else
    {
        echo '<h1>'.$message.'</h1>';
    }
    ?>
        <form method="POST" action={{route('registro')}}>
            {{ csrf_field() }}

		   <div  class='column dt-sc-one-third  space first'>	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Nombre(S)<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="nombre" id="nombre" value="" required>
			</p>
            </div>
            
            <div  class='column dt-sc-one-third  space ' >	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Apellido(S)<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="apellidos" id="apellidos" value="" required>
			</p>
            </div>
            
            <div  class='column dt-sc-one-third  space '>	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Fecha de nacimiento<span class="required">*</span></label>
				<input type="date" class="woocommerce-Input woocommerce-Input--text input-text" name="fecha_nacimiento" id="fecha_nacimiento" value="" required>
			</p>
            </div>
            
            <div  class='column dt-sc-one-third  space first' >	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Teléfono<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="telefono" id="telefono" value="" required>
			</p>
            </div>
            
            <div  class='column dt-sc-one-third  space '>	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Estado<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="estado" id="estado" value="" required>
			</p>
            </div>
            
            <div  class='column dt-sc-one-third  space ' >	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Ciudad<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="ciudad" id="ciudad" value="" required>
			</p>
            </div>
			
            
             <div  class='column dt-sc-one-third  space first'>	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Dirección<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="direccion" id="direccion" value="" required>
			</p>
            </div>
            
            <div  class='column dt-sc-one-third  space ' >	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Peso<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="peso" id="peso" value="" required>
			</p>
            </div>
            
            
            <div  class='column dt-sc-one-third  space'>	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Estatura<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="estatura" id="estatura" value="" required>
			</p>
            </div>
            
            <div  class='column dt-sc-one-third  space first' >	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Nombre de usuario<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="nombre_usuario" id="nombre_usuario" value="" required>
			</p>
            </div>
            
            <div  class='column dt-sc-one-third  space ' >	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Email<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="correo" id="correo" value="" required>
			</p>
            </div>
            
            <div  class='column dt-sc-one-third  space ' >	
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Password<span class="required">*</span></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="contraseña" id="contraseña" value="" required>
			</p>
            </div>

			
			<p class="form-row">
				<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="4c34c76378"><input type="hidden" name="_wp_http_referer" value="/my-account/">				<input type="submit" class="woocommerce-Button button" name="login" value="Mandar registro">

			</p>
		</form>


</div>
<div class="social-bookmark"></div>                    </article>
                  </section>
  
                  
              </div>
              <div class="dt-sc-hr-invisible-large"></div>
          </div>
@stop