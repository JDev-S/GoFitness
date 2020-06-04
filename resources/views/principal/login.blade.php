@extends('welcome') 

@section('contenido')

<div class="breadcrumb-wrapper ">
    <div class="container">
        <h1>Iniciar sesión</h1>   </div>
</div>

<div id="main-content">
              <div class="container">
                  <div class="dt-sc-hr-invisible"></div>
                  <div class="dt-sc-hr-invisible"></div>
  
                    
                                          <section id="primary" class="content-full-width">
                    
                    <article id="post-8" class="post-8 page type-page status-publish hentry"><div class="woocommerce">



		<h2>Iniciar sesión</h2>

		<form class="woocommerce-form woocommerce-form-login login" method="post">

			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Email<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" value="">
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password">Contraseña <span class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password">
			</p>

			
			<p class="form-row">
				<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="4c34c76378"><input type="hidden" name="_wp_http_referer" value="/my-account/">				<input type="submit" class="woocommerce-Button button" name="login" value="Inicar sesión">

			</p>
            
            <p >
				<a href="/registrarse">No tengo cuenta...</a>
			</p>
            
			<p >
				<a href="">No sabes tu contraseña?</a>
			</p>
            


			
		</form>


</div>
<div class="social-bookmark"></div>                    </article>
                  </section>
  
                  
              </div>
              <div class="dt-sc-hr-invisible-large"></div>
          </div>
@stop