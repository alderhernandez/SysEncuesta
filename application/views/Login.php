<?php

/**
 * @Author: Cesar Mejía
 * @Date:   2019-11-22 14:23:17
 * @Last Modified by:   Sistemas
 * @Last Modified time: 2019-11-23 12:07:18
 */
?>
<body class="login">
    <div>
      <div class="login_wrapper">
        <div class="form login_form">
          <section class="login_content">
            <form action="<?php echo base_url('index.php/Login')?>" method="post">
              <h1><img src="<?PHP echo base_url();?>assets/img/logo.png"></h1>
              <div>
                <input name="username" type="text" class="form-control" placeholder="Usuario" autocomplete="off">
              </div>
              <div>
                <input name="pwd" type="password" class="form-control" placeholder="Password" autocomplete="off">
              </div>
              <div>
                <button type="submit" class="btn btn-success">Ingresar</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br>

                <!--<div>
                  <h2></h2>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>-->
                </div> 
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
</body>
</html>